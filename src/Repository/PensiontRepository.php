<?php

namespace App\Repository;

use App\Entity\Pensiont;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Pensiont>
 *
 * @method Pensiont|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pensiont|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pensiont[]    findAll()
 * @method Pensiont[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PensiontRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pensiont::class);
    }

//    /**
//     * @return Pensiont[] Returns an array of Pensiont objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Pensiont
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
