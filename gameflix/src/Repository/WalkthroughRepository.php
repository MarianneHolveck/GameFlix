<?php

namespace App\Repository;

use App\Entity\Walkthrough;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Walkthrough|null find($id, $lockMode = null, $lockVersion = null)
 * @method Walkthrough|null findOneBy(array $criteria, array $orderBy = null)
 * @method Walkthrough[]    findAll()
 * @method Walkthrough[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WalkthroughRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Walkthrough::class);
    }

    // /**
    //  * @return Walkthrough[] Returns an array of Walkthrough objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Walkthrough
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
