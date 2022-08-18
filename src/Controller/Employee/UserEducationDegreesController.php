<?php

namespace App\Controller\Employee;

use App\Entity\SchoolDegrees;
use App\Entity\UserEducationDegrees;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/employee/education")
 */
class UserEducationDegreesController extends AbstractController
{
    private EntityManagerInterface $em;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @Route("/", name="all_employee_education", methods="GET")
     */
    public function index(): JsonResponse
    {
        try {
            $emp_educations = $this->em->getRepository(UserEducationDegrees::class)->findAll();
            if(!$emp_educations) {
                throw new RuntimeException("No data has found!");
            }

            foreach ($emp_educations as $education) {
                if(!$education->getIsDelete()) {
                    $res[] = [
                        "school" => $education->getSchool(),
                        "degree" => $education->getSchoolDegree()->getName(),
                        "is_delete" => $education->getIsDelete(),
                    ];
                }
            }

            return $this->json(array("success" => true, "data" => $res), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route ("/create", name="create_employee_education", methods="POST")
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $emp_education = new UserEducationDegrees();

            $emp_education->setSchool($param['school']);
            $emp_education->setIsDelete(false);

            //joint table
            $degree = $this->em->getRepository(SchoolDegrees::class)->find($param['school_degree_id']);
            $emp_education->setSchoolDegree($degree);

            //save data to database
            $this->em->persist($emp_education);
            $this->em->flush();

            return $this->json(array("success" => true, "message" => "Created successfully"), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route ("/update/{id}", name="update_employee_education", methods="POST")
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function update($id, Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $emp_education = $this->em->getRepository(UserEducationDegrees::class)->find($id);
            if(!$emp_education) {
                throw new RuntimeException("No data has found!");
            }

            if(isset($param['school'])) {
                $emp_education->setSchool($param['school']);
            }

            //save database
            $this->em->flush();
            return $this->json(array("success" => true, "message" => "Updated successfully"), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route ("/delete/{id}", name="delete_employee_education", methods="DELETE")
     * @param $id
     * @return JsonResponse
     */
    public function delete($id): JsonResponse
    {
        try {
            $emp_education = $this->em->getRepository(UserEducationDegrees::class)->find($id);
            if(!$emp_education) {
                throw new RuntimeException("No data has found!");
            }

            $emp_education->setIsDelete(true);

            //save database
            $this->em->flush();
            return $this->json(array("success" => true, "message" => "Delete successfully"), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }
}
