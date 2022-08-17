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
        '/user' => [[['_route' => 'get_user', '_controller' => 'App\\Controller\\Employee\\UserController::getAllUser'], null, ['GET' => 0], null, false, false, null]],
        '/api/user/create' => [[['_route' => 'create_user', '_controller' => 'App\\Controller\\Employee\\UserController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'login_user', '_controller' => 'App\\Controller\\Employee\\UserController::login'], null, ['POST' => 0], null, false, false, null]],
        '/role' => [[['_route' => 'all_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/role/create' => [[['_route' => 'create_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/role/update' => [[['_route' => 'update_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::update'], null, ['POST' => 0], null, false, false, null]],
        '/api/role/delete' => [[['_route' => 'delete_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::delete'], null, ['DELETE' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/department/(?'
                    .'|update/([^/]++)(*:37)'
                    .'|delete/([^/]++)(*:59)'
                    .'|([^/]++)(*:74)'
                .')'
                .'|/user/update/([^/]++)(*:103)'
                .'|/api/user/delete/([^/]++)(*:136)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:172)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'update_department', '_controller' => 'App\\Controller\\Employee\\EmDepartmentController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        59 => [[['_route' => 'delete_department', '_controller' => 'App\\Controller\\Employee\\EmDepartmentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        74 => [[['_route' => 'show_department', '_controller' => 'App\\Controller\\Employee\\EmDepartmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        103 => [[['_route' => 'update_user', '_controller' => 'App\\Controller\\Employee\\UserController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        136 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\Employee\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        172 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
