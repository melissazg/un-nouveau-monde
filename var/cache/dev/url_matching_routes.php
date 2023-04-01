<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\AboutController::index'], null, ['GET' => 0], null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::contact'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'home.index', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription.index', '_controller' => 'App\\Controller\\InscriptionController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/manager' => [[['_route' => 'app_manager', '_controller' => 'App\\Controller\\ManagerController::index'], null, ['GET' => 0], null, false, false, null]],
        '/manager/nouveau' => [[['_route' => 'film.new', '_controller' => 'App\\Controller\\ManagerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/partners' => [[['_route' => 'app_partners', '_controller' => 'App\\Controller\\PartnersController::index'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_pre_login', '_controller' => 'App\\Controller\\PreLoginController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/catalogue' => [[['_route' => 'app_catalogue', '_controller' => 'App\\Controller\\SearchController::index'], null, null, null, false, false, null]],
        '/catalogue_musique' => [[['_route' => 'app_catalogue_musique', '_controller' => 'App\\Controller\\SearchMusiqueController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/utilisateur/profil' => [[['_route' => 'app_user_profile', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/verif/([^/]++)(*:184)'
                .'|/manager/(?'
                    .'|edition/([^/]++)(*:220)'
                    .'|supprimer/([^/]++)(*:246)'
                .')'
                .'|/player(?'
                    .'|/([^/]++)(*:274)'
                    .'|_musique/([^/]++)(*:299)'
                .')'
                .'|/utilisateur/edition(?'
                    .'|/([^/]++)(*:340)'
                    .'|\\-mot\\-de\\-passe/([^/]++)(*:373)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        184 => [[['_route' => 'verify_user', '_controller' => 'App\\Controller\\InscriptionController::verifyUser'], ['token'], null, null, false, true, null]],
        220 => [[['_route' => 'film.edit', '_controller' => 'App\\Controller\\ManagerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        246 => [[['_route' => 'film.delete', '_controller' => 'App\\Controller\\ManagerController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        274 => [[['_route' => 'app_player', '_controller' => 'App\\Controller\\PlayerController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        299 => [[['_route' => 'app_player_musique', '_controller' => 'App\\Controller\\PlayerMusiqueController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        340 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        373 => [
            [['_route' => 'app_user_edit_password', '_controller' => 'App\\Controller\\UserController::editPassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
