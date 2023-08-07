<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TitleController extends AbstractController
{

    /**
     * Renvoie les toutes les genres de films existants
     *
     * @return mixed|void
     */

    public function getGenreAction()
    {
        return $this->apiGetRequest("/utils/genres")['results'];
    }

    /**
     * Renvoie toutes les series
     *
     * @param null $serie
     * @return Response
     */
    #[Route('/genres/{serie}', name: 'genre')]
    public function fetchAllGenreAction($serie = null): Response
    {
        $allGenres = array_filter($this->getGenreAction(), function ($value) {

            return $value !== null;
        });

        sort($allGenres);
        $template = $serie ? 'SeriesFilm/all_serie.html.twig' : 'SeriesFilm/all.html.twig';

        return  $this->render($template, ['genres' => $allGenres]);
    }

    /**
     * Renvoie toutes les séries disponibles
     *
     * @param Request $request
     * @return Response
     */
    #[Route('/series', name: 'series')]
    public function getSeriesAction(Request $request): Response
    {
        $allSeries = [];
        $datas = $this->topRatedSeries();

        foreach ($datas as $data) {
            $tab = [];
            foreach ($data['results'] as $result) {
                $result['nbSaisons'] = $this->getData($result['id']);
                $tab[] = $result;
            }
            $allSeries[] = $tab;
        }

        sort($allSeries);
        $pagination = $this->paginator->paginate(
            $allSeries,
            $request->query->getInt('page', 1), //
            10 // Nombre d'éléments par page
        );


        //Rendre le template Twig et passer les données des acteurs
        return $this->render('SeriesFilm/series.html.twig', ['pagination' => $pagination]);
    }

    /**
     * Méthode qui permet de récuperer les films par genre
     *
     * @param $id
     * @param Request $request
     * @return Response
     */
    #[Route('/films/{genre}', name: 'films')]
    public function getFilmsByGenreAction($genre, Request $request)
    {
        $allFilms = [];
        $datas = $this->fetchAllTitleByGenre($genre);

       foreach ($datas as $data) {
           $allFilms[] = $data['results'];
       }


        sort($allFilms);

        $pagination = $this->paginator->paginate(
            $allFilms,
            $request->query->getInt('page', 1), //
            10 // Nombre d'éléments par page
        );

         //Rendre le template Twig et passer les données des acteurs
        return $this->render('SeriesFilm/films.html.twig', ['pagination' => $pagination]);
    }

    /**
     * Méthode récurcive permettant de recupérer les films ou séries
     *
     * @param string|null $genre
     * @param int $page
     * @param array $allTitlesData
     * @return array|Response
     */
    private function fetchAllTitleByGenre(string $genre = null, int $page = 1, array $allTitlesData = []): array|Response
    {

        $endPoint = '?genre=' .$genre.'&page='. $page;
        // Convertir les données JSON en un tableau associatif
        $titleData = $this->apiGetRequest($endPoint);

        // Fusionner les acteurs récupérés avec ceux des appels précédents
        $allTitlesData[] = $titleData;
        // Vérifier s'il y a d'autres pages d'acteurs
        if (!empty($titleData) && isset($titleData['page']) && isset($titleData['entries']) &&
            $titleData['page'] < $titleData['entries']) {
            $nextPage = $titleData['page'] + 1;

            // Appeler récursivement pour récupérer la prochaine page d'acteurs
            return $this->fetchAllTitleByGenre('', $nextPage, $allTitlesData);
        } else {
            // Toutes les données d'acteurs ont été récupérées
            return $allTitlesData;
        }
    }
    /**
     * @return array
     */
    public function getTitleUpComingAction(): array
    {

        return $this->apiGetRequest("/x/upcoming")['results'];
    }

    /**
     * Récupére un title grace à son identifiant
     */
    public function getTitleByIds(string $idsList): array
    {
        return $this->apiGetRequest("/x/titles-by-ids?idsList={$idsList}")['results'];
    }

    /**
     * Renvoie le nombre de saison pour la serie avec comme id $idSerie
     *
     * @param $idSerie
     * @return int
     */
    public function getData($idSerie): int
    {

       return intval($this->apiGetRequest("/seasons/{$idSerie}")['results']);
    }


}