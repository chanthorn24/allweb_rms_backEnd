<?php

namespace App\Controller\Employee;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class SchoolDegreesController extends AbstractController
{
    /**
     * @Route("/employee/school/degrees", name="app_employee_school_degrees")
     */
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Employee/SchoolDegreesController.php',
        ]);
    }
}
