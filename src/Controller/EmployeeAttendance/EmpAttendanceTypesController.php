<?php

namespace App\Controller\EmployeeAttendance;

use App\Entity\EmpAttendanceTypes;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/employee/attendance/type")
 */
class EmpAttendanceTypesController extends AbstractController
{
    private EntityManagerInterface $em;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @Route("/", name="all_attendance_type", methods="GET")
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            $emp_attendances = $this->em->getRepository(EmpAttendanceTypes::class)->findAll();
            if(!$emp_attendances) {
                throw new RuntimeException("No data has found!");
            }

            $res = [];
            foreach ($emp_attendances as $attendance) {
                if(!$attendance->getIsDelete()) {
                    $res[] = [
                        "id" => $attendance->getId(),
                        "name" => $attendance->getName(),
                    ];
                }
            }
            return $this->json(array("success" => true, "data" => $res), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/{id}", name="id_attendance_type", methods="GET")
     * @param $id
     * @return JsonResponse
     */
    public function getById($id): JsonResponse
    {
        try {
            $emp_attendance = $this->em->getRepository(EmpAttendanceTypes::class)->find($id);
            if(!$emp_attendance) {
                throw new RuntimeException("No data has found!");
            }

            $res = [];
            if(!$emp_attendance->getIsDelete()) {
                $res[] = [
                    "id" => $emp_attendance->getId(),
                    "name" => $emp_attendance->getName(),
                ];
            }
            return $this->json(array("success" => true, "data" => $res), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/create", name="create_attendance_type", methods="POST")
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $emp_attendance = new EmpAttendanceTypes();

            $emp_attendance->setName($param['name']);
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
     * @Route ("/update/{id}", name="update_attendance_type", methods="PUT")
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function update($id, Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $emp_attendance = $this->em->getRepository(EmpAttendanceTypes::class)->find($id);
            if(!$emp_attendance) {
                throw new RuntimeException("No data has found!");
            }

            if(isset($param['name'])) {
                $emp_attendance->setName($param['name']);
            }

            //save database
            $this->em->flush();
            return $this->json(array("success" => true, "message" => "Updated successfully"), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route ("/delete/{id}", name="delete_attendance_type", methods="DELETE")
     * @param $id
     * @return JsonResponse
     */
    public function delete($id): JsonResponse
    {
        try {
            $emp_attendance = $this->em->getRepository(EmpAttendanceTypes::class)->find($id);
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
