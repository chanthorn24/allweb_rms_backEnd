<?php

namespace App\Controller\Employee;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class EmpPositionsController extends AbstractController
{
    /**
     * @Route("/employee/emp/positions", name="app_employee_emp_positions")
     */
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Employee/EmpPositionsController.php',
        ]);
    }
}
