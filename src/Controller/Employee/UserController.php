<?php

namespace App\Controller\Employee;

use App\Entity\EmpDepartments;
use App\Entity\EmpPositions;
use App\Entity\UserRoles;
use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @Route("/user", name="get_user", methods="GET")
     * @return JsonResponse
     */
    public function getAllUser(): JsonResponse
    {
        try {
            $users = $this->em->getRepository(Users::class)->findAll();
            if(!$users) {
                return $this->json(array("success" => false, "message" => "no data found"), 500);
            }

            foreach ($users as $user) {
                $emp_family = [];
                foreach ($user->getEmpFamilies() as $family) {
                    $emp_family[] = [
                        "name" => $family->getName(),
                        "phone" => $family->getPhone(),
                        "relationship" => $family->getFamilyRelationship()->getName(),
                    ];
                }
                if(!$user->getIsDelete()) {
                    $res = [
                        "id" => $user->getId(),
                        "firstName" => $user->getFirstName(),
                        "lastName" => $user->getLastName(),
                        "email" => $user->getEmail(),
                        "dateOfBirth" => $user->getDateOfBirth(),
                        "placeOfBirth" => $user->getPlaceOfBirth(),
                        "phone" => $user->getPhone(),
                        "salary" => $user->getSalary(),
                        "imageURL" => $user->getImageUrl(),
                        "gender" => $user->getGender(),
                        "nationality" => $user->getNationality(),
                        "religion" => $user->getReligion(),
                        "address" => $user->getAddress(),
                        "is_married" => (boolean)$user->getIsMarried(),
                        "joinDate" => $user->getJoinDate(),
                        "isDelete" => (boolean)$user->getIsDelete(),
                        "department" => $user->getEmpDepartment()->getName(),
                        "role" => $user->getUserRole()->getName(),
                        "family" => $emp_family,
                    ];

                    //default if null
                    $res2 = [
                        "bank_name" => null,
                        "bank_no" => null,
                        "bank" => null
                    ];
                    if($user->getBankAccount()) {
                        $res2 = [
                            "bank_name" => $user->getBankAccount()->getName(),
                            "bank_no" => $user->getBankAccount()->getNumber(),
                            "bank" => $user->getBankAccount()->getBank()->getName(),
                        ];
                    }

                    $res3 = [
                        "school" => null,
                        "degree" => null,
                    ];
                    if($user->getUserEducationDegree()) {
                        $res3 = [
                            "school" => $user->getUserEducationDegree()->getSchool(),
                            "degree" => $user->getUserEducationDegree()->getSchoolDegree()->getName(),
                        ];
                    }

                    //combine objects
                    $result[] = $res + $res2 + $res3;
                }
            }

            return $this->json(array("success" => true, "data" => $result), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/user/create", name="create_user", methods="POST")
     * @param Request $request
     * @param UserPasswordHasherInterface $passwordHasher
     * @return JsonResponse
     */
    public function create(Request $request, UserPasswordHasherInterface $passwordHasher): JsonResponse
    {
        $user = new Users();
        $param = json_decode($request->getContent(), true);
        try {
            $password = $param['password'];
            $repeat_password = $param['repeat_password'];

            $user->setFirstName($param['firstName']);
            $user->setLastName($param['lastName']);
            $user->setEmail($param['email']);

            $user->setDateOfBirth(new \DateTime($param['dateOfBirth']));

            $user->setPlaceOfBirth($param['placeOfBirth']);
            $user->setPhone($param['phone']);
            $user->setSalary($param['salary']);
            $user->setImageUrl($param['imageURL']);
            $user->setGender($param['gender']);
            $user->setNationality($param['nationality']);
            $user->setReligion($param['religion']);
            $user->setAddress($param['address']);
            $user->setIsMarried($param['is_married']);

            $user->setJoinDate(new \DateTime($param['joinDate']));

            $user->setIsDelete(false);

            //relationship database
            $department = $this->em->getRepository(EmpDepartments::class)->find($param['emp_department_id']);
            $user->setEmpDepartment($department);
            $role = $this->em->getRepository(UserRoles::class)->find($param['user_role_id']);
            $user->setUserRole($role);
            $position = $this->em->getRepository(EmpPositions::class)->find($param['emp_position_id']);
            $user->setEmpPosition($position);

            if($password !== $repeat_password) {
                return $this->json(array("success" => false, "message" => "Password not matched"), 400);
            }
            // encrypt password && hash the password (based on the security.yaml config for the $users class)
            $hashedPassword = $passwordHasher->hashPassword($user,$password);
            $user->setPassword($hashedPassword);

            //save to database
            $this->em->persist($user);
            $this->em->flush();

            //return data
            return $this->json(array("success" => true, "message" => "Create successfully", "hash" => $hashedPassword, "password" => $password), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => "email has already taken", "error" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/api/login", name="login_user", methods="POST")
     * @param Request $request
     * @param UserPasswordHasherInterface $passwordHasher
     * @return JsonResponse
     */
    public function login(Request $request, UserPasswordHasherInterface $passwordHasher, JWTTokenManagerInterface $JWTToken): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        $email = $param['email'];
        $password = $param['password'];

        $user = $this->em->getRepository(Users::class)->findOneBy(array("email" => $email));
        if(!$user) {
            return $this->json(array("success" => false, "message" => "No data has found"), 500);
        }

        if ($passwordHasher->isPasswordValid($user, $password)) {
            $token = $JWTToken->create($user);
            return $this->json(array("success" => true, "message" => "Log in successfully", "token" => $token));
        }
        return $this->json(array("success" => false, "message" => "Email or password is incorrect"));
    }

    /**
     * @Route("/user/update/{id}", name="update_user", methods="PUT")
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function update($id, Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);

        try {
            $user = $this->em->getRepository(Users::class)->find($id);
            if(!$user) {
                return $this->json(array("success" => false, "message" => "No data has found"), 500);
            }

            if(isset($param['firstName'])) {
                $user->setFirstName($param['firstName']);
            }
            if(isset($param['lastName'])) {
                $user->setLastName($param['lastName']);
            }
            if(isset($param['email'])) {
                $user->setEmail($param['email']);
            }
            if(isset($param['dateOfBirth'])) {
                $user->setDateOfBirth(new \DateTime($param['dateOfBirth']));
            }
            if(isset($param['placeOfBirth'])) {
                $user->setPlaceOfBirth($param['placeOfBirth']);
            }
            if(isset($param['phone'])) {
                $user->setPhone($param['phone']);
            }
            if(isset($param['salary'])) {
                $user->setSalary($param['salary']);
            }
            if(isset($param['imageURL'])) {
                $user->setImageUrl($param['imageURL']);
            }
            if(isset($param['gender'])) {
                $user->setGender($param['gender']);
            }
            if(isset($param['nationality'])) {
                $user->setNationality($param['nationality']);
            }
            if(isset($param['religion'])) {
                $user->setReligion($param['religion']);
            }
            if(isset($param['address'])) {
                $user->setAddress($param['address']);
            }
            if(isset($param['is_married'])) {
                $user->setIsMarried($param['is_married']);
            }
            if(isset($param['joinDate'])) {
                $user->setJoinDate(new \DateTime($param['joinDate']));
            }
            if(isset($param['em_department_id'])) {
                $department = $this->em->getRepository(EmpDepartments::class)->find($param['em_department_id']);
                $user->setEmpDepartment($department);
            }
            if(isset($param['user_role_id'])) {
                $role = $this->em->getRepository(UserRoles::class)->find($param['user_role_id']);
                $user->setUserRole($role);
            }
            if(isset($param['emp_position_id'])) {
                $position = $this->em->getRepository(EmpPositions::class)->find($param['emp_position_id']);
                $user->setUserRole($position);
            }

            $res[] = [
                "id" => $user->getId(),
                "firstName" => $user->getFirstName(),
                "lastName" => $user->getLastName(),
                "email" => $user->getEmail(),
                "dateOfBirth" => $user->getDateOfBirth(),
                "placeOfBirth" => $user->getPlaceOfBirth(),
                "phone" => $user->getPhone(),
                "salary" => $user->getSalary(),
                "imageURL" => $user->getImageUrl(),
                "gender" => $user->getGender(),
                "nationality" => $user->getNationality(),
                "religion" => $user->getReligion(),
                "address" => $user->getAddress(),
                "is_married" => $user->getIsMarried(),
                "joinDate" => $user->getJoinDate(),
                "department" => $user->getEmpDepartment()->getName(),
                "role" => $user->getUserRole()->getName(),
                "position" => $user->getEmpPosition()->getName(),
            ];

            //save to database
            $this->em->flush();
            return $this->json(array("success" => true, "message" => "Updated successfully", "data" => $res), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/api/user/delete/{id}", name="delete_user", methods="DELETE")
     * @param $id
     * @return JsonResponse
     */
    public function delete($id): JsonResponse
    {
        try {
            $user = $this->em->getRepository(Users::class)->find($id);
            if(!$user) {
                return $this->json(array("success" => false, "message" => "No data has found"), 500);
            }

            $user->setIsDelete(true);
            //save database
            $this->em->flush();
            return $this->json(array("success" => true, "message" => "Deleted successfully"), 200);
        }catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }
}
