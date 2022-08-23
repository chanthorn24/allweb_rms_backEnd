<?php

namespace App\Controller\Employee;

use App\Entity\EmpPositions;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Exception\RuntimeException;
use \Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/employee/position")
 */

class EmpPositionsController extends AbstractController
{
    private EntityManagerInterface $em;
    public function __construct(EntityManagerInterface $entityManager){
        $this->em = $entityManager;
    }

    /**
     * @Route("/", name="get_all_position", methods="GET")
     */
    public function getAll(): JsonResponse
    {
        try{
            $position = $this->em->getRepository(EmpPositions::class)->findAll();
            if(!$position){
                throw new \RuntimeException("No Data is Found");
            }
            foreach($position as $pos){
                $userCollection = [];
                if(!$pos->getIsDelete()){
                    foreach ($pos->getUsers() as $user) {
                        $userCollection[] = [
                            "name" => $user->getEmail(),
                        ];
                    }
                    $res[] = [
                        "id"=>$pos->getId(),
                        "name"=>$pos->getName(),
                        "Users" => $userCollection,
                    ];
                }
            }
            return $this->json(array("success"=>true, "data"=> $res),200);

        }
        catch (\Exception $error) {
            return $this->json(array("success" => false, "message" => $error->getMessage()), 400);
        }
    }
    /**
     * @Route("/{id}", name="get_one_position", methods="GET")
     * @param $id
     * @return JsonResponse
     */
    public function getOnePosition($id): JsonResponse
    {
        try{
            $pos= $this->em->getRepository(EmpPositions::class)->find($id);
            if(!$pos){
                throw new RuntimeException('No data is found');
            }
           if(!$pos->getIsDelete()){
               $res[] = [
                   "id"=>$pos->getId(),
                   "name"=>$pos->getName(),
               ];
           }

            return $this->json(array("success" => true, "data" => $res), 200);
        }catch(\Exception $exp){
            return $this->json(array("success" => false, "data" => $exp->getMessage()), 400);
        }
    }

    /**
     * @Route("/create", name="create_positions", methods="POST")
     * @param Request $request
     * @return JsonResponse
     */
    public function Create(Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try{
            $emp = new EmpPositions();
            $emp->setName($param['name']);
            $emp->setIsDelete(false);

            //save to db
            $this->em->persist($emp);
            $this->em->flush($emp);
            return $this->json(array("success" => true, "message" => 'Created Successfully'), 200);
        }catch(\Exception $exp){
            return $this->json(array("success" => false, "message" => $exp->getMessage()), 400);
        }
    }

    /**
     * @Route("/update/{id}", name="update_position", methods="PUT")
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function update(Request $request, $id): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
       try{
           $position = $this->em->getRepository(EmpPositions::class)->find($id);
           if(!$position){
               throw new RuntimeException('No data is found');
           }
           if(isset($param['name'])){
               $position->setName($param['name']);
           }
            //update to db
           $this->em->flush();

           return $this->json(array("success" => true, "message" => 'Updated successfully'), 200);
       }catch(\Exception $exp){
           return $this->json(array("success" => false, "message" => $exp->getMessage()), 400);
       }
    }
    /**
     * @Route("/delete/{id}", name="delete_position", methods="DELETE")
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function delete(Request $request, $id): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
       try{
           $position = $this->em->getRepository(EmpPositions::class)->find($id);
           if(!$position){
               throw new RuntimeException('No data is found');
           }
           $position->setIsDelete(true);
            //update to db
           $this->em->flush();

           return $this->json(array("success" => true, "message" => 'Deleted successfully'), 200);
       }catch(\Exception $exp){
           return $this->json(array("success" => false, "message" => $exp->getMessage()), 400);
       }
    }
}
