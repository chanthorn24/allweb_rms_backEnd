<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/user' => [[['_route' => 'all_user', '_controller' => 'App\\Controller\\UserController::getAllUser'], null, ['GET' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'login_user', '_controller' => 'App\\Controller\\UserController::login'], null, ['POST' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/user/(?'
                    .'|update/([^/]++)(*:35)'
                    .'|delete/([^/]++)(*:57)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:93)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'create_user', '_controller' => 'App\\Controller\\UserController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        57 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        93 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
