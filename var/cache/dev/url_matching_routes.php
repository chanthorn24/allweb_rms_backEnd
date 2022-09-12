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
        '/employee/attendance/monthly/user' => [[['_route' => 'monthly_employee_attendance', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendancesController::getMonthlyByUser'], null, ['GET' => 0], null, false, false, null]],
        '/employee/attendance/create' => [[['_route' => 'create_employee_attendance', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendancesController::create'], null, ['POST' => 0], null, false, false, null]],
        '/employee/leave/reason' => [[['_route' => 'all_leave_reasons', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/employee/leave' => [[['_route' => 'all_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/employee/leave/user/request/pending' => [[['_route' => 'pending_request_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::getByRequest'], null, ['GET' => 0], null, false, false, null]],
        '/employee/leave/user/request/approved' => [[['_route' => 'request_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::approved'], null, ['GET' => 0], null, false, false, null]],
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
        '/user/name' => [[['_route' => 'get_name_user', '_controller' => 'App\\Controller\\Employee\\UserController::getNameUser'], null, ['GET' => 0], null, false, false, null]],
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
                        .'|u(?'
                            .'|ser/([^/]++)(*:132)'
                            .'|pdate/([^/]++)(*:154)'
                        .')'
                        .'|d(?'
                            .'|aily/users/([^/]++)(*:186)'
                            .'|elete/([^/]++)(*:208)'
                        .')'
                        .'|get\\-type/([^/]++)(*:235)'
                    .')'
                    .'|leave/(?'
                        .'|reason/(?'
                            .'|([^/]++)(*:271)'
                            .'|create(*:285)'
                            .'|update/([^/]++)(*:308)'
                            .'|delete/([^/]++)(*:331)'
                        .')'
                        .'|([^/]++)(*:348)'
                        .'|u(?'
                            .'|ser/([^/]++)(*:372)'
                            .'|pdate/([^/]++)(*:394)'
                        .')'
                        .'|create(*:409)'
                        .'|delete/([^/]++)(*:432)'
                    .')'
                    .'|bank/(?'
                        .'|account/(?'
                            .'|update/([^/]++)(*:475)'
                            .'|delete/([^/]++)(*:498)'
                        .')'
                        .'|([^/]++)(*:515)'
                        .'|create(*:529)'
                        .'|update/([^/]++)(*:552)'
                        .'|delete/([^/]++)(*:575)'
                    .')'
                    .'|family/(?'
                        .'|update/([^/]++)(*:609)'
                        .'|delete/([^/]++)(*:632)'
                        .'|relationship/(?'
                            .'|([^/]++)(*:664)'
                            .'|create(*:678)'
                            .'|update/([^/]++)(*:701)'
                            .'|delete/([^/]++)(*:724)'
                        .')'
                    .')'
                    .'|position/(?'
                        .'|([^/]++)(*:754)'
                        .'|create(*:768)'
                        .'|update/([^/]++)(*:791)'
                        .'|delete/([^/]++)(*:814)'
                    .')'
                    .'|degree/(?'
                        .'|([^/]++)(*:841)'
                        .'|create(*:855)'
                        .'|update/([^/]++)(*:878)'
                        .'|delete/([^/]++)(*:901)'
                    .')'
                    .'|education/(?'
                        .'|update/([^/]++)(*:938)'
                        .'|delete/([^/]++)(*:961)'
                    .')'
                .')'
                .'|/department/(?'
                    .'|([^/]++)(*:994)'
                    .'|create(*:1008)'
                    .'|update/([^/]++)(*:1032)'
                    .'|delete/([^/]++)(*:1056)'
                    .'|([^/]++)(*:1073)'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(*:1100)'
                    .'|by\\-email/([^/]++)(*:1127)'
                    .'|leave(*:1141)'
                    .'|attendance(*:1160)'
                    .'|create(*:1175)'
                    .'|update/([^/]++)(*:1199)'
                    .'|password(*:1216)'
                .')'
                .'|/api/user/delete/([^/]++)(*:1251)'
                .'|/role/(?'
                    .'|([^/]++)(*:1277)'
                    .'|create(*:1292)'
                    .'|update/([^/]++)(*:1316)'
                    .'|delete(*:1331)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:1369)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        50 => [[['_route' => 'id_attendance_type', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendanceTypesController::getById'], ['id'], ['GET' => 0], null, false, true, null]],
        63 => [[['_route' => 'create_attendance_type', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendanceTypesController::create'], [], ['POST' => 0], null, false, false, null]],
        85 => [[['_route' => 'update_attendance_type', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendanceTypesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        107 => [[['_route' => 'delete_attendance_type', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendanceTypesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        132 => [[['_route' => 'each_employee_attendance', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendancesController::getByUser'], ['id'], ['GET' => 0], null, false, true, null]],
        154 => [[['_route' => 'update_employee_attendance', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendancesController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        186 => [[['_route' => 'daily_employees_attendance', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendancesController::getAllDailyEmployeeAttendance'], ['date'], ['GET' => 0], null, false, true, null]],
        208 => [[['_route' => 'delete_employee_attendance', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendancesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        235 => [[['_route' => 'get_type_attendance', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendancesController::getType'], ['id'], ['GET' => 0], null, false, true, null]],
        271 => [[['_route' => 'one_leave_reason', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        285 => [[['_route' => 'create_leave_reasons', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::create'], [], ['POST' => 0], null, false, false, null]],
        308 => [[['_route' => 'update_leave_reason', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        331 => [[['_route' => 'delete_leave_reason', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        348 => [[['_route' => 'getone_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        372 => [[['_route' => 'email_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::getByUser'], ['user_id'], ['GET' => 0], null, false, true, null]],
        394 => [[['_route' => 'update_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        409 => [[['_route' => 'create_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::create'], [], ['POST' => 0], null, false, false, null]],
        432 => [[['_route' => 'delete_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        475 => [[['_route' => 'update_bank_account_info', '_controller' => 'App\\Controller\\Employee\\BankAccountsController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        498 => [[['_route' => 'delete_bank_account_info', '_controller' => 'App\\Controller\\Employee\\BankAccountsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        515 => [[['_route' => 'get_id_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::getById'], ['id'], ['GET' => 0], null, false, true, null]],
        529 => [[['_route' => 'create_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::create'], [], ['POST' => 0], null, false, false, null]],
        552 => [[['_route' => 'update_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        575 => [[['_route' => 'delete_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        609 => [[['_route' => 'update_family', '_controller' => 'App\\Controller\\Employee\\EmpFamiliesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        632 => [[['_route' => 'delete_family', '_controller' => 'App\\Controller\\Employee\\EmpFamiliesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        664 => [[['_route' => 'getID_family_relationships', '_controller' => 'App\\Controller\\Employee\\FamilyRelationshipsController::getByID'], ['id'], ['GET' => 0], null, false, true, null]],
        678 => [[['_route' => 'create_family_relationships', '_controller' => 'App\\Controller\\Employee\\FamilyRelationshipsController::create'], [], ['POST' => 0], null, false, false, null]],
        701 => [[['_route' => 'update_family_relationships', '_controller' => 'App\\Controller\\Employee\\FamilyRelationshipsController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        724 => [[['_route' => 'delete_family_relationships', '_controller' => 'App\\Controller\\Employee\\FamilyRelationshipsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        754 => [[['_route' => 'get_one_position', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::getOnePosition'], ['id'], ['GET' => 0], null, false, true, null]],
        768 => [[['_route' => 'create_positions', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::Create'], [], ['POST' => 0], null, false, false, null]],
        791 => [[['_route' => 'update_position', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        814 => [[['_route' => 'delete_position', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        841 => [[['_route' => 'id_school_degree', '_controller' => 'App\\Controller\\Employee\\SchoolDegreesController::getByID'], ['id'], ['GET' => 0], null, false, true, null]],
        855 => [[['_route' => 'create_school_degree', '_controller' => 'App\\Controller\\Employee\\SchoolDegreesController::create'], [], ['POST' => 0], null, false, false, null]],
        878 => [[['_route' => 'update_school_degree', '_controller' => 'App\\Controller\\Employee\\SchoolDegreesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        901 => [[['_route' => 'delete_school_degree', '_controller' => 'App\\Controller\\Employee\\SchoolDegreesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        938 => [[['_route' => 'update_employee_education', '_controller' => 'App\\Controller\\Employee\\UserEducationDegreesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        961 => [[['_route' => 'delete_employee_education', '_controller' => 'App\\Controller\\Employee\\UserEducationDegreesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        994 => [[['_route' => 'one_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        1008 => [[['_route' => 'create_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::create'], [], ['POST' => 0], null, false, false, null]],
        1032 => [[['_route' => 'update_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        1056 => [[['_route' => 'delete_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1073 => [[['_route' => 'show_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1100 => [[['_route' => 'one_user', '_controller' => 'App\\Controller\\Employee\\UserController::getOneUser'], ['id'], ['GET' => 0], null, false, true, null]],
        1127 => [[['_route' => 'email_one_user', '_controller' => 'App\\Controller\\Employee\\UserController::getOnlyUser'], ['email'], ['GET' => 0], null, false, true, null]],
        1141 => [[['_route' => 'get_leave_user', '_controller' => 'App\\Controller\\Employee\\UserController::getLeave'], [], ['GET' => 0], null, false, false, null]],
        1160 => [[['_route' => 'get_attendance_user', '_controller' => 'App\\Controller\\Employee\\UserController::getAttendance'], [], ['GET' => 0], null, false, false, null]],
        1175 => [[['_route' => 'create_user', '_controller' => 'App\\Controller\\Employee\\UserController::create'], [], ['POST' => 0], null, false, false, null]],
        1199 => [[['_route' => 'update_user', '_controller' => 'App\\Controller\\Employee\\UserController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        1216 => [[['_route' => 'change_pw_user', '_controller' => 'App\\Controller\\ResetPasswordController::changePassword'], [], ['PUT' => 0], null, false, false, null]],
        1251 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\Employee\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1277 => [[['_route' => 'id_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::getByID'], ['id'], ['GET' => 0], null, false, true, null]],
        1292 => [[['_route' => 'create_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::create'], [], ['POST' => 0], null, false, false, null]],
        1316 => [[['_route' => 'update_role_by_id', '_controller' => 'App\\Controller\\Employee\\UserRoleController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        1331 => [[['_route' => 'delete_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::delete'], [], ['DELETE' => 0], null, false, false, null]],
        1369 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
