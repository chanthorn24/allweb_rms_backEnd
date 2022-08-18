<?php

namespace App\Controller\Employee;

use App\Entity\EmpPositions;
use Doctrine\ORM\EntityManagerInterface;
use http\Env\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class EmpPositionsController extends AbstractController
{
    private EntityManagerInterface $em;
    public function __construct(EntityManagerInterface $entityManager){
        $this->em = $entityManager;
    }

    /**
     * @Route("/employee/positions", name="app_employee_emp_positions", methods="GET")
     */
    public function getAll(): JsonResponse
    {
        try{
            $position = $this->em->getRepository(EmpPositions::class)->findAll();
            if(!$position){
                throw new \RuntimeException("No Data is Found");
            }
            foreach($position as $pos){
                if(!$pos->getIsDelete()){
                    $res[] = [
                        "id"=>$pos->getId(),
                        "name"=>$pos->getName()
                    ];
                }
            }
            return $this->json(array("success"=>true, "message"=>$res,"status"=>200));

        }
        catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }
    /**
     * @Route("/employee/positions/create", name="create_positions", methods="POST")
     */
    public function create(Request $request): JsonResponse
    {
        $param = json_decode($request->getContent());
        try{
            $position = $this->em->getRepository(EmpPositions::class)->findAll();
            if(!$position){
                throw new \RuntimeException("No Data is Found");
            }
            foreach($position as $pos){
                if(!$pos->getIsDelete()){
                    $res[] = [
                        "id"=>$pos->getId(),
                        "name"=>$pos->getName()
                    ];
                }
            }
            return $this->json(array("success"=>true, "message"=>$res,"status"=>200));

        }
        catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }
}
