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
        '/employee/attendance/daily/users' => [[['_route' => 'daily_employees_attendance', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendancesController::getAllDailyEmployeeAttendance'], null, ['GET' => 0], null, false, false, null]],
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
                        .'|get\\-type/([^/]++)(*:181)'
                        .'|delete/([^/]++)(*:204)'
                    .')'
                    .'|leave/(?'
                        .'|reason/(?'
                            .'|([^/]++)(*:240)'
                            .'|create(*:254)'
                            .'|update/([^/]++)(*:277)'
                            .'|delete/([^/]++)(*:300)'
                        .')'
                        .'|([^/]++)(*:317)'
                        .'|u(?'
                            .'|ser/([^/]++)(*:341)'
                            .'|pdate/([^/]++)(*:363)'
                        .')'
                        .'|create(*:378)'
                        .'|delete/([^/]++)(*:401)'
                    .')'
                    .'|bank/(?'
                        .'|account/(?'
                            .'|update/([^/]++)(*:444)'
                            .'|delete/([^/]++)(*:467)'
                        .')'
                        .'|([^/]++)(*:484)'
                        .'|create(*:498)'
                        .'|update/([^/]++)(*:521)'
                        .'|delete/([^/]++)(*:544)'
                    .')'
                    .'|family/(?'
                        .'|update/([^/]++)(*:578)'
                        .'|delete/([^/]++)(*:601)'
                        .'|relationship/(?'
                            .'|([^/]++)(*:633)'
                            .'|create(*:647)'
                            .'|update/([^/]++)(*:670)'
                            .'|delete/([^/]++)(*:693)'
                        .')'
                    .')'
                    .'|position/(?'
                        .'|([^/]++)(*:723)'
                        .'|create(*:737)'
                        .'|update/([^/]++)(*:760)'
                        .'|delete/([^/]++)(*:783)'
                    .')'
                    .'|degree/(?'
                        .'|([^/]++)(*:810)'
                        .'|create(*:824)'
                        .'|update/([^/]++)(*:847)'
                        .'|delete/([^/]++)(*:870)'
                    .')'
                    .'|education/(?'
                        .'|update/([^/]++)(*:907)'
                        .'|delete/([^/]++)(*:930)'
                    .')'
                .')'
                .'|/department/(?'
                    .'|([^/]++)(*:963)'
                    .'|create(*:977)'
                    .'|update/([^/]++)(*:1000)'
                    .'|delete/([^/]++)(*:1024)'
                    .'|([^/]++)(*:1041)'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(*:1068)'
                    .'|by\\-email/([^/]++)(*:1095)'
                    .'|leave(*:1109)'
                    .'|attendance(*:1128)'
                    .'|create(*:1143)'
                    .'|update/([^/]++)(*:1167)'
                    .'|password(*:1184)'
                .')'
                .'|/api/user/delete/([^/]++)(*:1219)'
                .'|/role/(?'
                    .'|([^/]++)(*:1245)'
                    .'|create(*:1260)'
                    .'|update/([^/]++)(*:1284)'
                    .'|delete(*:1299)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:1337)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        50 => [[['_route' => 'id_attendance_type', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendanceTypesController::getById'], ['id'], ['GET' => 0], null, false, true, null]],
        63 => [[['_route' => 'create_attendance_type', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendanceTypesController::create'], [], ['POST' => 0], null, false, false, null]],
        85 => [[['_route' => 'update_attendance_type', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendanceTypesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        107 => [[['_route' => 'delete_attendance_type', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendanceTypesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        132 => [[['_route' => 'each_employee_attendance', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendancesController::getByUser'], ['id'], ['GET' => 0], null, false, true, null]],
        154 => [[['_route' => 'update_employee_attendance', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendancesController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        181 => [[['_route' => 'get_type_attendance', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendancesController::getType'], ['id'], ['GET' => 0], null, false, true, null]],
        204 => [[['_route' => 'delete_employee_attendance', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendancesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        240 => [[['_route' => 'one_leave_reason', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        254 => [[['_route' => 'create_leave_reasons', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::create'], [], ['POST' => 0], null, false, false, null]],
        277 => [[['_route' => 'update_leave_reason', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        300 => [[['_route' => 'delete_leave_reason', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        317 => [[['_route' => 'getone_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        341 => [[['_route' => 'email_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::getByUser'], ['user_id'], ['GET' => 0], null, false, true, null]],
        363 => [[['_route' => 'update_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        378 => [[['_route' => 'create_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::create'], [], ['POST' => 0], null, false, false, null]],
        401 => [[['_route' => 'delete_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        444 => [[['_route' => 'update_bank_account_info', '_controller' => 'App\\Controller\\Employee\\BankAccountsController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        467 => [[['_route' => 'delete_bank_account_info', '_controller' => 'App\\Controller\\Employee\\BankAccountsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        484 => [[['_route' => 'get_id_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::getById'], ['id'], ['GET' => 0], null, false, true, null]],
        498 => [[['_route' => 'create_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::create'], [], ['POST' => 0], null, false, false, null]],
        521 => [[['_route' => 'update_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        544 => [[['_route' => 'delete_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        578 => [[['_route' => 'update_family', '_controller' => 'App\\Controller\\Employee\\EmpFamiliesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        601 => [[['_route' => 'delete_family', '_controller' => 'App\\Controller\\Employee\\EmpFamiliesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        633 => [[['_route' => 'getID_family_relationships', '_controller' => 'App\\Controller\\Employee\\FamilyRelationshipsController::getByID'], ['id'], ['GET' => 0], null, false, true, null]],
        647 => [[['_route' => 'create_family_relationships', '_controller' => 'App\\Controller\\Employee\\FamilyRelationshipsController::create'], [], ['POST' => 0], null, false, false, null]],
        670 => [[['_route' => 'update_family_relationships', '_controller' => 'App\\Controller\\Employee\\FamilyRelationshipsController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        693 => [[['_route' => 'delete_family_relationships', '_controller' => 'App\\Controller\\Employee\\FamilyRelationshipsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        723 => [[['_route' => 'get_one_position', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::getOnePosition'], ['id'], ['GET' => 0], null, false, true, null]],
        737 => [[['_route' => 'create_positions', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::Create'], [], ['POST' => 0], null, false, false, null]],
        760 => [[['_route' => 'update_position', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        783 => [[['_route' => 'delete_position', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        810 => [[['_route' => 'id_school_degree', '_controller' => 'App\\Controller\\Employee\\SchoolDegreesController::getByID'], ['id'], ['GET' => 0], null, false, true, null]],
        824 => [[['_route' => 'create_school_degree', '_controller' => 'App\\Controller\\Employee\\SchoolDegreesController::create'], [], ['POST' => 0], null, false, false, null]],
        847 => [[['_route' => 'update_school_degree', '_controller' => 'App\\Controller\\Employee\\SchoolDegreesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        870 => [[['_route' => 'delete_school_degree', '_controller' => 'App\\Controller\\Employee\\SchoolDegreesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        907 => [[['_route' => 'update_employee_education', '_controller' => 'App\\Controller\\Employee\\UserEducationDegreesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        930 => [[['_route' => 'delete_employee_education', '_controller' => 'App\\Controller\\Employee\\UserEducationDegreesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        963 => [[['_route' => 'one_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        977 => [[['_route' => 'create_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::create'], [], ['POST' => 0], null, false, false, null]],
        1000 => [[['_route' => 'update_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        1024 => [[['_route' => 'delete_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1041 => [[['_route' => 'show_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1068 => [[['_route' => 'one_user', '_controller' => 'App\\Controller\\Employee\\UserController::getOneUser'], ['id'], ['GET' => 0], null, false, true, null]],
        1095 => [[['_route' => 'email_one_user', '_controller' => 'App\\Controller\\Employee\\UserController::getOnlyUser'], ['email'], ['GET' => 0], null, false, true, null]],
        1109 => [[['_route' => 'get_leave_user', '_controller' => 'App\\Controller\\Employee\\UserController::getLeave'], [], ['GET' => 0], null, false, false, null]],
        1128 => [[['_route' => 'get_attendance_user', '_controller' => 'App\\Controller\\Employee\\UserController::getAttendance'], [], ['GET' => 0], null, false, false, null]],
        1143 => [[['_route' => 'create_user', '_controller' => 'App\\Controller\\Employee\\UserController::create'], [], ['POST' => 0], null, false, false, null]],
        1167 => [[['_route' => 'update_user', '_controller' => 'App\\Controller\\Employee\\UserController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        1184 => [[['_route' => 'change_pw_user', '_controller' => 'App\\Controller\\ResetPasswordController::changePassword'], [], ['PUT' => 0], null, false, false, null]],
        1219 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\Employee\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1245 => [[['_route' => 'id_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::getByID'], ['id'], ['GET' => 0], null, false, true, null]],
        1260 => [[['_route' => 'create_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::create'], [], ['POST' => 0], null, false, false, null]],
        1284 => [[['_route' => 'update_role_by_id', '_controller' => 'App\\Controller\\Employee\\UserRoleController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        1299 => [[['_route' => 'delete_role', '_controller' => 'App\\Controller\\Employee\\UserRoleController::delete'], [], ['DELETE' => 0], null, false, false, null]],
        1337 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
