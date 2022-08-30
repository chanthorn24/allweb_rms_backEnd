<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/employee/attendance/type' => [[['_route' => 'all_attendance_type', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendanceTypesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/employee/attendance' => [[['_route' => 'all_employee_attendance', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendancesController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/employee/attendance/create' => [[['_route' => 'create_employee_attendance', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendancesController::create'], null, ['POST' => 0], null, false, false, null]],
        '/employee/leave/reason' => [[['_route' => 'all_leave_reasons', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/employee/leave' => [[['_route' => 'all_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/employee/bank/account' => [[['_route' => 'get_bank_account_info', '_controller' => 'App\\Controller\\Employee\\BankAccountsController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/employee/bank/account/create' => [[['_route' => 'create_bank_account_info', '_controller' => 'App\\Controller\\Employee\\BankAccountsController::create'], null, ['POST' => 0], null, false, false, null]],
        '/employee/bank' => [[['_route' => 'get_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/employee/bank/create' => [[['_route' => 'create_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::create'], null, ['POST' => 0], null, false, false, null]],
        '/department' => [[['_route' => 'all_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/employee/family' => [[['_route' => 'get_family', '_controller' => 'App\\Controller\\Employee\\EmpFamiliesController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/employee/family/create' => [[['_route' => 'create_family', '_controller' => 'App\\Controller\\Employee\\EmpFamiliesController::create'], null, ['POST' => 0], null, false, false, null]],
        '/employee/position' => [[['_route' => 'get_all_position', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/employee/family/relationship' => [[['_route' => 'get_family_relationships', '_controller' => 'App\\Controller\\Employee\\FamilyRelationshipsController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/employee/family/relationship/create' => [[['_route' => 'create_family_relationships', '_controller' => 'App\\Controller\\Employee\\FamilyRelationshipsController::create'], null, ['POST' => 0], null, false, false, null]],
        '/employee/degree' => [[['_route' => 'all_school_degree', '_controller' => 'App\\Controller\\Employee\\SchoolDegreesController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/employee/degree/create' => [[['_route' => 'create_school_degree', '_controller' => 'App\\Controller\\Employee\\SchoolDegreesController::create'], null, ['POST' => 0], null, false, false, null]],
        '/user' => [[['_route' => 'get_user', '_controller' => 'App\\Controller\\Employee\\UserController::getAllUser'], null, ['GET' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'login_user', '_controller' => 'App\\Controller\\Employee\\UserController::login'], null, ['POST' => 0], null, false, false, null]],
        '/admin/create' => [[['_route' => 'create_admin', '_controller' => 'App\\Controller\\Employee\\UserController::createAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/employee/education' => [[['_route' => 'all_employee_education', '_controller' => 'App\\Controller\\Employee\\UserEducationDegreesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/employee/education/create' => [[['_route' => 'create_employee_education', '_controller' => 'App\\Controller\\Employee\\UserEducationDegreesController::create'], null, ['POST' => 0], null, false, false, null]],
        '/role' => [[['_route' => 'all_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/role/create' => [[['_route' => 'create_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/role/update' => [[['_route' => 'update_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::update'], null, ['PUT' => 0], null, false, false, null]],
        '/api/role/delete' => [[['_route' => 'delete_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::delete'], null, ['DELETE' => 0], null, false, false, null]],
        '/mailer' => [[['_route' => 'app_mailer', '_controller' => 'App\\Controller\\MailerController::sendEmail'], null, null, null, false, false, null]],
        '/reset/password' => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::resetPassword'], null, ['PUT' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/employee/(?'
                    .'|attendance/(?'
                        .'|type/(?'
                            .'|([^/]++)(*:50)'
                            .'|create(*:63)'
                            .'|update/([^/]++)(*:85)'
                            .'|delete/([^/]++)(*:107)'
                        .')'
                        .'|get\\-type/([^/]++)(*:134)'
                        .'|update/([^/]++)(*:157)'
                        .'|delete/([^/]++)(*:180)'
                    .')'
                    .'|leave/(?'
                        .'|reason/(?'
                            .'|([^/]++)(*:216)'
                            .'|create(*:230)'
                            .'|update/([^/]++)(*:253)'
                            .'|delete/([^/]++)(*:276)'
                        .')'
                        .'|([^/]++)(*:293)'
                        .'|u(?'
                            .'|ser/([^/]++)(*:317)'
                            .'|pdate/([^/]++)(*:339)'
                        .')'
                        .'|create(*:354)'
                        .'|delete/([^/]++)(*:377)'
                    .')'
                    .'|bank/(?'
                        .'|account/(?'
                            .'|update/([^/]++)(*:420)'
                            .'|delete/([^/]++)(*:443)'
                        .')'
                        .'|update/([^/]++)(*:467)'
                        .'|delete/([^/]++)(*:490)'
                    .')'
                    .'|family/(?'
                        .'|update/([^/]++)(*:524)'
                        .'|delete/([^/]++)(*:547)'
                        .'|relationship/(?'
                            .'|update/([^/]++)(*:586)'
                            .'|delete/([^/]++)(*:609)'
                        .')'
                    .')'
                    .'|position/(?'
                        .'|([^/]++)(*:639)'
                        .'|create(*:653)'
                        .'|update/([^/]++)(*:676)'
                        .'|delete/([^/]++)(*:699)'
                    .')'
                    .'|degree/(?'
                        .'|update/([^/]++)(*:733)'
                        .'|delete/([^/]++)(*:756)'
                    .')'
                    .'|education/(?'
                        .'|update/([^/]++)(*:793)'
                        .'|delete/([^/]++)(*:816)'
                    .')'
                .')'
                .'|/department/(?'
                    .'|([^/]++)(*:849)'
                    .'|create(*:863)'
                    .'|update/([^/]++)(*:886)'
                    .'|delete/([^/]++)(*:909)'
                    .'|([^/]++)(*:925)'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(*:951)'
                    .'|by\\-email/([^/]++)(*:977)'
                    .'|leave(*:990)'
                    .'|attendance(*:1008)'
                    .'|create(*:1023)'
                    .'|update/([^/]++)(*:1047)'
                    .'|password(*:1064)'
                .')'
                .'|/api/user/delete/([^/]++)(*:1099)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:1136)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        50 => [[['_route' => 'id_attendance_type', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendanceTypesController::getById'], ['id'], ['GET' => 0], null, false, true, null]],
        63 => [[['_route' => 'create_attendance_type', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendanceTypesController::create'], [], ['POST' => 0], null, false, false, null]],
        85 => [[['_route' => 'update_attendance_type', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendanceTypesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        107 => [[['_route' => 'delete_attendance_type', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendanceTypesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        134 => [[['_route' => 'get_type_attendance', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendancesController::getType'], ['id'], ['GET' => 0], null, false, true, null]],
        157 => [[['_route' => 'update_employee_attendance', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendancesController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        180 => [[['_route' => 'delete_employee_attendance', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendancesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        216 => [[['_route' => 'one_leave_reason', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        230 => [[['_route' => 'create_leave_reasons', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::create'], [], ['POST' => 0], null, false, false, null]],
        253 => [[['_route' => 'update_leave_reason', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        276 => [[['_route' => 'delete_leave_reason', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        293 => [[['_route' => 'getone_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        317 => [[['_route' => 'email_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::getByUser'], ['user_id'], ['GET' => 0], null, false, true, null]],
        339 => [[['_route' => 'update_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        354 => [[['_route' => 'create_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::create'], [], ['POST' => 0], null, false, false, null]],
        377 => [[['_route' => 'delete_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        420 => [[['_route' => 'update_bank_account_info', '_controller' => 'App\\Controller\\Employee\\BankAccountsController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        443 => [[['_route' => 'delete_bank_account_info', '_controller' => 'App\\Controller\\Employee\\BankAccountsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        467 => [[['_route' => 'update_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        490 => [[['_route' => 'delete_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        524 => [[['_route' => 'update_family', '_controller' => 'App\\Controller\\Employee\\EmpFamiliesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        547 => [[['_route' => 'delete_family', '_controller' => 'App\\Controller\\Employee\\EmpFamiliesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        586 => [[['_route' => 'update_family_relationships', '_controller' => 'App\\Controller\\Employee\\FamilyRelationshipsController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        609 => [[['_route' => 'delete_family_relationships', '_controller' => 'App\\Controller\\Employee\\FamilyRelationshipsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        639 => [[['_route' => 'get_one_position', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::getOnePosition'], ['id'], ['GET' => 0], null, false, true, null]],
        653 => [[['_route' => 'create_positions', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::Create'], [], ['POST' => 0], null, false, false, null]],
        676 => [[['_route' => 'update_position', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        699 => [[['_route' => 'delete_position', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        733 => [[['_route' => 'update_school_degree', '_controller' => 'App\\Controller\\Employee\\SchoolDegreesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        756 => [[['_route' => 'delete_school_degree', '_controller' => 'App\\Controller\\Employee\\SchoolDegreesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        793 => [[['_route' => 'update_employee_education', '_controller' => 'App\\Controller\\Employee\\UserEducationDegreesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        816 => [[['_route' => 'delete_employee_education', '_controller' => 'App\\Controller\\Employee\\UserEducationDegreesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        849 => [[['_route' => 'one_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        863 => [[['_route' => 'create_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::create'], [], ['POST' => 0], null, false, false, null]],
        886 => [[['_route' => 'update_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        909 => [[['_route' => 'delete_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        925 => [[['_route' => 'show_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        951 => [[['_route' => 'one_user', '_controller' => 'App\\Controller\\Employee\\UserController::getOneUser'], ['id'], ['GET' => 0], null, false, true, null]],
        977 => [[['_route' => 'email_one_user', '_controller' => 'App\\Controller\\Employee\\UserController::getOnlyUser'], ['email'], ['GET' => 0], null, false, true, null]],
        990 => [[['_route' => 'get_leave_user', '_controller' => 'App\\Controller\\Employee\\UserController::getLeave'], [], ['GET' => 0], null, false, false, null]],
        1008 => [[['_route' => 'get_attendance_user', '_controller' => 'App\\Controller\\Employee\\UserController::getAttendance'], [], ['GET' => 0], null, false, false, null]],
        1023 => [[['_route' => 'create_user', '_controller' => 'App\\Controller\\Employee\\UserController::create'], [], ['POST' => 0], null, false, false, null]],
        1047 => [[['_route' => 'update_user', '_controller' => 'App\\Controller\\Employee\\UserController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        1064 => [[['_route' => 'change_pw_user', '_controller' => 'App\\Controller\\ResetPasswordController::changePassword'], [], ['PUT' => 0], null, false, false, null]],
        1099 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\Employee\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1136 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
