<?php

namespace App\Controller;

use Knp\Component\Pager\Paginator;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActorController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function homeAction(PaginatorInterface $paginator): Response
    {
        $datas = [];
        $upComingTitle = (new TitleController($paginator))->getTitleUpComingAction();

        foreach ($upComingTitle as $title) {
            $datas[] = [
                'id'            => $title['id'],
                'primaryImage'  => $title['primaryImage'],
                'titleText'     => $title['titleText'],
            ];
        }

        return $this->render('Home/home.html.twig', ['upComingTitle' => $datas]);
    }

    #[Route('/actors', name: 'actors')]
    public function actors(Request $request): Response
    {
        $datas = $this->fetchActorsData();
        $actorsData = [];

        foreach ($datas as $data) {
            foreach (array_values($data['results']) as $row) {
                $actorsData[] = $row;
            }
        }

        //Tri par ordre alphabétique
        sort($actorsData);
        $pagination = $this->paginator->paginate(
            $actorsData,
            $request->query->getInt('page', 1), //
            10 // Nombre d'éléments par page
        );

        // Rendre le template Twig et passer les données des acteurs
        return $this->render('Actor/actors.html.twig', ['pagination' => $pagination]);
    }

    /**
     * Méthode récurcive permettant de recupérer les infos de tous les acteurs
     *
     * @param int $page
     * @param array $allActorsData
     * @return array|Response
     */
    private function fetchActorsData(int $page = 1, array $allActorsData = []): array|Response
    {
            // Convertir les données JSON en un tableau associatif
            $actorsData = $this->apiGetRequest("?page={$page}", 'actors');

            // Fusionner les acteurs récupérés avec ceux des appels précédents
            $allActorsData[] = $actorsData;

            // Vérifier s'il y a d'autres pages d'acteurs
            if (!empty($actorsData) && isset($actorsData['page']) && isset($actorsData['entries']) &&
                $actorsData['page'] < $actorsData['entries']) {
                $nextPage = $actorsData['page'] + 1;

                // Appeler récursivement pour récupérer la prochaine page d'acteurs
                return $this->fetchActorsData($nextPage, $allActorsData);
            } else {
                // Toutes les données d'acteurs ont été récupérées
                return $allActorsData;
            }
    }



    #[Route('/actor/{id}', name: 'actor')]
    public function getActorByIdAction($id, PaginatorInterface $paginator)
    {
//        $curl = curl_init();
//        curl_setopt_array($curl, [
//            CURLOPT_URL => self::URL."actors/$id",
//

        $results = $this->apiGetRequest("/$id", 'actors')['results'];

        $titleObject = new TitleController($paginator);
        $titlesByActor = $titleObject->getTitleByIds($results['knownForTitles']);

        return $this->render('Actor/actorDetails.html.twig', [
            'infos' => $results,
            'listTitle' => $titlesByActor,
        ]);
    }
}
