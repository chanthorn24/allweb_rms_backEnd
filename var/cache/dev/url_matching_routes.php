<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/department' => [[['_route' => 'all_department', '_controller' => 'App\\Controller\\Employee\\EmDepartmentController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/department/create' => [[['_route' => 'create_department', '_controller' => 'App\\Controller\\Employee\\EmDepartmentController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/user' => [[['_route' => 'all_user', '_controller' => 'App\\Controller\\Employee\\UserController::getAllUser'], null, ['GET' => 0], null, false, false, null]],
        '/api/user/create' => [[['_route' => 'create_user', '_controller' => 'App\\Controller\\Employee\\UserController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'login_user', '_controller' => 'App\\Controller\\Employee\\UserController::login'], null, ['POST' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/department/(?'
                    .'|update/([^/]++)(*:37)'
                    .'|delete/([^/]++)(*:59)'
                .')'
                .'|/api/user/(?'
                    .'|update/([^/]++)(*:95)'
                    .'|delete/([^/]++)(*:117)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:154)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'update_department', '_controller' => 'App\\Controller\\Employee\\EmDepartmentController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        59 => [[['_route' => 'delete_department', '_controller' => 'App\\Controller\\Employee\\EmDepartmentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        95 => [[['_route' => 'update_user', '_controller' => 'App\\Controller\\Employee\\UserController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        117 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\Employee\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        154 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
