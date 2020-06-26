<?php

namespace App\Repository;

use App\Entity\ImageTrick;
use App\Entity\Trick;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ImageTrick|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImageTrick|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImageTrick[]    findAll()
 * @method ImageTrick[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageTrickRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImageTrick::class);
    }

    /**
     * @return ImageTrick[]
     */
    public function findImageTrick($id)
    {
        return $this->findVisibleQuery()
            ->orderBy('i.id', 'DESC')
            ->where('i.trick_id = :val')
            ->setParameter('val', $id)
            ->setMaxResults(5)
            ->getQuery()
            ->getResult()
            ;
    }

    // /**
    //  * @return ImageTrick[] Returns an array of ImageTrick objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ImageTrick
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
