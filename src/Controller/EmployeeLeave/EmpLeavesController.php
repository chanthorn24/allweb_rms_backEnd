<?php

namespace App\Controller\EmployeeLeave;

use App\Entity\EmpLeaveReasons;
use App\Entity\EmpLeaves;
use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/employee/leave")
 */
class EmpLeavesController extends AbstractController
{
    private EntityManagerInterface $em;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }


    /**
     * @Route("/", name="all_employee_leave", methods="GET")
     */
    public function getAll(): JsonResponse
    {
        try {
            $leaves = $this->em->getRepository(EmpLeaves::class)->findAll();
            if(!$leaves) {
                throw new RuntimeException("No data has found");
            }

            $res = [];
            foreach ($leaves as $leave) {
                if(!$leave->getIsDelete()) {
                    $res1 = [
                        "id" => $leave->getId(),
                        "description" => $leave->getDescription(),
                        "start" => $leave->getStart(),
                        "end" => $leave->getEnd(),
                        "status" => $leave->getStatus(),
                    ];
                    $res2 = [
                        "leave_reason" => null,
                    ];
                    if($leave->getEmpLeaveReason()) {
                        $res2 = [
                            "leave_reason" => $leave->getEmpLeaveReason()->getName(),
                            "emp_leave_reason_id" => $leave->getEmpLeaveReason()->getId(),
                        ];
                    }
                    $res3 = [
                        "employee" => null
                    ];
                    if($leave->getEmployee()) {
                        $res3 = [
                            "firstName" => $leave->getEmployee()->getFirstName(),
                            "lastName" => $leave->getEmployee()->getLastName(),
                            "user_id" => $leave->getEmployee()->getId(),
                            "email" => $leave->getEmployee()->getEmail(),
                        ];
                    }

                    $res[] = $res1 + $res2 + $res3;
                }
            }
            return $this->json(array("success" => true, "data" => $res),200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/{id}", name="getone_employee_leave", methods="GET")
     * @param $id
     * @return JsonResponse
     */
    public function getOne($id): JsonResponse
    {
        try {
            $leave = $this->em->getRepository(EmpLeaves::class)->find($id);
            if(!$leave) {
                throw new RuntimeException("No data has found");
            }

            $res = [];
            if(!$leave->getIsDelete()) {
                $res1 = [
                    "id" => $leave->getId(),
                    "description" => $leave->getDescription(),
                    "start" => $leave->getStart(),
                    "end" => $leave->getEnd(),
                    "status" => $leave->getStatus(),
                ];
                $res2 = [
                    "leave_reason" => null,
                ];
                if($leave->getEmpLeaveReason()) {
                    $res2 = [
                        "leave_reason" => $leave->getEmpLeaveReason()->getName(),
                        "emp_leave_reason_id" => $leave->getEmpLeaveReason()->getId(),
                    ];
                }
                $res3 = [
                    "employee" => null
                ];
                if($leave->getEmployee()) {
                    $res3 = [
                        "firstName" => $leave->getEmployee()->getFirstName(),
                        "lastName" => $leave->getEmployee()->getLastName(),
                        "user_id" => $leave->getEmployee()->getId(),
                        "email" => $leave->getEmployee()->getEmail(),
                    ];
                }

                $res[] = $res1 + $res2 + $res3;
            }
            return $this->json(array("success" => true, "data" => $res), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/user/{user_id}", name="email_employee_leave", methods="GET")
     * @param $user_id
     * @return JsonResponse
     */
    public function getByUser($user_id): JsonResponse
    {
        try {
            $leaves = $this->em->getRepository(EmpLeaves::class)->findBy(array("employee" => $user_id));
            if(!$leaves) {
                throw new RuntimeException("No data found");
            }

            $res = [];
            foreach ($leaves as $leave) {
                if(!$leave->getIsDelete()) {
                    $res1 = [
                        "id" => $leave->getId(),
                        "description" => $leave->getDescription(),
                        "start" => $leave->getStart(),
                        "end" => $leave->getEnd(),
                        "status" => $leave->getStatus(),
                    ];
                    $res2 = [
                        "leave_reason" => null,
                    ];
                    if($leave->getEmpLeaveReason()) {
                        $res2 = [
                            "leave_reason" => $leave->getEmpLeaveReason()->getName(),
                            "emp_leave_reason_id" => $leave->getEmpLeaveReason()->getId(),
                        ];
                    }
                    $res3 = [
                        "employee" => null
                    ];
                    if($leave->getEmployee()) {
                        $res3 = [
                            "firstName" => $leave->getEmployee()->getFirstName(),
                            "lastName" => $leave->getEmployee()->getLastName(),
                            "user_id" => $leave->getEmployee()->getId(),
                            "email" => $leave->getEmployee()->getEmail(),
                        ];
                    }

                    $res[] = $res1 + $res2 + $res3;
                }
            }
            if($res === []) {
                throw new RuntimeException("No data has found");
            }
            return $this->json(array("success" => true, "data" => $res), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/user/request/pending", name="request_employee_leave", methods="GET")
     * @return JsonResponse
     */
    public function getByRequest(): JsonResponse
    {
        try {
            $leave_pendings = $this->em->getRepository(EmpLeaves::class)->findBy(array("status" => "Pending"), array('start' => 'ASC'));
            if(!$leave_pendings) {
                return $this->json(array("success" => true, "data" => []), 200);
            }

            $res = [];
            foreach ($leave_pendings as $leave) {
                if(!$leave->getIsDelete()) {
                    $res1 = [
                        "id" => $leave->getId(),
                        "description" => $leave->getDescription(),
                        "start" => $leave->getStart(),
                        "end" => $leave->getEnd(),
                        "status" => $leave->getStatus(),
                    ];
                    $res2 = [
                        "leave_reason" => null,
                    ];
                    if($leave->getEmpLeaveReason()) {
                        $res2 = [
                            "leave_reason" => $leave->getEmpLeaveReason()->getName(),
                            "emp_leave_reason_id" => $leave->getEmpLeaveReason()->getId(),
                        ];
                    }
                    $res3 = [
                        "employee" => null
                    ];
                    if($leave->getEmployee()) {
                        $res3 = [
                            "firstName" => $leave->getEmployee()->getFirstName(),
                            "lastName" => $leave->getEmployee()->getLastName(),
                            "user_id" => $leave->getEmployee()->getId(),
                            "email" => $leave->getEmployee()->getEmail(),
                            "imageURL" => $leave->getEmployee()->getImageUrl(),
                        ];
                    }

                    $res[] = $res1 + $res2 + $res3;
                }
            }
            if($res === []) {
                throw new RuntimeException("No data has found");
            }
            return $this->json(array("success" => true, "data" => $res), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }



    /**
     * @Route ("/create", name="create_employee_leave", methods="POST")
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $empLeave = new EmpLeaves();

            $empLeave->setDescription($param['description']);
            $empLeave->setStart(new \DateTime($param['start']));
            $empLeave->setEnd(new \DateTime($param['end']));
            $empLeave->setStatus($param['status']);
            $empLeave->setIsDelete(false);

            //join table
            $leave_reason = $this->em->getRepository(EmpLeaveReasons::class)->find($param['emp_leave_reason_id']);
            $empLeave->setEmpLeaveReason($leave_reason);
            $emp = $this->em->getRepository(Users::class)->findOneBy(array("email" => $param['email']));
            $empLeave->setEmployee($emp);

            //save data to database
            $this->em->persist($empLeave);
            $this->em->flush();

            return $this->json(array("success" => true, "message" => "Created successfully"), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route ("/update/{id}", name="update_employee_leave", methods="PUT")
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function update($id, Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $empLeave = $this->em->getRepository(EmpLeaves::class)->find($id);
            if(!$empLeave) {
                throw new RuntimeException("No data has found!");
            }

            if(isset($param['description'])) {
                $empLeave->setDescription($param['description']);
            }
            if(isset($param['start'])) {
                $empLeave->setStart(new \DateTime($param['start']));
            }
            if(isset($param['end'])) {
                $empLeave->setEnd(new \DateTime($param['end']));
            }
            if(isset($param['status'])) {
                $empLeave->setStatus($param['status']);
            }

            //join table update
            if(isset($param['emp_leave_reason_id'])) {
                $leave_reason = $this->em->getRepository(EmpLeaveReasons::class)->find($param['emp_leave_reason_id']);
                $empLeave->setEmpLeaveReason($leave_reason);
            }
            if(isset($param['employee_id'])) {
                $emp = $this->em->getRepository(Users::class)->find($param['employee_id']);
                $empLeave->setEmployee($emp);
            }

            //save database
            $this->em->flush();
            return $this->json(array("success" => true, "message" => "Updated successfully"), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/delete/{id}", name="delete_employee_leave", methods="DELETE")
     * @param $id
     * @return JsonResponse
     */
    public function delete($id): JsonResponse
    {
        try {
            $emp_leave = $this->em->getRepository(EmpLeaves::class)->find($id);
            if(!$emp_leave) {
                throw new RuntimeException("No data has found!");
            }

            $emp_leave->setIsDelete(true);

            //save database
            $this->em->flush();
            return $this->json(array("success" => true, "message" => "Deleted successfully"), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }
}
