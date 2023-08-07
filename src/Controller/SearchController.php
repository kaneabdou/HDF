<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SearchController extends AbstractController
{

    #[Route('/search/movie', name: 'search_movie')]
    public function searchMovie(Request $request): Response
    {
        $movies = $request->attributes->get('movies', []);

        return $this->render('search/movie.html.twig', [
            'movies' => $movies["paginator"],
            'total'  => $movies['total']
        ]);
    }
}