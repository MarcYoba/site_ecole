<?php

namespace App\Repository;

use App\Entity\Inscription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Inscription>
 *
 * @method Inscription|null find($id, $lockMode = null, $lockVersion = null)
 * @method Inscription|null findOneBy(array $criteria, array $orderBy = null)
 * @method Inscription[]    findAll()
 * @method Inscription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InscriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Inscription::class);
    }

//    /**
//     * @return Inscription[] Returns an array of Inscription objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Inscription
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

    public function findBySemaine($date1,$date2): array
    {        
        return $this->createQueryBuilder('i')
            ->andWhere('i.createtAt BETWEEN :date1 AND :date2')
            ->setParameter('date1', $date1)
            ->setParameter('date2', $date2)
            ->orderBy('i.id', 'ASC')
            ->getQuery()
           ->getResult()
        ;
   }

   public function findBySommeInscriptionDate($date): float
    {        
        $result =  $this->createQueryBuilder('i')
            ->select('SUM(i.montant) as montant')
            ->andWhere('i.createtAt = :date')
            ->setParameter('date', $date)
            ->orderBy('i.id', 'ASC')
            ->getQuery()
           ->getOneOrNullResult()
        ;
        return $result['montant'] ?? 0;
   }

   public function findByInscriptionDate($date): array
    {        
        return $this->createQueryBuilder('i')
            ->andWhere('i.createtAt = :date')
            ->setParameter('date', $date)
            ->orderBy('i.id', 'ASC')
            ->getQuery()
           ->getResult()
        ;
   }
}
