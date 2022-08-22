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
    private EntityManagerInterface $em;
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
        $htmlAsText = '
            <html lang="en">
            <body>
                <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                    <div style="width: 660px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; padding: 10px 30px;">
                        <div style=" display: flex; flex-direction: column; align-items: center;">
                            <h1 style="font-weight: 900; color: rgb(3, 4, 4);">Password Reset Request</h1>
                        </div>
                        <div>
                            <p>Dear Allweb RMS user,</p>
                            <p>We have received your request to reset your password. Please click the link below to complete the reset:</p>
                        </div>
                        <div style=" display: flex; flex-direction: column; align-items: center;">
                            ' . '<a href="`http://localhost:4200/password/reset?verify=`' .$token . '">'.'
                                <button style="padding: 10px 50px; border-radius: 10px; background-color: #ff6c37; color: white;" type="button">
                                    <h4 style="margin: 0;">Reset My Password</h4>
                                </button>
                            </a>
                        </div>
                        <div style="display: flex; flex-direction: column; align-items: center; margin-top: 20px;">
                            <div>
                                <div>This email was sent to '. $param['email'] .', <span style="color: rgb(245, 77, 31);">which is associated with a Allweb RMS account.</span></div>
                            </div>
                        </div>
                    </div>
            
                </div>
            </body>
            </html>
        ';

        $email = (new Email())
            ->from('lychanthorn2000@gmail.com')
            ->to($param['email'])
            ->subject('Reset your Allweb RMS account password')
            ->html($htmlAsText);
        try {
            $mailer->send($email);
        } catch (TransportExceptionInterface $e) {
            return $this->json(array("success" => false, "message" => $e->getMessage()), 400);
        }
        return $this->json([
            'success' => true,
            'message' => 'Email send successfully',
        ], 200);
    }
}