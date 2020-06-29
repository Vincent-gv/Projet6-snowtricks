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
     * @Route("/", name="home")
     * @return Response
     */

    public function index(): Response
    {
        $tricks = $this->repository->findAll();

        return $this->render('pages/home.html.twig', [
            'tricks' => $tricks
        ]);
    }

    /**
     * @Route("/trick", name="trick")
     * @return Response
     */
    public function post(): Response
    {
        $postId = $_GET['id'] ?? '1';
        $trick = $this->repository->find($postId);
        return $this->render('pages/trick.html.twig', [
            'trick' => $trick
        ]);
    }
}
