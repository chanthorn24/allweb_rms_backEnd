<?php

namespace App\Controller\Employee;

use App\Entity\SchoolDegrees;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/employee/degree")
 */
class SchoolDegreesController extends AbstractController
{
    private EntityManagerInterface $em;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @Route("/", name="all_school_degree", methods="GET")
     * @return JsonResponse
     */
    public function getAll(): JsonResponse
    {
        try {
            $emp_degrees = $this->em->getRepository(SchoolDegrees::class)->findAll();
            if(!$emp_degrees) {
                throw new RuntimeException("No data has found!");
            }

            $res = [];
            foreach ($emp_degrees as $emp_degree) {
                if(!$emp_degree->getIsDelete()) {
                    $res[] = [
                        "id" => $emp_degree->getId(),
                        "name" => $emp_degree->getName(),
                    ];
                }
            }
            return $this->json(array("success" => true, "data" => $res), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/{id}", name="id_school_degree", methods="GET")
     * @param $id
     * @return JsonResponse
     */
    public function getByID($id): JsonResponse
    {
        try {
            $emp_degree = $this->em->getRepository(SchoolDegrees::class)->find($id);
            if(!$emp_degree) {
                throw new RuntimeException("No data has found!");
            }

            $res = [];
            if(!$emp_degree->getIsDelete()) {
                $res[] = [
                    "id" => $emp_degree->getId(),
                    "name" => $emp_degree->getName(),
                ];
            }
            return $this->json(array("success" => true, "data" => $res), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route ("/create", name="create_school_degree", methods="POST")
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $emp_degree = new SchoolDegrees();

            $emp_degree->setName($param['name']);
            $emp_degree->setIsDelete(false);


            //save data to database
            $this->em->persist($emp_degree);
            $this->em->flush();
            return $this->json(array("success" => true, "message" => "Created successfully"), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route ("/update/{id}", name="update_school_degree", methods="PUT")
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function update($id, Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $emp_degree = $this->em->getRepository(SchoolDegrees::class)->find($id);
            if(!$emp_degree) {
                throw new RuntimeException("No data has found!");
            }

            if(isset($param['name'])) {
                $emp_degree->setName($param['name']);
            }

            //save data to database
            $this->em->flush();
            return $this->json(array("success" => true, "message" => "Updated successfully"), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route ("/delete/{id}", name="delete_school_degree", methods="DELETE")
     */
    public function delete($id): JsonResponse
    {
        try {
            $emp_degree = $this->em->getRepository(SchoolDegrees::class)->find($id);
            if(!$emp_degree) {
                throw new RuntimeException("No data has found!");
            }

            $emp_degree->setIsDelete(true);
            //save database
            $this->em->flush();
            return $this->json(array("success" => true, "message" => "Deleted successfully"), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }
}
