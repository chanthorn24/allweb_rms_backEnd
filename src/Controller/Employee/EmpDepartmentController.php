<?php

namespace App\Controller\Employee;

use App\Entity\EmpDepartments;
use Doctrine\ORM\EntityManagerInterface;
use http\Exception\RuntimeException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EmpDepartmentController extends AbstractController
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @Route("/department", name="all_department", methods="GET")
     * @return JsonResponse
     */
    public function getAll(): JsonResponse
    {
        try {
            $departments = $this->em->getRepository(EmpDepartments::class)->findAll();
            if(!$departments) {
                throw new \RuntimeException("No data has found");
            }


            foreach ($departments as $depart) {
                $users = [];
                if(!$depart->getIsDelete()) {
                    foreach ($depart->getUsers() as  $user) {
                        $users[] = [
                          "firstName" => $user->getFirstName(),
                          "lastName" => $user->getLastName()
                        ];
                    }
                    $res[] = [
                        "id" => $depart->getId(),
                        "name" => $depart->getName(),
                        "users" => $users
                    ];
                }
            }
            return $this->json(array("success" => true, "data" => $res), 200);

        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/department/create", name="create_department", methods="POST")
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $department = new EmpDepartments();

            $department->setName($param['name']);
            $department->setIsDelete(false);

            //save data to database
            $this->em->persist($department);
            $this->em->flush();

            return $this->json(array("success" => true, "message" => "Created successfully"), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/department/update/{id}", name="update_department", methods="POST")
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function update($id, Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $department = $this->em->getRepository(EmpDepartments::class)->find($id);
            if(!$department) {
                throw new RuntimeException("No data has found");
            }

            if(isset($param['name'])) {
                $department->setName($param['name']);
            }

            $res[] = [
                "id" => $department->getId(),
                "name" => $department->getName()
            ];

            //save database
            $this->em->flush();
            return $this->json(array("success" => true, "message" => "Updated successfully", "data" => $res), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/department/delete/{id}", name="delete_department", methods="DELETE")
     * @param $id
     * @return JsonResponse
     */
    public function delete($id): JsonResponse
    {
        try {
            $department = $this->em->getRepository(EmpDepartments::class)->find($id);
            if(!$department) {
                throw new RuntimeException("No data has found");
            }

            $department->setIsDelete(true);

            //save database
            $this->em->flush();
            return $this->json(array("success" => true, "message" => "Deleted successfully"), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/department/{id}", name="show_department", methods="GET")
     * @param $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        try {
            $department = $this->em->getRepository(EmpDepartments::class)->find($id);
            if(!$department) {
                throw new \RuntimeException("No data has found");
            }

            $userCollections = $department->getUsers();
            $users = [];

            foreach($userCollections as $user){
                $users[] = [
                    "firstName" => $user->getFirstName(),
                    "lastName" => $user->getLastName(),
                ];
            }

            $res[] = [
                "id" => $department->getId(),
                "name" => $department->getName(),
                "users" => $users
            ];

            return $this->json(array("success" => true, "data" => $res), 200);

        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

}
