<?php

namespace App\Repository;

use App\Entity\Toptag;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Toptag|null find($id, $lockMode = null, $lockVersion = null)
 * @method Toptag|null findOneBy(array $criteria, array $orderBy = null)
 * @method Toptag[]    findAll()
 * @method Toptag[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ToptagRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Toptag::class);
    }

    // /**
    //  * @return Toptag[] Returns an array of Toptag objects
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
    public function findOneBySomeField($value): ?Toptag
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
