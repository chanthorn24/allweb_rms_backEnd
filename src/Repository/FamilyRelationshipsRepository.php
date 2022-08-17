<?php

namespace App\Repository;

use App\Entity\FamilyRelationships;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FamilyRelationships>
 *
 * @method FamilyRelationships|null find($id, $lockMode = null, $lockVersion = null)
 * @method FamilyRelationships|null findOneBy(array $criteria, array $orderBy = null)
 * @method FamilyRelationships[]    findAll()
 * @method FamilyRelationships[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FamilyRelationshipsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FamilyRelationships::class);
    }

    public function add(FamilyRelationships $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(FamilyRelationships $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return FamilyRelationships[] Returns an array of FamilyRelationships objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FamilyRelationships
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
