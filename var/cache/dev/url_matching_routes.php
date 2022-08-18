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
        '/employee/leave/reason' => [[['_route' => 'all_leave_reasons', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/employee/leave/reason/create' => [[['_route' => 'create_leave_reasons', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::create'], null, ['POST' => 0], null, false, false, null]],
        '/employee/leave' => [[['_route' => 'all_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/employee/leave/create' => [[['_route' => 'create_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::create'], null, ['POST' => 0], null, false, false, null]],
        '/employee/bank/accounts' => [[['_route' => 'app_employee_bank_accounts', '_controller' => 'App\\Controller\\Employee\\BankAccountsController::index'], null, null, null, false, false, null]],
        '/employee/banks' => [[['_route' => 'app_employee_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::index'], null, null, null, false, false, null]],
        '/department' => [[['_route' => 'all_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/department/create' => [[['_route' => 'create_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::create'], null, ['POST' => 0], null, false, false, null]],
        '/employee/emp/families' => [[['_route' => 'app_employee_emp_families', '_controller' => 'App\\Controller\\Employee\\EmpFamiliesController::index'], null, null, null, false, false, null]],
        '/employee/positions' => [[['_route' => 'app_employee_emp_positions', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/employee/positions/create' => [[['_route' => 'create_positions', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::create'], null, ['POST' => 0], null, false, false, null]],
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
                .'|/employee/leave/(?'
                    .'|reason/(?'
                        .'|update/([^/]++)(*:51)'
                        .'|delete/([^/]++)(*:73)'
                    .')'
                    .'|update/([^/]++)(*:96)'
                    .'|delete/([^/]++)(*:118)'
                .')'
                .'|/department/(?'
                    .'|update/([^/]++)(*:157)'
                    .'|delete/([^/]++)(*:180)'
                    .'|([^/]++)(*:196)'
                .')'
                .'|/user/update/([^/]++)(*:226)'
                .'|/api/user/delete/([^/]++)(*:259)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:295)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        51 => [[['_route' => 'update_leave_reason', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        73 => [[['_route' => 'delete_leave_reason', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        96 => [[['_route' => 'update_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        118 => [[['_route' => 'delete_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        157 => [[['_route' => 'update_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        180 => [[['_route' => 'delete_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        196 => [[['_route' => 'show_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        226 => [[['_route' => 'update_user', '_controller' => 'App\\Controller\\Employee\\UserController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        259 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\Employee\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        295 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
