<?php

namespace App\Controller\Employee;

use App\Entity\Banks;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/employee/bank")
 */

class BanksController extends AbstractController
{
    private EntityManagerInterface $em;
    public function __construct(EntityManagerInterface $entityManager){
        $this->em = $entityManager;
    }
    /**
     * @Route("/", name="get_banks", methods="GET")
     */
    public function getAll(): JsonResponse
    {
        try {
            $banks = $this->em->getRepository(Banks::class)->findAll();
            if(!$banks){
                throw new RuntimeException('No data is found');
            }
            foreach($banks as $bank){
                $res[] = [
                    "id" => $bank->getId(),
                    "name" => $bank->getName()
                ];
            }
            return $this->json(array("success"=> true, "message"=> $res), 200);
        }catch (\Exception $err){
            return $this->json(array("success"=> false, "message" => $err->getMessage()), 400);
        }
    }
    /**
     * @Route("/create", name="create_banks", methods="POST")
     */
    public function create(Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $bank = new  Banks();
            $bank->setName($param['name']);
            $bank->setIsDelete(false);
            $this->em->persist($bank);
            $this->em->flush($bank);

            return $this->json(array("success"=> true, "message"=> "Created successfully"), 200);
        }catch (\Exception $err){
            return $this->json(array("success"=> false, "message" => $err->getMessage()), 400);
        }
    }
    /**
     * @Route("/update/{id}", name="update_banks", methods="PUT")
     */
    public function update(Request $request, $id): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try {
            $banks = $this->em->getRepository(Banks::class)->find($id);
            if(!$banks){
                throw new RuntimeException('No data is found');
            }
            if(isset($param['name'])){
                $banks->setName($param['name']);
            }
            $this->em->flush($banks);

            return $this->json(array("success"=> true, "message"=> "Updated successfully"), 200);
        }catch (\Exception $err){
            return $this->json(array("success"=> false, "message" => $err->getMessage()), 400);
        }
    }
    /**
     * @Route("/delete/{id}", name="delete_banks", methods="DELETE")
     */
    public function delete($id): JsonResponse
    {
        try {
            $banks = $this->em->getRepository(Banks::class)->find($id);
            if(!$banks){
                throw new RuntimeException('No data is found');
            }

            $banks->setIsDelete(true);
            $this->em->flush($banks);

            return $this->json(array("success"=> true, "message"=> "Deleted successfully"), 200);
        }catch (\Exception $err){
            return $this->json(array("success"=> false, "message" => $err->getMessage()), 400);
        }
    }
}
