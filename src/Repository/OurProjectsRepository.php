<?php

namespace App\Repository;

use App\Entity\OurProjects;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OurProjects>
 *
 * @method OurProjects|null find($id, $lockMode = null, $lockVersion = null)
 * @method OurProjects|null findOneBy(array $criteria, array $orderBy = null)
 * @method OurProjects[]    findAll()
 * @method OurProjects[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OurProjectsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OurProjects::class);
    }

    //    /**
    //     * @return OurProjects[] Returns an array of OurProjects objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('o')
    //            ->andWhere('o.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('o.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?OurProjects
    //    {
    //        return $this->createQueryBuilder('o')
    //            ->andWhere('o.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
