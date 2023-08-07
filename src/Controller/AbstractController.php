<?php
namespace App\Controller;

use Knp\Component\Pager\Paginator;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Response;

class AbstractController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    const URL = "https://moviesdatabase.p.rapidapi.com/";
    const HOST = "X-RapidAPI-Host: moviesdatabase.p.rapidapi.com";
    const KEY = "X-RapidAPI-Key: 3a81606b7cmsh009023c7e656fb0p148074jsn57e64a61ba97";

    /**
     * @var Paginator
     */
    protected $paginator;

    public function __construct(PaginatorInterface $paginator)
    {
        $this->paginator = $paginator;
    }

    /**
     * Méthode récurcive permettant de recupérer le top 250 des series
     *
     * @param int $page
     * @param array $allTitlesData
     * @return array|Response
     */
    protected function topRatedSeries(int $page = 1, array $allTitlesData = []): array|Response
    {
        // Convertir les données JSON en un tableau associatif
        $titleData = $this->apiGetRequest("?list=top_rated_series_250&page={$page}");

        // Fusionner les acteurs récupérés avec ceux des appels précédents
        $allTitlesData[] = $titleData;

        // Vérifier s'il y a d'autres pages d'acteurs
        if (!empty($titleData) && isset($titleData['page']) && isset($titleData['entries']) &&
            $titleData['page'] < $titleData['entries']) {
            $nextPage = $titleData['page'] + 1;

            // Appeler récursivement pour récupérer la prochaine page d'acteurs
            return $this->topRatedSeries($nextPage, $allTitlesData);
        } else {
            // Toutes les données d'acteurs ont été récupérées
            return $allTitlesData;
        }
    }

    protected function apiGetRequest(string $endpoint, $model = 'titles'): array
    {
        $curl = curl_init();
        $url = self::URL.$model.$endpoint;
        $headers = [
            "X-RapidAPI-Host" => self::HOST,
            "X-RapidAPI-Key" => self::KEY,
        ];

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTPHEADER => $headers,
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return [];
        } else {
            return json_decode($response, true);
        }
    }



}