<?php

namespace App\Controller\Employee;

use App\Entity\EmpFamilies;
use App\Entity\FamilyRelationships;
use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("employee/family")
 */
class EmpFamiliesController extends AbstractController
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @Route("/", name="get_family", methods="GET")
     */
    public function getAll(): JsonResponse
    {
        try {
            $family = $this->em->getRepository(EmpFamilies::class)->findAll();
            if (!$family) {
                throw new RuntimeException("No data is found");
            }
            foreach ($family as $fam) {
                $res[] = [
                    "id" => $fam->getId(),
                    "name" => $fam->getName(),
                    "phone" => $fam->getPhone(),
                    "family_relationship" => $fam->getFamilyRelationship()->getName(),
                    "employee_id" => $fam->getEmployee()->getId(),
                ];
            }
            return $this->json(array("success" => true, "message" => $res), 200);
        } catch (\Exception $err) {
            return $this->json(array("success" => false, "message" => $err->getMessage()), 400);
        }
    }

    /**
     * @Route("/create", name="create_family", methods="POST")
     */
    public function create(Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $families = new EmpFamilies();
            $families->setName($param['name']);
            $families->setPhone($param['phone']);
            $families->setIsDelete(false);

            //joint table
            $family_relationship = $this->em->getRepository(FamilyRelationships::class)->find($param['family_relationship_id']);
            $families->setFamilyRelationship($family_relationship);
            $employee = $this->em->getRepository(Users::class)->find($param['employee_id']);
            if($employee) {
                $families->setEmployee($employee);
            } else {
                $families->setEmployee(null);
            }

            $this->em->persist($families);
            $this->em->flush($families);

            return $this->json(array("success" => true, "message" => "Created successfully"), 200);
        } catch (\Exception $err) {
            return $this->json(array("success" => false, "message" => $err->getMessage()), 400);
        }

    }

    /**
     * @Route("/update/{id}", name="update_family", methods="POST")
     */
    public function update(Request $request, $id): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $family = $this->em->getRepository(EmpFamilies::class)->find($id);
            if (!$family) {
                throw new RuntimeException("No data is found");
            }
            if (isset($param['name']) && isset($param['phone'])) {
                $family->setName($param['name']);
                $family->setPhone($param['phone']);
            }
            if (isset($param['family_relationship_id'])) {
                $family_relationship = $this->em->getRepository(FamilyRelationships::class)->find($param['family_relationship_id']);
                $family->setFamilyRelationship($family_relationship);
            }
            if(isset($param['employee_id'])) {
                $employee = $this->em->getRepository(Users::class)->find($param['employee_id']);
                if ($employee) {
                    $family->setEmployee($employee);
                } else {
                    $family->setEmployee(null);
                }
            }

            $this->em->flush($family);

            return $this->json(array("success" => true, "message" => "Updated successfully"), 200);
        } catch (\Exception $err) {
            return $this->json(array("success" => false, "message" => $err->getMessage()), 400);
        }
    }

    /**
     * @Route("/delete/{id}", name="delete_family", methods="DELETE")
     */
    public function delete($id): JsonResponse
    {
        try {
            $family = $this->em->getRepository(EmpFamilies::class)->find($id);
            if (!$family) {
                throw new RuntimeException('No data is found');
            }
            $family->setIsDelete(true);
            $this->em->flush($family);

            return $this->json(array("success" => true, "message" => "Deleted successfully"), 200);
        } catch (\Exception $err) {
            return $this->json(array("success" => false, "message" => $err->getMessage()), 400);
        }
    }

}