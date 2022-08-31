<?php

namespace App\Controller\Employee;

use App\Entity\BankAccounts;
use App\Entity\Banks;
use App\Entity\EmpDepartments;
use App\Entity\EmpFamilies;
use App\Entity\EmpPositions;
use App\Entity\FamilyRelationships;
use App\Entity\SchoolDegrees;
use App\Entity\UserEducationDegrees;
use App\Entity\UserRoles;
use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;


class UserController extends AbstractController
{
    private EntityManagerInterface $em;
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
                return $this->json(array("success" => false, "message" => "no data found"), 400);
            }

            $result = [];
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
                        "family" => $emp_family,
                    ];

                    //default if null
                    $res2 = [
                        "department" => null,
                    ];
                    if($user->getEmpDepartment()) {
                        $res2 = [
                            "department" => $user->getEmpDepartment()->getName(),
                        ];
                    }
                    $res3 = [
                        "role" => null,
                    ];
                    if($user->getUserRole()) {
                        $res3 = [
                            "role" => $user->getUserRole()->getName(),
                        ];
                    }
                    $res4 = [
                        "bank_name" => null,
                        "bank_no" => null,
                        "bank" => null
                    ];
                    if($user->getBankAccount()) {
                        $res4 = [
                            "bank_name" => $user->getBankAccount()->getName(),
                            "bank_no" => $user->getBankAccount()->getNumber(),
                            "bank" => $user->getBankAccount()->getBank()->getName(),
                        ];
                    }

                    $res5 = [
                        "school" => null,
                        "degree" => null,
                    ];
                    if($user->getUserEducationDegree()) {
                        $res5 = [
                            "school" => $user->getUserEducationDegree()->getSchool(),
                            "degree" => $user->getUserEducationDegree()->getSchoolDegree()->getName(),

                        ];
                    }
                    $res6 = [
                        "position" => null,
                    ];
                    if($user->getEmpPosition()) {
                        $res6 = [
                            "position" => $user->getEmpPosition()->getName(),
                        ];
                    }

                    //combine objects
                    $result[] = $res + $res2 + $res3 + $res4 + $res5 + $res6;
                }
            }

            return $this->json(array("success" => true, "data" => $result), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/user/{id}", name="one_user", methods="GET")
     * @param $id
     * @return JsonResponse
     */
    public function getOneUser($id): JsonResponse
    {
        try {
            $user = $this->em->getRepository(Users::class)->find($id);
            if(!$user) {
                return $this->json(array("success" => false, "message" => "no data found"), 400);
            }

            $result = [];
            $emp_family = [];
            foreach ($user->getEmpFamilies() as $family) {
                $emp_family[] = [
                    "id" => $family->getId(),
                    "name" => $family->getName(),
                    "phone" => $family->getPhone(),
                    "relationship_id" => $family->getFamilyRelationship()->getId(),
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
                    "family" => $emp_family,
                ];

                //default if null
                $res2 = [
                    "department" => null,
                ];
                if($user->getEmpDepartment()) {
                    $res2 = [
                        "department" => $user->getEmpDepartment()->getName(),
                        "department_id" => $user->getEmpDepartment()->getId(),
                    ];
                }
                $res3 = [
                    "role" => null,
                ];
                if($user->getUserRole()) {
                    $res3 = [
                        "role" => $user->getUserRole()->getName(),
                    ];
                }
                $res4 = [
                    "bank_name" => null,
                    "bank_no" => null,
                    "bank" => null
                ];
                if($user->getBankAccount()) {
                    $res4 = [
                        "account_id"=> $user->getBankAccount()->getId(),
                        "bank_id" => $user->getBankAccount()->getBank()->getId(),
                        "bank_name" => $user->getBankAccount()->getName(),
                        "bank_no" => $user->getBankAccount()->getNumber(),
                        "bank" => $user->getBankAccount()->getBank()->getName(),
                    ];
                }
                $res5 = [
                    "school" => null,
                    "degree" => null,
                ];
                if($user->getUserEducationDegree()) {
                    $res5 = [
                        "school" => $user->getUserEducationDegree()->getSchool(),
                        "degree" => $user->getUserEducationDegree()->getSchoolDegree()->getName(),
                        "degree_id" => $user->getUserEducationDegree()->getSchoolDegree()->getId(),
                    ];
                }
                $res6 = [
                    "position" => null,
                ];
                if($user->getEmpPosition()) {
                    $res6 = [
                        "position" => $user->getEmpPosition()->getName(),
                        "position_id" => $user->getEmpPosition()->getId(),
                    ];
                }


                //combine objects
                $result[] = $res + $res2 + $res3 + $res4 + $res5 + $res6;
            }

            return $this->json(array("success" => true, "data" => $result), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/user/by-email/{email}", name="email_one_user", methods="GET")
     * @param $email
     * @return JsonResponse
     */
    public function getOnlyUser($email): JsonResponse
    {
        try {
            $user = $this->em->getRepository(Users::class)->findOneBy(array("email" => $email));
            if(!$user) {
                return $this->json(array("success" => false, "message" => "no data found"), 400);
            }

            $result = [];
            if(!$user->getIsDelete()) {
                $res = [
                    "id" => $user->getId(),
                    "firstName" => $user->getFirstName(),
                    "lastName" => $user->getLastName(),
                    "email" => $user->getEmail(),
                ];

                $res3 = [
                    "role" => null,
                ];
                if($user->getUserRole()) {
                    $res3 = [
                        "role" => $user->getUserRole()->getName(),
                    ];
                }

                //combine objects
                $result[] = $res + $res3;
            }

            return $this->json(array("success" => true, "data" => $result), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route ("/user/leave", name="get_leave_user", methods="GET")
     */
    public function getLeave(): JsonResponse
    {
        try {
            $emp_leaves = $this->em->getRepository(Users::class)->findAll();
            if(!$emp_leaves) {
                throw new RuntimeException("No data has found!");
            }

            $res = [];
            foreach ($emp_leaves as $emp_leave) {
                if(!$emp_leave->getIsDelete()) {
                    $leaveCollection = [];
                    foreach ($emp_leave->getEmpLeaves() as $leave) {
                        $leaveCollection[] = [
                            "description" => $leave->getDescription(),
                            "start" => $leave->getStart(),
                            "end" => $leave->getEnd(),
                            "reason" => $leave->getEmpLeaveReason()->getName(),
                        ];
                    }

                    $res[] = [
                        "employee_id" => $emp_leave->getId(),
                        "firstName" => $emp_leave->getFirstName(),
                        "lastName" => $emp_leave->getLastName(),
                        "leaves" => $leaveCollection,
                    ];
                }
            }

            return $this->json(array("success" => true, "data" => $res), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route ("/user/attendance", name="get_attendance_user", methods="GET")
     */
    public function getAttendance(): JsonResponse
    {
        try {
            $emp_attendances = $this->em->getRepository(Users::class)->findAll();
            if(!$emp_attendances) {
                throw new RuntimeException("No data has found!");
            }

            $res = [];
            foreach ($emp_attendances as $emp_attendance) {
                if(!$emp_attendance->getIsDelete()) {
                    $attendanceCollection = [];
                    foreach ($emp_attendance->getEmpAttendances() as $attendance) {
                        $attendanceCollection[] = [
                            "attendanceType" => $attendance->getEmpAttendanceType()->getName(),
                        ];
                    }

                    $res[] = [
                        "employee_id" => $emp_attendance->getId(),
                        "firstName" => $emp_attendance->getFirstName(),
                        "lastName" => $emp_attendance->getLastName(),
                        "leaves" => $attendanceCollection,
                    ];
                }
            }

            return $this->json(array("success" => true, "data" => $res), 200);
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

            //create bank
            if(isset($param['bank_id'])) {
                $bankAccount = new BankAccounts();
                $bank = $this->em->getRepository(Banks::class)->find($param['bank_id']);
                $bankAccount->setBank($bank);
                $bankAccount->setName($param['bank_name']);
                $bankAccount->setNumber($param['bank_account_number']);
                $bankAccount->setIsDelete(false);

                $user->setBankAccount($bankAccount);

                //save data to databse
                $this->em->persist($bankAccount);

            }


            //user education
            if(isset($param['school_degree_id'])) {
                $user_education = new UserEducationDegrees();
                $education_degree = $this->em->getRepository(SchoolDegrees::class)->find($param['school_degree_id']);

                $user_education->setSchool($param['school']);
                $user_education->setSchoolDegree($education_degree);
                $user_education->setIsDelete(false);

                $user->setUserEducationDegree($user_education);

                //save data to database
                $this->em->persist($user_education);
            }


            if($password !== $repeat_password) {
                return $this->json(array("success" => false, "message" => "Password not matched"), 400);
            }
            // encrypt password && hash the password (based on the security.yaml config for the $users class)
            $hashedPassword = $passwordHasher->hashPassword($user,$password);
            $user->setPassword($hashedPassword);


            //save to database
            $this->em->persist($user);
            $this->em->flush();

            //family user
            if(isset($param['family'])) {
                foreach ($param['family'] as $familyData) {
                    $family = new EmpFamilies();
                    $family->setName($familyData['name']);
                    $family->setPhone($familyData['phone']);
                    $family_relationship = $this->em->getRepository(FamilyRelationships::class)->find($familyData['family_relationship_id']);
                    $family->setFamilyRelationship($family_relationship);
                    $family->setEmployee($user);
                    $family->setIsDelete(false);
                    $this->em->persist($family);
                }
            }
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
     * @param JWTTokenManagerInterface $JWTToken
     * @return JsonResponse
     */
    public function login(Request $request, UserPasswordHasherInterface $passwordHasher, JWTTokenManagerInterface $JWTToken): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        $email = $param['email'];
        $password = $param['password'];

        $user = $this->em->getRepository(Users::class)->findOneBy(array("email" => $email));
        if(!$user) {
            return $this->json(array("success" => false, "message" => "No data has found"), 400);
        }

        if ($passwordHasher->isPasswordValid($user, $password)) {
            $token = $JWTToken->create($user);
            return $this->json(array("success" => true, "message" => "Log in successfully", "token" => $token), 200);
        }
        return $this->json(array("success" => false, "message" => "Email or password is incorrect"), 400);
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

            //employee info
            $user = $this->em->getRepository(Users::class)->find($id);
            if(!$user) {
                return $this->json(array("success" => false, "message" => "No data has found"), 400);
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
            if(isset($param['emp_department_id'])) {
                $department = $this->em->getRepository(EmpDepartments::class)->find($param['emp_department_id']);
                $user->setEmpDepartment($department);
            }
            if(isset($param['user_role_id'])) {
                $role = $this->em->getRepository(UserRoles::class)->find($param['user_role_id']);
                $user->setUserRole($role);
            }
            if(isset($param['emp_position_id'])) {
                $position = $this->em->getRepository(EmpPositions::class)->find($param['emp_position_id']);
                $user->setEmpPosition($position);
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

    /**
     * @Route("/admin/create", name="create_admin", methods="GET")
     * @param UserPasswordHasherInterface $passwordHasher
     * @return JsonResponse
     */
    public function createAdmin(UserPasswordHasherInterface $passwordHasher): JsonResponse
    {
        $user = new Users();
        try {
            $password = "12345";
            $repeat_password = "12345";

            $user->setFirstName("Admin");
            $user->setLastName("Admin");
            $user->setEmail("allweb.rms.symfony@gmail.com");

            $user->setDateOfBirth(new \DateTime("2022-07-13"));

            $user->setPlaceOfBirth("All-web");
            $user->setPhone("00000000000");
            $user->setSalary(0);
            $user->setImageUrl("https://th.bing.com/th/id/R.36593998fb9d35465be4adeda7d5ecfd?rik=OlQtW0rc1mL%2b8g&pid=ImgRaw&r=0");
            $user->setGender("Male");
            $user->setNationality("Khmer");
            $user->setReligion("Buddhism");
            $user->setAddress("Cambodia");
            $user->setIsMarried(false);

            $user->setJoinDate(new \DateTime("2022-07-13"));

            $user->setIsDelete(false);

            //relationship database
            $department = $this->em->getRepository(EmpDepartments::class)->find(1);
            $user->setEmpDepartment($department);
            $role = $this->em->getRepository(UserRoles::class)->find(2);
            $user->setUserRole($role);
            $position = $this->em->getRepository(EmpPositions::class)->find(1);
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



}
