<?php

namespace App\Repository;

use App\Entity\BlueSky;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BlueSky|null find($id, $lockMode = null, $lockVersion = null)
 * @method BlueSky|null findOneBy(array $criteria, array $orderBy = null)
 * @method BlueSky[]    findAll()
 * @method BlueSky[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlueSkyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BlueSky::class);
    }

    // /**
    //  * @return BlueSky[] Returns an array of BlueSky objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BlueSky
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
