<?php

namespace App\Repository;

use App\Entity\ClientsLivraison;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ClientsLivraison|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientsLivraison|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientsLivraison[]    findAll()
 * @method ClientsLivraison[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientsLivraisonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClientsLivraison::class);
    }

    // /**
    //  * @return ClientsLivraison[] Returns an array of ClientsLivraison objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ClientsLivraison
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
