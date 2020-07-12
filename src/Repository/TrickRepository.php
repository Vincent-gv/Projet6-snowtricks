<?php

namespace App\Repository;

use App\Entity\Trick;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

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
     * @param $page
     * @param $limit
     * @return Paginator
     */
    public function paginate(int $page, int $limit){
        if (!is_numeric($page)) {
            throw new \InvalidArgumentException(
                'Incorrect page value'
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

    /**
     * @return integer - Number of tricks
     */
    public function totalTricks() {
        //  Query how many rows are there in the Trick table
        try {
            $query = $this->createQueryBuilder('t')
                ->select('count(t.id)')
                ->getQuery()
                ->getSingleScalarResult();
        } catch (NoResultException $e) {
        } catch (NonUniqueResultException $e) {
        }

        return $query;
    }
}
