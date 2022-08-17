<?php

namespace App\Controller\Employee;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class UserEducationDegreesController extends AbstractController
{
    /**
     * @Route("/employee/user/education/degrees", name="app_employee_user_education_degrees")
     */
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Employee/UserEducationDegreesController.php',
        ]);
    }
}
