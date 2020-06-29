<?php


namespace App\Controller\Admin;


use App\Entity\Trick;
use App\Form\TrickType;
use App\Repository\TrickRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminTrickController extends AbstractController
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
     * @Route("/admin", name="admin.trick")
     * @return Response
     */
    public function index(): Response
    {
        $tricks = $this->repository->findAll();
        return $this->render('admin/admin-trick.html.twig', compact('tricks'));
    }

    /**
     * @Route("/publish", name="new.trick")
     * @return Response
     */
    public function newTrick(): Response
    {
        $form = $this->createForm(TrickType::class);

        return $this->render('admin/admin-new-trick.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
