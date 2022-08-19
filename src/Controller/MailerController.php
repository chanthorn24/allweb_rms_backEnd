<?php

namespace App\Controller;

use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class MailerController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @Route("/mailer", name="app_mailer")
     */
    public function sendEmail(MailerInterface $mailer, Request $request, JWTTokenManagerInterface $JWTToken): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        $user = $this->em->getRepository(Users::class)->findOneBy(array("email" => $param['email']));
        if(!$user) {
            return $this->json(array("success" => false, "message" => "User not found"), 400);
        }

        $token = $JWTToken->create($user);

        $email = (new Email())
            ->from('lychanthorn2000@gmail.com')
            ->to($param['email'])
            ->subject('Forget password!')
            ->text("Reset password: http://localhost:4200/password/reset?verify=" . $token);
        try {
            $mailer->send($email);
        } catch (TransportExceptionInterface $e) {
            return $this->json(array("success" => false, "message" => $e->getMessage()), 400);
        }
        return $this->json([
            'message' => 'Email Sending  Test',
        ]);
    }
}
