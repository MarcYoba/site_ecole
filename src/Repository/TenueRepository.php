<?php

namespace App\Repository;

use App\Entity\Tenue;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tenue>
 *
 * @method Tenue|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tenue|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tenue[]    findAll()
 * @method Tenue[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TenueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tenue::class);
    }

//    /**
//     * @return Tenue[] Returns an array of Tenue objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Tenue
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
    public function findBySemaine($date1,$date2): array
    {        
        return $this->createQueryBuilder('t')
            ->andWhere('t.createtAt BETWEEN :date1 AND :date2')
            ->setParameter('date1', $date1)
            ->setParameter('date2', $date2)
            ->orderBy('t.id', 'ASC')
            ->getQuery()
           ->getResult()
        ;
    }

    public function findBySommeTenueDate($date): float
    {        
        $result = $this->createQueryBuilder('t')
            ->select('SUM(t.montant) as somme')
            ->andWhere('t.createtAt = :date')
            ->setParameter('date', $date)
            ->getQuery()
           ->getOneOrNullResult()
        ;
        return $result['somme'] ?? 0; 
    }

    public function findBySommeTenueYear($anne) : float 
    {
        $result = $this->createQueryBuilder('t')
            ->select('SUM(t.montant) as somme')
            ->andWhere('YEAR(t.createtAt) = :date')
            ->setParameter('date', $anne)
            ->getQuery()
           ->getOneOrNullResult()
        ;
        return $result['somme'] ?? 0; 
    }

    public function findByTenueDate($date): array
    {        
        return $this->createQueryBuilder('t')
            ->andWhere('t.createtAt = :date')
            ->setParameter('date', $date)
            ->getQuery()
           ->getResult()
        ;
    }
}
