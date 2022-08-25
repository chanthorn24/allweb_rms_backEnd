<?php

namespace App\Repository;

use App\Entity\EmpAttendances;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use function Symfony\Component\DependencyInjection\Loader\Configurator\expr;

/**
 * @extends ServiceEntityRepository<EmpAttendances>
 *
 * @method EmpAttendances|null find($id, $lockMode = null, $lockVersion = null)
 * @method EmpAttendances|null findOneBy(array $criteria, array $orderBy = null)
 * @method EmpAttendances[]    findAll()
 * @method EmpAttendances[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmpAttendancesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EmpAttendances::class);
    }

    public function add(EmpAttendances $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EmpAttendances $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @param $date
//     * @param $user_id
//     * @return array
//     */
//    public function findCurrentDate($date, $user_id): array
//    {
//        $entityManager = $this->getEntityManager();
//
//        $query = $entityManager->createQuery(
//            'SELECT a
//            FROM App\Entity\EmpAttendances a
//            WHERE a.created LIKE `%:date%`
//            AND employee_id = :user_id
//            ORDER BY a.emp_attendance_type_id ASC'
//        )->setParameter('date', $date)
//        ->setParameter('user_id', $user_id);
//
//        // returns an array of Product objects
//        return $query->getResult();
//    }

    /**
     * @return EmpAttendances[] Returns an array of EmpAttendances objects
     */
    public function findByExampleField(): array
    {
        return $this->createQueryBuilder('e')
            ->select('e')
            ->where($this->createQueryBuilder('e')->expr()->like('e.created', '?2022'))
            ->orderBy('', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

//    public function findOneBySomeField($value): ?EmpAttendances
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
