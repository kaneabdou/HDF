<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\ActorController::homeAction'], null, null, null, false, false, null]],
        '/actors' => [[['_route' => 'actors', '_controller' => 'App\\Controller\\ActorController::actors'], null, null, null, false, false, null]],
        '/search/movie' => [[['_route' => 'search_movie', '_controller' => 'App\\Controller\\SearchController::searchMovie'], null, null, null, false, false, null]],
        '/series' => [[['_route' => 'series', '_controller' => 'App\\Controller\\TitleController::getSeriesAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/actor/([^/]++)(*:57)'
                .'|/genres(?:/([^/]++))?(*:85)'
                .'|/films/([^/]++)(*:107)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => 'actor', '_controller' => 'App\\Controller\\ActorController::getActorByIdAction'], ['id'], null, null, false, true, null]],
        85 => [[['_route' => 'genre', 'serie' => null, '_controller' => 'App\\Controller\\TitleController::fetchAllGenreAction'], ['serie'], null, null, false, true, null]],
        107 => [
            [['_route' => 'films', '_controller' => 'App\\Controller\\TitleController::getFilmsByGenreAction'], ['genre'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
