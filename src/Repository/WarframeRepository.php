<?php

namespace App\Repository;

use App\Entity\Warframe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Warframe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Warframe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Warframe[]    findAll()
 * @method Warframe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WarframeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Warframe::class);
    }

    // /**
    //  * @return Warframe[] Returns an array of Warframe objects
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
    public function findOneBySomeField($value): ?Warframe
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
