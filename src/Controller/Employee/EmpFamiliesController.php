<?php

namespace App\Controller\Employee;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class EmpFamiliesController extends AbstractController
{
    /**
     * @Route("/employee/emp/families", name="app_employee_emp_families")
     */
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Employee/EmpFamiliesController.php',
        ]);
    }
}
