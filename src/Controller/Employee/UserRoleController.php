<?php

namespace App\Controller\Employee;

use App\Entity\UserRoles;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserRoleController extends AbstractController
{
    private EntityManagerInterface $em;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @Route("/role", name="all_role", methods="GET")
     */
    public function getAll(): JsonResponse
    {
        try {
            $roles = $this->em->getRepository(UserRoles::class)->findAll();
            if(!$roles) {
                throw new RuntimeException("No data has found");
            }

            $res = [];
            foreach ($roles as $role) {
                if(!$role->getIsDelete()) {
                    $res[] = [
                        "id" => $role->getId(),
                        "name" => $role->getName(),
                    ];
                }
            }

            return $this->json(array("success" => true, "data" => $res), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/role/{id}", name="id_role", methods="GET")
     * @param $id
     * @return JsonResponse
     */
    public function getByID($id): JsonResponse
    {
        try {
            $role = $this->em->getRepository(UserRoles::class)->find($id);
            if(!$role) {
                throw new RuntimeException("No data has found");
            }

            $res = [];
            if(!$role->getIsDelete()) {
                $res[] = [
                    "id" => $role->getId(),
                    "name" => $role->getName(),
                ];
            }

            return $this->json(array("success" => true, "data" => $res), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/role/create", name="create_role", methods="POST")
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $role = new UserRoles();

            $role->setName($param['name']);
            $role->setIsDelete(false);

            //save to database
            $this->em->persist($role);
            $this->em->flush();

            return $this->json(array("success" => true, "message" => "Created successfully"), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/role/update", name="update_role_by_id", methods="PUT")
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function update($id, Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $role = $this->em->getRepository(UserRoles::class)->find($id);
            if(!$role) {
                throw new RuntimeException("No data has found");
            }

            if(isset($param["name"])) {
                $role->setName($param["name"]);
            }

            $res = [
                "role" => $role->getName(),
            ];
            //save database
            $this->em->flush();
            return $this->json(array("success" => true, "message" => "Updated successfully", "data" => $res), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }

    /**
     * @Route("/role/delete", name="delete_role", methods="DELETE")
     * @param $id
     * @return JsonResponse
     */
    public function delete($id): JsonResponse
    {
        try {
            $role = $this->em->getRepository(UserRoles::class)->find($id);
            if(!$role) {
                throw new RuntimeException("No data has found");
            }

            $role->setIsDelete(true);
            $this->em->flush();
            return $this->json(array("success" => true, "message" => "Deleted successfully"), 200);
        } catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }
}
