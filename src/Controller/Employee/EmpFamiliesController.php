<?php

namespace App\Controller\Employee;

use App\Entity\EmpFamilies;
use Doctrine\ORM\EntityManagerInterface;
use RuntimeException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\DependencyInjection\Loader\Configurator\param;

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
                    "phone" => $fam->getPhone()
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