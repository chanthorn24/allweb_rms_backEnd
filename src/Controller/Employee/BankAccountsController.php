<?php

namespace App\Controller\Employee;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class BankAccountsController extends AbstractController
{
    /**
     * @Route("/employee/bank/accounts", name="app_employee_bank_accounts")
     */
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Employee/BankAccountsController.php',
        ]);
    }
}
