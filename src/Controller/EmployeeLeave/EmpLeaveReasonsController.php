<?php

namespace App\Controller\EmployeeLeave;

use App\Entity\EmpLeaveReasons;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/employee/leave/reason")
 */
class EmpLeaveReasonsController extends AbstractController
{
    private EntityManagerInterface $em;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @Route("/", name="all_leave_reasons", methods="GET")
     */
    public function index(): JsonResponse
    {
        try {
            $leaveTypes = $this->em->getRepository(EmpLeaveReasons::class)->findAll();

            if(!$leaveTypes) {
                throw new RuntimeException("No data found");
            }

            $res = [];
            foreach ($leaveTypes as $leave) {
                if(!$leave->getIsDelete()) {
                    $res[] = [
                        "name" => $leave->getName(),
                        "is_delete" => $leave->getIsDelete(),
                    ];
                }
             }

            return $this->json(array("success" => true, "data" => $res), 200);
        } catch (\Exception $err) {
            return $this->json(array("success" => false, "message" => $err->getMessage()), 400);
        }
    }

    /**
     * @Route("/create", name="create_leave_reasons", methods="POST")
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $leaveReasons = new EmpLeaveReasons();

            $leaveReasons->setName($param['name']);
            $leaveReasons->setIsDelete(false);

            //save data to database
            $this->em->persist($leaveReasons);
            $this->em->flush();

            return $this->json(array("success" => true, "message" => "Create successfully"), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/update/{id}", name="update_leave_reason", methods="POST")
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function update($id, Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $leaveReason = $this->em->getRepository(EmpLeaveReasons::class)->find($id);
            if(!$leaveReason) {
                throw new RuntimeException("No data has found!");
            }

            if(isset($param['name'])) {
                $leaveReason->setName($param['name']);
            }

            //save data to database
            $this->em->flush();

            return $this->json(array("success" => true, "message" => "Updated successfully"), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route ("/delete/{id}", name="delete_leave_reason", methods="DELETE")
     * @param $id
     * @return JsonResponse
     */
    public function delete($id): JsonResponse
    {
        try {
            $leave_reason = $this->em->getRepository(EmpLeaveReasons::class)->find($id);
            if(!$leave_reason) {
                throw new RuntimeException("No data has found!");
            }

            $leave_reason->setIsDelete(true);

            //save database
            $this->em->flush();
            return $this->json(array("success" => true, "message" => "Deleted successfully"), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }
}
