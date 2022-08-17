<?php

namespace App\Controller\Employee;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class FamilyRelationshipsController extends AbstractController
{
    /**
     * @Route("/employee/family/relationships", name="app_employee_family_relationships")
     */
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Employee/FamilyRelationshipsController.php',
        ]);
    }
}
