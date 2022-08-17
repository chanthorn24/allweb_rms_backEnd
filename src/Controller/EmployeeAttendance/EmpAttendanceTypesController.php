<?php

namespace App\Controller\EmployeeAttendance;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class EmpAttendanceTypesController extends AbstractController
{
    /**
     * @Route("/employee/attendance/emp/attendance/types", name="app_employee_attendance_emp_attendance_types")
     */
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/EmployeeAttendance/EmpAttendanceTypesController.php',
        ]);
    }
}
