<?php


namespace App\Controller;


use App\Repository\CommentRepository;
use PhpParser\Node\Expr\Array_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @var CommentRepository
     */
    private $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }




    public function findComments()
    {
        return $this->commentRepository->findAll();
//
//        return $this->render('pages/_comments.html.twig', [
//            'comments' => $comments
//        ]);
    }
}