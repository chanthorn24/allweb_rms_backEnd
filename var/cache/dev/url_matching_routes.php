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
        '/employee/leave/user/request/pending' => [[['_route' => 'request_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::getByRequest'], null, ['GET' => 0], null, false, false, null]],
        '/employee/bank/account' => [[['_route' => 'get_bank_account_info', '_controller' => 'App\\Controller\\Employee\\BankAccountsController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/employee/bank/account/create' => [[['_route' => 'create_bank_account_info', '_controller' => 'App\\Controller\\Employee\\BankAccountsController::create'], null, ['POST' => 0], null, false, false, null]],
        '/employee/bank' => [[['_route' => 'get_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/department' => [[['_route' => 'all_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/employee/family' => [[['_route' => 'get_family', '_controller' => 'App\\Controller\\Employee\\EmpFamiliesController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/employee/family/create' => [[['_route' => 'create_family', '_controller' => 'App\\Controller\\Employee\\EmpFamiliesController::create'], null, ['POST' => 0], null, false, false, null]],
        '/employee/position' => [[['_route' => 'get_all_position', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/employee/family/relationship' => [[['_route' => 'get_family_relationships', '_controller' => 'App\\Controller\\Employee\\FamilyRelationshipsController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/employee/degree' => [[['_route' => 'all_school_degree', '_controller' => 'App\\Controller\\Employee\\SchoolDegreesController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/user' => [[['_route' => 'get_user', '_controller' => 'App\\Controller\\Employee\\UserController::getAllUser'], null, ['GET' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'login_user', '_controller' => 'App\\Controller\\Employee\\UserController::login'], null, ['POST' => 0], null, false, false, null]],
        '/admin/create' => [[['_route' => 'create_admin', '_controller' => 'App\\Controller\\Employee\\UserController::createAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/employee/education' => [[['_route' => 'all_employee_education', '_controller' => 'App\\Controller\\Employee\\UserEducationDegreesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/employee/education/create' => [[['_route' => 'create_employee_education', '_controller' => 'App\\Controller\\Employee\\UserEducationDegreesController::create'], null, ['POST' => 0], null, false, false, null]],
        '/role' => [[['_route' => 'all_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::getAll'], null, ['GET' => 0], null, false, false, null]],
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
                        .'|([^/]++)(*:460)'
                        .'|create(*:474)'
                        .'|update/([^/]++)(*:497)'
                        .'|delete/([^/]++)(*:520)'
                    .')'
                    .'|family/(?'
                        .'|update/([^/]++)(*:554)'
                        .'|delete/([^/]++)(*:577)'
                        .'|relationship/(?'
                            .'|([^/]++)(*:609)'
                            .'|create(*:623)'
                            .'|update/([^/]++)(*:646)'
                            .'|delete/([^/]++)(*:669)'
                        .')'
                    .')'
                    .'|position/(?'
                        .'|([^/]++)(*:699)'
                        .'|create(*:713)'
                        .'|update/([^/]++)(*:736)'
                        .'|delete/([^/]++)(*:759)'
                    .')'
                    .'|degree/(?'
                        .'|([^/]++)(*:786)'
                        .'|create(*:800)'
                        .'|update/([^/]++)(*:823)'
                        .'|delete/([^/]++)(*:846)'
                    .')'
                    .'|education/(?'
                        .'|update/([^/]++)(*:883)'
                        .'|delete/([^/]++)(*:906)'
                    .')'
                .')'
                .'|/department/(?'
                    .'|([^/]++)(*:939)'
                    .'|create(*:953)'
                    .'|update/([^/]++)(*:976)'
                    .'|delete/([^/]++)(*:999)'
                    .'|([^/]++)(*:1015)'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(*:1042)'
                    .'|by\\-email/([^/]++)(*:1069)'
                    .'|leave(*:1083)'
                    .'|attendance(*:1102)'
                    .'|create(*:1117)'
                    .'|update/([^/]++)(*:1141)'
                    .'|password(*:1158)'
                .')'
                .'|/api/user/delete/([^/]++)(*:1193)'
                .'|/role/(?'
                    .'|([^/]++)(*:1219)'
                    .'|create(*:1234)'
                    .'|update/([^/]++)(*:1258)'
                    .'|delete(*:1273)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:1311)'
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
        460 => [[['_route' => 'get_id_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::getById'], ['id'], ['GET' => 0], null, false, true, null]],
        474 => [[['_route' => 'create_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::create'], [], ['POST' => 0], null, false, false, null]],
        497 => [[['_route' => 'update_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        520 => [[['_route' => 'delete_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        554 => [[['_route' => 'update_family', '_controller' => 'App\\Controller\\Employee\\EmpFamiliesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        577 => [[['_route' => 'delete_family', '_controller' => 'App\\Controller\\Employee\\EmpFamiliesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        609 => [[['_route' => 'getID_family_relationships', '_controller' => 'App\\Controller\\Employee\\FamilyRelationshipsController::getByID'], ['id'], ['GET' => 0], null, false, true, null]],
        623 => [[['_route' => 'create_family_relationships', '_controller' => 'App\\Controller\\Employee\\FamilyRelationshipsController::create'], [], ['POST' => 0], null, false, false, null]],
        646 => [[['_route' => 'update_family_relationships', '_controller' => 'App\\Controller\\Employee\\FamilyRelationshipsController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        669 => [[['_route' => 'delete_family_relationships', '_controller' => 'App\\Controller\\Employee\\FamilyRelationshipsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        699 => [[['_route' => 'get_one_position', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::getOnePosition'], ['id'], ['GET' => 0], null, false, true, null]],
        713 => [[['_route' => 'create_positions', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::Create'], [], ['POST' => 0], null, false, false, null]],
        736 => [[['_route' => 'update_position', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        759 => [[['_route' => 'delete_position', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        786 => [[['_route' => 'id_school_degree', '_controller' => 'App\\Controller\\Employee\\SchoolDegreesController::getByID'], ['id'], ['GET' => 0], null, false, true, null]],
        800 => [[['_route' => 'create_school_degree', '_controller' => 'App\\Controller\\Employee\\SchoolDegreesController::create'], [], ['POST' => 0], null, false, false, null]],
        823 => [[['_route' => 'update_school_degree', '_controller' => 'App\\Controller\\Employee\\SchoolDegreesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        846 => [[['_route' => 'delete_school_degree', '_controller' => 'App\\Controller\\Employee\\SchoolDegreesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        883 => [[['_route' => 'update_employee_education', '_controller' => 'App\\Controller\\Employee\\UserEducationDegreesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        906 => [[['_route' => 'delete_employee_education', '_controller' => 'App\\Controller\\Employee\\UserEducationDegreesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        939 => [[['_route' => 'one_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        953 => [[['_route' => 'create_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::create'], [], ['POST' => 0], null, false, false, null]],
        976 => [[['_route' => 'update_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        999 => [[['_route' => 'delete_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1015 => [[['_route' => 'show_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1042 => [[['_route' => 'one_user', '_controller' => 'App\\Controller\\Employee\\UserController::getOneUser'], ['id'], ['GET' => 0], null, false, true, null]],
        1069 => [[['_route' => 'email_one_user', '_controller' => 'App\\Controller\\Employee\\UserController::getOnlyUser'], ['email'], ['GET' => 0], null, false, true, null]],
        1083 => [[['_route' => 'get_leave_user', '_controller' => 'App\\Controller\\Employee\\UserController::getLeave'], [], ['GET' => 0], null, false, false, null]],
        1102 => [[['_route' => 'get_attendance_user', '_controller' => 'App\\Controller\\Employee\\UserController::getAttendance'], [], ['GET' => 0], null, false, false, null]],
        1117 => [[['_route' => 'create_user', '_controller' => 'App\\Controller\\Employee\\UserController::create'], [], ['POST' => 0], null, false, false, null]],
        1141 => [[['_route' => 'update_user', '_controller' => 'App\\Controller\\Employee\\UserController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        1158 => [[['_route' => 'change_pw_user', '_controller' => 'App\\Controller\\ResetPasswordController::changePassword'], [], ['PUT' => 0], null, false, false, null]],
        1193 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\Employee\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1219 => [[['_route' => 'id_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::getByID'], ['id'], ['GET' => 0], null, false, true, null]],
        1234 => [[['_route' => 'create_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::create'], [], ['POST' => 0], null, false, false, null]],
        1258 => [[['_route' => 'update_role_by_id', '_controller' => 'App\\Controller\\Employee\\UserRoleController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        1273 => [[['_route' => 'delete_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::delete'], [], ['DELETE' => 0], null, false, false, null]],
        1311 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
