<?php

namespace App\EventListener;

use Knp\Component\Pager\Paginator;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class MovieSearchSubscriber implements EventSubscriberInterface
{
    /**
     * @var Paginator
     */
    protected $paginator;

    public function __construct(PaginatorInterface $paginator)
    {
        $this->paginator = $paginator;
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => 'onKernelRequest',
        ];
    }

    public function onKernelRequest(RequestEvent $event)
    {
        $request = $event->getRequest();
        $route = $request->attributes->get('_route');

        if ($route === 'search_movie') {

            $searchTerm = urldecode($request->query->get('keyword')) ;

            if ($searchTerm) {
                $movies = $this->searchMovies($searchTerm);
                $request->attributes->set('movies', $movies);
            }
        }
    }

    private function searchMovies(string $searchTerm): array
    {
        $request = new Request();
        $datas = $this->getSearch(urlencode($searchTerm));
        $results = [];
        $count = 0;

        foreach ($datas as $data) {

            $count += count($data['results']);
            $results[] = $data['results'];
        }

        sort($results);

        return ["paginator" => $this->paginator->paginate(
            $results,
            $request->query->getInt('page', 1), //
            10 // Nombre d'éléments par page
        ), "total" => $count];
    }

    /**
     * @param $searchTerm
     * @param int $page
     * @param array $results
     * @return array|Response
     */
    private function getSearch($searchTerm, int $page = 1, array $results = []): array|Response
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://moviesdatabase.p.rapidapi.com/titles/search/akas/{$searchTerm}?page={$page}",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: moviesdatabase.p.rapidapi.com",
                "X-RapidAPI-Key: 3a81606b7cmsh009023c7e656fb0p148074jsn57e64a61ba97"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return new Response("cURL Error #: " . $err);
        } else {

            // Convertir les données JSON en un tableau associatif
            $titleData = json_decode($response, true);

            // Fusionner les acteurs récupérés avec ceux des appels précédents
            $results[] = $titleData;

            if (!empty($titleData) && isset($titleData['page']) && isset($titleData['entries']) &&
                $titleData['page'] < $titleData['entries']) {
                $nextPage = $titleData['page'] + 1;


                return $this->getSearch($searchTerm, $nextPage, $results);
            } else {

                return $results;
            }
        }
    }
}
