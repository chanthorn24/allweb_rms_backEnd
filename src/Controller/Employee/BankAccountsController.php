<?php

namespace App\Controller\Employee;

use App\Entity\BankAccounts;
use App\Entity\Banks;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/employee/bank/account")
 */
class BankAccountsController extends AbstractController
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $entityManager){
        $this->em = $entityManager;
    }

    /**
     * @Route("/", name="get_bank_account_info", methods="GET")
     */
    public function getAll(): JsonResponse
    {

        try{
            $bankAccounts = $this->em->getRepository(BankAccounts::class)->findAll();
            if(!$bankAccounts){
                throw new RuntimeException('No data is found');
            }
            foreach($bankAccounts as $bankAcc){
                if(!$bankAcc->getIsDelete()){
                    $res[] = [
                        "id" => $bankAcc->getId(),
                        "name" => $bankAcc->getName(),
                        "number" => $bankAcc->getNumber(),
                        "bank" => $bankAcc->getBank()->getName()

                    ];
                }

            }
            return $this->json(array("success"=> true, "message"=> $res), 200);
        }catch (\Exception $err){
            return $this->json(array("success"=> false, "message" => $err->getMessage()), 400);
        }
    }

    /**
     * @Route("/create", name="create_bank_account_info", methods="POST")
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try{
            $bankAccount = new BankAccounts();
            $bankAccount->setName($param['name']);
            $bankAccount->setNumber($param['number']);
            $bankAccount->setIsDelete(false);

            //join table
            $bank = $this->em->getRepository(Banks::class)->find($param['bank_id']);
            $bankAccount->setBank($bank);

            //save
            $this->em->persist($bankAccount);
            $this->em->flush($bankAccount);

            return $this->json(array("success"=> true, "message"=> "Created successfully"), 200);
        }catch (\Exception $err){
            return $this->json(array("success"=> false, "message" => $err->getMessage()), 400);
        }
    }

    /**
     * @Route("/update/{id}", name="update_bank_account_info", methods="PUT")
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function update(Request $request, $id): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try{
            $bankAccount = $this->em->getRepository(BankAccounts::class)->find($id);
            if(!$bankAccount){
                throw new RuntimeException("No data is found");
            }
            if(isset($param['name'])){
                $bankAccount->setName($param['name']);

            }
            if(isset($param['number'])){
                $bankAccount->setNumber($param['number']);
            }
            if(isset($param['bank_id'])){
                $bank = $this->em->getRepository(Banks::class)->find($param['bank_id']);
                $bankAccount->setBank($bank);
            }


//            if(isset($param['bank_id'])){
//                $bank = $this->em->getRepository(Banks::class)->find($param['bank_id']);
//                $bankAccount->setName($bank);
//            }

            //update db
            $this->em->flush();

            return $this->json(array("success"=> true, "message"=> "Updated successfully"), 200);
        }catch (\Exception $err){
            return $this->json(array("success"=> false, "message" => $err->getMessage()), 400);
        }
    }

    /**
     * @Route("/delete/{id}", name="delete_bank_account_info", methods="DELETE")
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function delete(Request $request, $id): JsonResponse
    {
        $param = json_decode($request->getContent(), true);
        try{
            $bankAccount = $this->em->getRepository(BankAccounts::class)->find($id);
            if(!$bankAccount){
                throw new RuntimeException("No data is found");
            }
            $bankAccount->setIsDelete(true);

            //update db
            $this->em->flush($bankAccount);

            return $this->json(array("success"=> true, "message"=> "Deleted successfully"), 200);
        }catch (\Exception $err){
            return $this->json(array("success"=> false, "message" => $err->getMessage()), 400);
        }
    }
}
