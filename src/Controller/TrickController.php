<?php


namespace App\Controller;


use App\Repository\TrickRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrickController extends AbstractController
{
    /**
     * @var TrickRepository
     */
    private $repository;

    public function __construct(TrickRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/trick", name="trick")
     * @return Response
     */
    public function post(): Response
    {
        $trick = $this->repository->find(1);
        $commentsRepository = $this->forward(CommentController::class)->;
        $comments = $commentsRepository->
        return $this->render('pages/trick.html.twig', [
            'trick' => $trick,
            'comments' => $comments
    ]);
    }

    /**
     * @Route("/publish", name="publish")
     * @return Response
     */
    public function edit(): Response
    {
        return $this->render('pages/trick-new.html.twig');
    }

    /**
     * @Route("/update", name="update")
     * @return Response
     */
    public function modify(): Response
    {
        return $this->render('pages/trick-update.html.twig');
    }


}