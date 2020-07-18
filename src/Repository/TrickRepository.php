<?php

namespace App\Repository;

use App\Entity\Trick;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Trick|null find($id, $lockMode = null, $lockVersion = null)
 * @method Trick|null findOneBy(array $criteria, array $orderBy = null)
 * @method Trick[]    findAll()
 * @method Trick[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrickRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Trick::class);
    }

    /**
     * @param int $page
     * @param int $limit
     * @return Paginator
     */
    public function findAllPaginated(int $page, int $limit): Paginator
    {
        if (!is_numeric($page)) {
            throw new \InvalidArgumentException(
                'Incorrect page number'
            );
        }
        if (!is_numeric($limit)) {
            throw new \InvalidArgumentException(
                'Incorrect limit value'
            );
        }
        $query = $this->createQueryBuilder('t')
            ->addOrderBy('t.id', 'DESC')
            ->getQuery()
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit);

        return new Paginator($query);
    }
}
