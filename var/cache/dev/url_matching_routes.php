<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'Home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/classe' => [[['_route' => 'app_classe', '_controller' => 'App\\Controller\\ClasseController::index'], null, null, null, false, false, null]],
        '/ecole' => [[['_route' => 'app_ecole', '_controller' => 'App\\Controller\\EcoleController::index'], null, null, null, false, false, null]],
        '/eleve' => [[['_route' => 'app_eleve', '_controller' => 'App\\Controller\\EleveController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/home/dashboard' => [[['_route' => 'app_home_dashboard', '_controller' => 'App\\Controller\\HomeController::Dashboard'], null, null, null, false, false, null]],
        '/mobile' => [[['_route' => 'app_mobile', '_controller' => 'App\\Controller\\MobileController::index'], null, null, null, false, false, null]],
        '/mobile/validate' => [[['_route' => 'app_mobile_validate', '_controller' => 'App\\Controller\\MobileController::validate'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'app_produit', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null]],
        '/produit/create' => [[['_route' => 'app_produit_create', '_controller' => 'App\\Controller\\ProduitController::create'], null, null, null, false, false, null]],
        '/produit/list' => [[['_route' => 'app_produit_list', '_controller' => 'App\\Controller\\ProduitController::edit'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\UserController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
        '/list' => [[['_route' => 'app_list', '_controller' => 'App\\Controller\\UserController::list'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
