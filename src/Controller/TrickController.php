<?php

namespace App\Controller;

use App\Entity\Trick;
use App\Form\Trick1Type;
use App\Repository\CategoryRepository;
use App\Repository\TrickRepository;
use App\Repository\UserRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TrickController extends AbstractController
{
    /**
     * @Route("/", name="home", methods={"GET"})
     * @param TrickRepository $trickRepository
     * @return Response
     */
    public function index(TrickRepository $trickRepository): Response
    {
        return $this->render('pages/home.html.twig', [
            'tricks' => $trickRepository->findAll(),
        ]);
    }

    /**
     * @Route("publish/new-trick", name="trick_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $trick = new Trick();
        $form = $this->createForm(Trick1Type::class, $trick);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $trick->setCreatedAt(new DateTime());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($trick);
            $entityManager->flush();
            $this->addFlash('success', 'Trick was successfully created !');

            return $this->redirectToRoute('home');
        }

        return $this->render('trick/new.html.twig', [
            'trick' => $trick,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{slug}", name="trick_show", methods={"GET"})
     * @param TrickRepository $trickRepository
     * @param string $slug
     * @return Response
     */
    public function show(TrickRepository $trickRepository, string $slug): Response
    {
        $trick = $trickRepository->findOneBy(['slug' => $slug]);
        return $this->render('trick/show.html.twig', [
            'trick' => $trick,
        ]);
    }

    /**
     * @Route("/edit/trick-{id}", name="trick_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Trick $trick
     * @return Response
     */
    public function edit(Request $request, Trick $trick): Response
    {
        $form = $this->createForm(Trick1Type::class, $trick);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $trick->setUpdatedAt(new DateTime());
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Trick was successfully modified !');
            return $this->redirectToRoute('home');
        }

        return $this->render('trick/edit.html.twig', [
            'trick' => $trick,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="trick_delete", methods={"DELETE"})
     * @param Request $request
     * @param Trick $trick
     * @return Response
     */
    public function delete(Request $request, Trick $trick): Response
    {
        if ($this->isCsrfTokenValid('delete'.$trick->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($trick);
            $entityManager->flush();
            $this->addFlash('success', 'Trick was successfully deleted !');
        }

        return $this->redirectToRoute('home');
    }

    /**
     * @Route("/category/{categoryId}", name="trick_category", methods={"GET"})
     * @param TrickRepository $trickRepository
     * @param CategoryRepository $CategoryRepository
     * @param string $categoryId
     * @return Response
     */
    public function category(TrickRepository $trickRepository, CategoryRepository $CategoryRepository, string $categoryId): Response
    {
        $trick = $trickRepository->findBy(['category' => $categoryId]);
        $category = $CategoryRepository->find(['id' => $categoryId]);

        return $this->render('trick/category.html.twig', [
            'tricks' => $trick,
            'category' => $category,
        ]);
    }

    /**
     * @Route("/user/{userId}", name="trick_user", methods={"GET"})
     * @param TrickRepository $trickRepository
     * @param UserRepository $UserRepository
     * @param string $userId
     * @return Response
     */
    public function user(TrickRepository $trickRepository, UserRepository $UserRepository, string $userId): Response
    {
        $trick = $trickRepository->findBy(['user' => $userId]);
        $user = $UserRepository->find(['id' => $userId]);

        return $this->render('trick/user.html.twig', [
            'tricks' => $trick,
            'user' => $user,
        ]);
    }
}
