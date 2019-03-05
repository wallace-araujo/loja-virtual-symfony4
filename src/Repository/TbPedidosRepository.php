<?php

namespace App\Repository;

use App\Entity\TbPedidos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TbPedidos|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbPedidos|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbPedidos[]    findAll()
 * @method TbPedidos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbPedidosRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TbPedidos::class);
    }

    // /**
    //  * @return TbPedidos[] Returns an array of TbPedidos objects
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
    public function findOneBySomeField($value): ?TbPedidos
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
