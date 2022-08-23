<?php

namespace App\Controller;

use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\PasswordHasher\PasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class ResetPasswordController extends AbstractController
{
    private EntityManagerInterface $em;
    public function __construct(EntityManagerInterface $entityManager){
        $this->em = $entityManager;
    }
    /**
     * @Route("/reset/password", name="app_reset_password", methods="PUT")
     */
    public function resetPassword(Request $request, JWTTokenManagerInterface $JWTTokenManager, UserPasswordHasherInterface $passwordHasher): JsonResponse
    {
        try {
            $param = json_decode($request->getContent(), true);
            if(isset($param['email'])){
                $user = $this->em->getRepository(Users::class)->findOneBy(array("email" => $param['email']));
                if(!$user) {
                    throw new RuntimeException("User not exist");
                }
                $hashedPassword = $passwordHasher->hashPassword($user,$param['password']);
                $user->setPassword($hashedPassword);

                $token = $JWTTokenManager->create($user);
                $this->em->flush($user);
            }
            return $this->json(array('success'=>true, 'message'=> "Changed successfully", "token" => $token),200);
        }catch (\Exception $err){
            return $this->json(array("success"=> false, "message" => $err->getMessage()), 400);
        }
    }

    /**
     * @Route ("/user/password", name="change_pw_user", methods="PUT")
     * @param $id
     * @param Request $request
     * @param UserPasswordHasherInterface $passwordHasher
     * @return JsonResponse
     */
    public function changePassword(Request $request, UserPasswordHasherInterface $passwordHasher): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $user = $this->em->getRepository(Users::class)->findOneBy(array("email" => $param['email']));
            if(!$user) {
                throw new RuntimeException("User not found");
            }

            if ($passwordHasher->isPasswordValid($user, $param['old_password'])) {
                $hashedPassword = $passwordHasher->hashPassword($user,$param['new_password']);
                $user->setPassword($hashedPassword);

                //save data to database
                $this->em->flush();
                return $this->json(array("success" => true, "message" => "Update password successfully"), 200);
            }
            return $this->json(array("success" => false, "message" => "Old password is incorrect"), 400);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }
}
