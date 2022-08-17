<?php

namespace App\Controller\EmployeeLeave;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class EmpLeavesController extends AbstractController
{
    /**
     * @Route("/employee/leave/emp/leaves", name="app_employee_leave_emp_leaves")
     */
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/EmployeeLeave/EmpLeavesController.php',
        ]);
    }
}
