<?php

namespace App\Controller\EmployeeLeave;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class EmpLeaveReasonsController extends AbstractController
{
    /**
     * @Route("/employee/leave/emp/leave/reasons", name="app_employee_leave_emp_leave_reasons")
     */
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/EmployeeLeave/EmpLeaveReasonsController.php',
        ]);
    }
}
