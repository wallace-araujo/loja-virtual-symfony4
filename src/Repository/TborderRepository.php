<?php

namespace App\Repository;

use App\Entity\Tborder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Tborder|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tborder|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tborder[]    findAll()
 * @method Tborder[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TborderRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Tborder::class);
    }

    // /**
    //  * @return Tborder[] Returns an array of Tborder objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tborder
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
