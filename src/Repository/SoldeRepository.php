<?php

namespace App\Repository;

use App\Entity\Solde;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Solde>
 *
 * @method Solde|null find($id, $lockMode = null, $lockVersion = null)
 * @method Solde|null findOneBy(array $criteria, array $orderBy = null)
 * @method Solde[]    findAll()
 * @method Solde[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SoldeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Solde::class);
    }

//    /**
//     * @return Solde[] Returns an array of Solde objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Solde
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

    public function findBySemaine($date1,$date2): array
    {        
        return $this->createQueryBuilder('s')
            ->andWhere('s.createtAt BETWEEN :date1 AND :date2')
            ->setParameter('date1', $date1)
            ->setParameter('date2', $date2)
            ->orderBy('s.id', 'ASC')
            ->getQuery()
           ->getResult()
        ;
    }

    public function findBySommeSoldeDate($date): float
    {        
        $result = $this->createQueryBuilder('s')
            ->select('SUM(s.avance) as somme')
            ->andWhere('s.createtAt = :date')
            ->setParameter('date', $date)
            ->getQuery()
           ->getOneOrNullResult()
        ;
        return $result['somme'] ?? 0; 
    }

    public function findBySoldeDate($date): array
    {        
        return $this->createQueryBuilder('s')
            ->andWhere('s.createtAt = :date')
            ->setParameter('date', $date)
            ->getQuery()
           ->getResult()
        ;
    }
}
