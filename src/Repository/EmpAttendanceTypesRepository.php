<?php

namespace App\Repository;

use App\Entity\EmpAttendanceTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EmpAttendanceTypes>
 *
 * @method EmpAttendanceTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method EmpAttendanceTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method EmpAttendanceTypes[]    findAll()
 * @method EmpAttendanceTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmpAttendanceTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EmpAttendanceTypes::class);
    }

    public function add(EmpAttendanceTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EmpAttendanceTypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return EmpAttendanceTypes[] Returns an array of EmpAttendanceTypes objects
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

//    public function findOneBySomeField($value): ?EmpAttendanceTypes
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
