<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/employee/attendance/emp/attendance/types' => [[['_route' => 'app_employee_attendance_emp_attendance_types', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendanceTypesController::index'], null, null, null, false, false, null]],
        '/employee/attendance/emp/attendances' => [[['_route' => 'app_employee_attendance_emp_attendances', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendancesController::index'], null, null, null, false, false, null]],
        '/employee/leave/emp/leave/reasons' => [[['_route' => 'app_employee_leave_emp_leave_reasons', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::index'], null, null, null, false, false, null]],
        '/employee/leave/emp/leaves' => [[['_route' => 'app_employee_leave_emp_leaves', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::index'], null, null, null, false, false, null]],
        '/employee/bank/account' => [[['_route' => 'get_bank_account_info', '_controller' => 'App\\Controller\\Employee\\BankAccountsController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/employee/bank/account/create' => [[['_route' => 'create_bank_account_info', '_controller' => 'App\\Controller\\Employee\\BankAccountsController::create'], null, ['POST' => 0], null, false, false, null]],
        '/employee/bank' => [[['_route' => 'get_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/employee/bank/create' => [[['_route' => 'create_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::create'], null, ['POST' => 0], null, false, false, null]],
        '/department' => [[['_route' => 'all_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/department/create' => [[['_route' => 'create_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::create'], null, ['POST' => 0], null, false, false, null]],
        '/employee/emp/families' => [[['_route' => 'app_employee_emp_families', '_controller' => 'App\\Controller\\Employee\\EmpFamiliesController::index'], null, null, null, false, false, null]],
        '/employee/position' => [[['_route' => 'get_all_position', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/employee/position/create' => [[['_route' => 'create_positions', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::Create'], null, ['POST' => 0], null, false, false, null]],
        '/employee/family/relationships' => [[['_route' => 'app_employee_family_relationships', '_controller' => 'App\\Controller\\Employee\\FamilyRelationshipsController::index'], null, null, null, false, false, null]],
        '/employee/school/degrees' => [[['_route' => 'app_employee_school_degrees', '_controller' => 'App\\Controller\\Employee\\SchoolDegreesController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'get_user', '_controller' => 'App\\Controller\\Employee\\UserController::getAllUser'], null, ['GET' => 0], null, false, false, null]],
        '/user/create' => [[['_route' => 'create_user', '_controller' => 'App\\Controller\\Employee\\UserController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'login_user', '_controller' => 'App\\Controller\\Employee\\UserController::login'], null, ['POST' => 0], null, false, false, null]],
        '/employee/user/education/degrees' => [[['_route' => 'app_employee_user_education_degrees', '_controller' => 'App\\Controller\\Employee\\UserEducationDegreesController::index'], null, null, null, false, false, null]],
        '/role' => [[['_route' => 'all_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/role/create' => [[['_route' => 'create_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/role/update' => [[['_route' => 'update_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::update'], null, ['POST' => 0], null, false, false, null]],
        '/api/role/delete' => [[['_route' => 'delete_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::delete'], null, ['DELETE' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/employee/(?'
                    .'|bank/(?'
                        .'|account/(?'
                            .'|update/([^/]++)(*:54)'
                            .'|delete/([^/]++)(*:76)'
                        .')'
                        .'|update/([^/]++)(*:99)'
                        .'|delete/([^/]++)(*:121)'
                    .')'
                    .'|position/(?'
                        .'|update/([^/]++)(*:157)'
                        .'|delete/([^/]++)(*:180)'
                    .')'
                .')'
                .'|/department/(?'
                    .'|update/([^/]++)(*:220)'
                    .'|delete/([^/]++)(*:243)'
                    .'|([^/]++)(*:259)'
                .')'
                .'|/user/update/([^/]++)(*:289)'
                .'|/api/user/delete/([^/]++)(*:322)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:358)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        54 => [[['_route' => 'update_bank_account_info', '_controller' => 'App\\Controller\\Employee\\BankAccountsController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        76 => [[['_route' => 'delete_bank_account_info', '_controller' => 'App\\Controller\\Employee\\BankAccountsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        99 => [[['_route' => 'update_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        121 => [[['_route' => 'delete_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        157 => [[['_route' => 'update_position', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        180 => [[['_route' => 'delete_position', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        220 => [[['_route' => 'update_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        243 => [[['_route' => 'delete_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        259 => [[['_route' => 'show_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        289 => [[['_route' => 'update_user', '_controller' => 'App\\Controller\\Employee\\UserController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        322 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\Employee\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        358 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
