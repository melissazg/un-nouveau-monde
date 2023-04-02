<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_about' => [[], ['_controller' => 'App\\Controller\\AboutController::index'], [], [['text', '/about']], [], [], []],
    'app_cart' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart']], [], [], []],
    'cart_add' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/add']], [], [], []],
    'cart_remove' => [['id'], ['_controller' => 'App\\Controller\\CartController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/remove']], [], [], []],
    'cart_delete' => [['id'], ['_controller' => 'App\\Controller\\CartController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete']], [], [], []],
    'cart_deleteAll' => [[], ['_controller' => 'App\\Controller\\CartController::deleteAll'], [], [['text', '/delete']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\ContactController::contact'], [], [['text', '/contact']], [], [], []],
    'home.index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'inscription.index' => [[], ['_controller' => 'App\\Controller\\InscriptionController::create'], [], [['text', '/inscription']], [], [], []],
    'verify_user' => [['token'], ['_controller' => 'App\\Controller\\InscriptionController::verifyUser'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/verif']], [], [], []],
    'app_manager' => [[], ['_controller' => 'App\\Controller\\ManagerController::index'], [], [['text', '/manager']], [], [], []],
    'film.new' => [[], ['_controller' => 'App\\Controller\\ManagerController::new'], [], [['text', '/manager/nouveau']], [], [], []],
    'film.edit' => [['id'], ['_controller' => 'App\\Controller\\ManagerController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/manager/edition']], [], [], []],
    'film.delete' => [['id'], ['_controller' => 'App\\Controller\\ManagerController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/manager/supprimer']], [], [], []],
    'app_partners' => [[], ['_controller' => 'App\\Controller\\PartnersController::index'], [], [['text', '/partners']], [], [], []],
    'app_player' => [['id'], ['_controller' => 'App\\Controller\\PlayerController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/player']], [], [], []],
    'app_pre_login' => [[], ['_controller' => 'App\\Controller\\PreLoginController::index'], [], [['text', '/']], [], [], []],
    'app_catalogue' => [[], ['_controller' => 'App\\Controller\\SearchController::index'], [], [['text', '/catalogue']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_user_profile' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/utilisateur/profil']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur/edition']], [], [], []],
    'app_user_edit_password' => [['id'], ['_controller' => 'App\\Controller\\UserController::editPassword'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur/edition-mot-de-passe']], [], [], []],
];
