<?php

namespace App\Controller\EmployeeAttendance;

use App\Entity\EmpAttendances;
use Doctrine\ORM\EntityManagerInterface;
use http\Exception\RuntimeException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/employee/attendance")
 */
class EmpAttendancesController extends AbstractController
{
    private EntityManagerInterface $em;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @Route("/", name="all_employee_attendance", methods="GET")
     * @return JsonResponse
     */
    public function getAll(): JsonResponse
    {
        try {
            $emp_attendances = $this->em->getRepository(EmpAttendances::class)->findAll();
            if(!$emp_attendances) {
                throw new RuntimeException("No data has found!");
            }

            foreach ($emp_attendances as $emp_attendance) {
                if (!$emp_attendance->getIsDelete()) {
                    $res[] = [
                        "name" => $emp_attendance->getIsDelete(),
                    ];
                }
            }

            return $this->json(array("success" => true, "data" => $res), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route ("/create", name="create_employee_attendance", methods="POST")
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $emp_attendance = new EmpAttendances();

            $emp_attendance->setIsDelete(false);

            //save data to database
            $this->em->persist($emp_attendance);
            $this->em->flush();
            return $this->json(array("success" => true, "message" => "Created successfully"), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route ("/update/{id}", name="update_employee_attendance", methods="POST")
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function update($id, Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $emp_attendance = $this->em->getRepository(EmpAttendances::class)->find($id);
            if(!$emp_attendance) {
                throw new RuntimeException("No data has found!");
            }

            return $this->json(array("success" => true, "message" => "Updated successfully"), 200);

        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route ("/delete/{id}", name="delete_employee_attendance", methods="DELETE")
     */
    public function delete($id): JsonResponse
    {
        try {
            $emp_attendance = $this->em->getRepository(EmpAttendances::class)->find($id);
            if(!$emp_attendance) {
                throw new RuntimeException("No data has found!");
            }

            $emp_attendance->setIsDelete(true);

            //save database
            $this->em->flush();
            return $this->json(array("success" => true, "message" => "Deleted successfully"), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }
}
