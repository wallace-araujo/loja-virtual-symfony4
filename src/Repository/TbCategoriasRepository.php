<?php

namespace App\Repository;

use App\Entity\TbCategorias;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TbCategorias|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbCategorias|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbCategorias[]    findAll()
 * @method TbCategorias[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbCategoriasRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TbCategorias::class);
    }

    // /**
    //  * @return TbCategorias[] Returns an array of TbCategorias objects
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
    public function findOneBySomeField($value): ?TbCategorias
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
