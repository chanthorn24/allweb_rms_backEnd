<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/employee/attendance/type' => [[['_route' => 'all_attendance_type', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendanceTypesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/employee/attendance/type/create' => [[['_route' => 'create_attendance_type', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendanceTypesController::create'], null, ['POST' => 0], null, false, false, null]],
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
                            .'|update/([^/]++)(*:57)'
                            .'|delete/([^/]++)(*:79)'
                        .')'
                        .'|update/([^/]++)(*:102)'
                        .'|delete/([^/]++)(*:125)'
                    .')'
                    .'|leave/(?'
                        .'|reason/(?'
                            .'|([^/]++)(*:161)'
                            .'|create(*:175)'
                            .'|update/([^/]++)(*:198)'
                            .'|delete/([^/]++)(*:221)'
                        .')'
                        .'|([^/]++)(*:238)'
                        .'|u(?'
                            .'|ser/([^/]++)(*:262)'
                            .'|pdate/([^/]++)(*:284)'
                        .')'
                        .'|create(*:299)'
                        .'|delete/([^/]++)(*:322)'
                    .')'
                    .'|bank/(?'
                        .'|account/(?'
                            .'|update/([^/]++)(*:365)'
                            .'|delete/([^/]++)(*:388)'
                        .')'
                        .'|update/([^/]++)(*:412)'
                        .'|delete/([^/]++)(*:435)'
                    .')'
                    .'|family/(?'
                        .'|update/([^/]++)(*:469)'
                        .'|delete/([^/]++)(*:492)'
                        .'|relationship/(?'
                            .'|update/([^/]++)(*:531)'
                            .'|delete/([^/]++)(*:554)'
                        .')'
                    .')'
                    .'|position/(?'
                        .'|([^/]++)(*:584)'
                        .'|create(*:598)'
                        .'|update/([^/]++)(*:621)'
                        .'|delete/([^/]++)(*:644)'
                    .')'
                    .'|degree/(?'
                        .'|update/([^/]++)(*:678)'
                        .'|delete/([^/]++)(*:701)'
                    .')'
                    .'|education/(?'
                        .'|update/([^/]++)(*:738)'
                        .'|delete/([^/]++)(*:761)'
                    .')'
                .')'
                .'|/department/(?'
                    .'|([^/]++)(*:794)'
                    .'|create(*:808)'
                    .'|update/([^/]++)(*:831)'
                    .'|delete/([^/]++)(*:854)'
                    .'|([^/]++)(*:870)'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(*:896)'
                    .'|by\\-email/([^/]++)(*:922)'
                    .'|leave(*:935)'
                    .'|attendance(*:953)'
                    .'|create(*:967)'
                    .'|update/([^/]++)(*:990)'
                    .'|password(*:1006)'
                .')'
                .'|/api/user/delete/([^/]++)(*:1041)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:1078)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        57 => [[['_route' => 'update_attendance_type', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendanceTypesController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        79 => [[['_route' => 'delete_attendance_type', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendanceTypesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        102 => [[['_route' => 'update_employee_attendance', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendancesController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        125 => [[['_route' => 'delete_employee_attendance', '_controller' => 'App\\Controller\\EmployeeAttendance\\EmpAttendancesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        161 => [[['_route' => 'one_leave_reason', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        175 => [[['_route' => 'create_leave_reasons', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::create'], [], ['POST' => 0], null, false, false, null]],
        198 => [[['_route' => 'update_leave_reason', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        221 => [[['_route' => 'delete_leave_reason', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeaveReasonsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        238 => [[['_route' => 'getone_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        262 => [[['_route' => 'email_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::getByUser'], ['user_id'], ['GET' => 0], null, false, true, null]],
        284 => [[['_route' => 'update_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        299 => [[['_route' => 'create_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::create'], [], ['POST' => 0], null, false, false, null]],
        322 => [[['_route' => 'delete_employee_leave', '_controller' => 'App\\Controller\\EmployeeLeave\\EmpLeavesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        365 => [[['_route' => 'update_bank_account_info', '_controller' => 'App\\Controller\\Employee\\BankAccountsController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        388 => [[['_route' => 'delete_bank_account_info', '_controller' => 'App\\Controller\\Employee\\BankAccountsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        412 => [[['_route' => 'update_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        435 => [[['_route' => 'delete_banks', '_controller' => 'App\\Controller\\Employee\\BanksController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        469 => [[['_route' => 'update_family', '_controller' => 'App\\Controller\\Employee\\EmpFamiliesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        492 => [[['_route' => 'delete_family', '_controller' => 'App\\Controller\\Employee\\EmpFamiliesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        531 => [[['_route' => 'update_family_relationships', '_controller' => 'App\\Controller\\Employee\\FamilyRelationshipsController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        554 => [[['_route' => 'delete_family_relationships', '_controller' => 'App\\Controller\\Employee\\FamilyRelationshipsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        584 => [[['_route' => 'get_one_position', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::getOnePosition'], ['id'], ['GET' => 0], null, false, true, null]],
        598 => [[['_route' => 'create_positions', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::Create'], [], ['POST' => 0], null, false, false, null]],
        621 => [[['_route' => 'update_position', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        644 => [[['_route' => 'delete_position', '_controller' => 'App\\Controller\\Employee\\EmpPositionsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        678 => [[['_route' => 'update_school_degree', '_controller' => 'App\\Controller\\Employee\\SchoolDegreesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        701 => [[['_route' => 'delete_school_degree', '_controller' => 'App\\Controller\\Employee\\SchoolDegreesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        738 => [[['_route' => 'update_employee_education', '_controller' => 'App\\Controller\\Employee\\UserEducationDegreesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        761 => [[['_route' => 'delete_employee_education', '_controller' => 'App\\Controller\\Employee\\UserEducationDegreesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        794 => [[['_route' => 'one_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        808 => [[['_route' => 'create_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::create'], [], ['POST' => 0], null, false, false, null]],
        831 => [[['_route' => 'update_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        854 => [[['_route' => 'delete_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        870 => [[['_route' => 'show_department', '_controller' => 'App\\Controller\\Employee\\EmpDepartmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        896 => [[['_route' => 'one_user', '_controller' => 'App\\Controller\\Employee\\UserController::getOneUser'], ['id'], ['GET' => 0], null, false, true, null]],
        922 => [[['_route' => 'email_one_user', '_controller' => 'App\\Controller\\Employee\\UserController::getOnlyUser'], ['email'], ['GET' => 0], null, false, true, null]],
        935 => [[['_route' => 'get_leave_user', '_controller' => 'App\\Controller\\Employee\\UserController::getLeave'], [], ['GET' => 0], null, false, false, null]],
        953 => [[['_route' => 'get_attendance_user', '_controller' => 'App\\Controller\\Employee\\UserController::getAttendance'], [], ['GET' => 0], null, false, false, null]],
        967 => [[['_route' => 'create_user', '_controller' => 'App\\Controller\\Employee\\UserController::create'], [], ['POST' => 0], null, false, false, null]],
        990 => [[['_route' => 'update_user', '_controller' => 'App\\Controller\\Employee\\UserController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        1006 => [[['_route' => 'change_pw_user', '_controller' => 'App\\Controller\\ResetPasswordController::changePassword'], [], ['PUT' => 0], null, false, false, null]],
        1041 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\Employee\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1078 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
