<?php

namespace App\Repository;

use App\Entity\TbEndereco;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TbEndereco|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbEndereco|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbEndereco[]    findAll()
 * @method TbEndereco[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbEnderecoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TbEndereco::class);
    }

    // /**
    //  * @return TbEndereco[] Returns an array of TbEndereco objects
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
    public function findOneBySomeField($value): ?TbEndereco
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
