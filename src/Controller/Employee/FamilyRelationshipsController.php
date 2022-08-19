<?php

namespace App\Controller\Employee;

use App\Entity\FamilyRelationships;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/employee/family/relationship")
 */

class FamilyRelationshipsController extends AbstractController
{
    private EntityManagerInterface $em;
    public function __construct(EntityManagerInterface $entityManager){
        $this->em = $entityManager;
    }
    /**
     * @Route("/", name="get_family_relationships",methods="GET")
     */
    public function getAll(): JsonResponse
    {
        try{
            $famRel = $this->em->getRepository(FamilyRelationships::class)->findAll();
            if(!$famRel){
                throw new RuntimeException('No data is found');
            }
            foreach ($famRel as $fam){
                $res[] = [
                    "id" => $fam->getId(),
                    "name" => $fam->getName()
                ];
            }
            return $this->json(array("success"=> true, "message"=> $res), 200);
        }catch (\Exception $err){
            return $this->json(array("success"=> false, "message" => $err->getMessage()), 400);
        }
    }
    /**
     * @Route("/create", name="create_family_relationships",methods="POST")
     */
    public function create(Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try{
            $famRelationship = new FamilyRelationships();
            $famRelationship->setName($param['name']);
            $famRelationship->setIsDelete(false);
            //save to db
            $this->em->persist($famRelationship);
            $this->em->flush($famRelationship);
         return $this->json(array("success"=> true, "message"=> "Created successfully"), 200);
        }catch (\Exception $err){
             return $this->json(array("success"=> false, "message" => $err->getMessage()), 400);
        }
    }
    /**
     * @Route("/update/{id}", name="update_family_relationships",methods="PUT")
     */
    public function update(Request $request, $id): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try{
            $famRel = $this->em->getRepository(FamilyRelationships::class)->find($id);
            if(!$famRel){
                throw new RuntimeException('No data is found');
            }
            if(isset($param['name'])){
                $famRel->setName($param['name']);
            }
            $this->em->flush($famRel);
        return $this->json(array("success"=> true, "message"=> "Updated successfully"), 200);
        }
        catch (\Exception $err){
            return $this->json(array("success"=> false, "message" => $err->getMessage()), 400);
         }
    }
    /**
     * @Route("/delete/{id}", name="delete_family_relationships",methods="DELETE")
     */
    public function delete($id): JsonResponse
    {
        try{
            $famRel = $this->em->getRepository(FamilyRelationships::class)->find($id);
            if(!$famRel){
                throw new RuntimeException("No data is found");
            }

            $famRel->setIsDelete(true);
            $this->em->flush($famRel);
            return $this->json(array("success"=> true, "message"=> "Delete successfully"), 200);
        }catch (\Exception $err){
            return $this->json(array("success"=> false, "message" => $err->getMessage()), 400);
        }
    }

}
