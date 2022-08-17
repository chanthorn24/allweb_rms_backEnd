<?php

namespace App\Repository;

use App\Entity\EmpLeaveReasons;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EmpLeaveReasons>
 *
 * @method EmpLeaveReasons|null find($id, $lockMode = null, $lockVersion = null)
 * @method EmpLeaveReasons|null findOneBy(array $criteria, array $orderBy = null)
 * @method EmpLeaveReasons[]    findAll()
 * @method EmpLeaveReasons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmpLeaveReasonsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EmpLeaveReasons::class);
    }

    public function add(EmpLeaveReasons $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EmpLeaveReasons $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return EmpLeaveReasons[] Returns an array of EmpLeaveReasons objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?EmpLeaveReasons
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
