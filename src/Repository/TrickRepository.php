<?php

namespace App\Repository;

use App\Entity\Trick;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
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

    public function newTrick()
    {
        $formTrick = new Trick();
        $formTrick->setTitle($_POST['title'] ?? null);
        $formTrick->setCategory($_POST['category'] ?? null);
        $formTrick->setContent($_POST['content'] ?? null);
        $formTrick->setCreatedAt($_POST['title'] ?? null);
        $formTrick->setUpdatedAt(null);
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            if (empty($formTrick->getTitle())) {
                $errors['title'][] = 'Indiquer un titre';
            }
            if (strlen($formTrick->getTitle()) < 3) {
                $errors['title'][] = 'Le titre doit faire 3 caractères ou plus';
            }
            if (empty($formTrick->getCategory())) {
                $errors['chapo'][] = 'Remplissez le chapô';
            }
            if (strlen($formTrick->getCategory()) < 3) {
                $errors['chapo'][] = 'Le chapô doit faire 3 caractères ou plus';
            }
            if (empty($formTrick->getContent())) {
                $errors['content'][] = 'Le contenu de l\'article ne peut pas être vide';
            }
            if (strlen($formTrick->getContent()) < 3) {
                $errors['content'][] = 'Le contenu doit faire 3 caractères ou plus';
            }
            if (empty($errors)) {
                usleep(500000);
                $postRepository->createPost($formTrick);
                FlashBag::addFlash('Nouveau post publié sur le blog.', 'success');
                $this->redirect('./blog');
            }
        }
    }


    // /**
    //  * @return Trick[] Returns an array of Trick objects
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
    public function findOneBySomeField($value): ?Trick
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
