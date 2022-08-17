<?php

namespace App\Controller\EmployeeAttendance;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class EmpAttendancesController extends AbstractController
{
    /**
     * @Route("/employee/attendance/emp/attendances", name="app_employee_attendance_emp_attendances")
     */
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/EmployeeAttendance/EmpAttendancesController.php',
        ]);
    }
}
