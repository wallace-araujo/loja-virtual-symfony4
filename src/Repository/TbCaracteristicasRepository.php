<?php

namespace App\Repository;

use App\Entity\TbCaracteristicas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TbCaracteristicas|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbCaracteristicas|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbCaracteristicas[]    findAll()
 * @method TbCaracteristicas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbCaracteristicasRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TbCaracteristicas::class);
    }

    // /**
    //  * @return TbCaracteristicas[] Returns an array of TbCaracteristicas objects
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
    public function findOneBySomeField($value): ?TbCaracteristicas
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
