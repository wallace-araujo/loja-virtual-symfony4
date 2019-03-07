<?php

namespace App\Repository;

use App\Entity\Tbprodutoorder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Tbprodutoorder|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tbprodutoorder|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tbprodutoorder[]    findAll()
 * @method Tbprodutoorder[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbprodutoorderRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Tbprodutoorder::class);
    }

    // /**
    //  * @return Tbprodutoorder[] Returns an array of Tbprodutoorder objects
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
    public function findOneBySomeField($value): ?Tbprodutoorder
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
