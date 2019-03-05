<?php

namespace App\Repository;

use App\Entity\TbProdutos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TbProdutos|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbProdutos|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbProdutos[]    findAll()
 * @method TbProdutos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbProdutosRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TbProdutos::class);
    }

    // /**
    //  * @return TbProdutos[] Returns an array of TbProdutos objects
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
    public function findOneBySomeField($value): ?TbProdutos
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
