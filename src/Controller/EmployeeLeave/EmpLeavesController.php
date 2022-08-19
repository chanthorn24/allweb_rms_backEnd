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
                        "description" => $leave->getDescription(),
                        "start" => $leave->getStart(),
                        "end" => $leave->getEnd(),
                        "is_delete" => $leave->getIsDelete(),
                    ];
                    $res2 = [
                        "leave_reason" => null,
                    ];
                    if($leave->getEmpLeaveReason()) {
                        $res2 = [
                            "leave_reason" => $leave->getEmpLeaveReason()->getName(),
                        ];
                    }
                    $res3 = [
                        "employee" => null
                    ];
                    if($leave->getEmployee()) {
                        $res3 = [
                            "employee" => $leave->getEmployee()->getLastName(),
                        ];
                    }

                    $res[] = $res1 + $res2 + $res3;
                }
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
            $empLeave->setIsDelete(false);

            //join table
            $leave_reason = $this->em->getRepository(EmpLeaveReasons::class)->find($param['emp_leave_reason_id']);
            $empLeave->setEmpLeaveReason($leave_reason);
            $emp = $this->em->getRepository(Users::class)->find($param['employee_id']);
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
     * @Route ("/update/{id}", name="update_employee_leave", methods="POST")
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

            //join table update
            if(isset($param['emp_leave_reason'])) {
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
