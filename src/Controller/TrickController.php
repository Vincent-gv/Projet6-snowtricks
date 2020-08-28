<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Trick;
use App\Form\CommentType;
use App\Form\TrickType;
use App\Repository\CategoryRepository;
use App\Repository\CommentRepository;
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
     * Limit posts for pagination
     */
    const limitPost = 12;
    const limitComment = 2;

    /**
     * @Route("/", name="home", methods={"GET"})
     * @param TrickRepository $trickRepository
     * @param Request $request
     * @return Response
     */
    public function index(TrickRepository $trickRepository, Request $request): Response
    {
        $page = $request->query->get('page', 1);
        $tricks = $trickRepository->findAllPaginated($page, self::limitPost);

        $pagination = array(
            'page' => $page,
            'nbPages' => ceil(count($tricks) / self::limitPost),
            'routeName' => 'home',
            'slug' => null
        );

        return $this->render('pages/home.html.twig', [
            'tricks' => $tricks,
            'pagination' => $pagination
        ]);
    }

    /**
     * @Route("publish/new-trick", name="trick_new", methods={"GET","POST"})
     * @param TrickRepository $trickRepository
     * @param Request $request
     * @return Response
     */
    public function new(Request $request, TrickRepository $trickRepository): Response
    {

        $user = $this->getUser();
        $trick = new Trick();
        $form = $this->createForm(TrickType::class, $trick);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $trick->setCreatedAt(new DateTime());
            $trick->setUser($user);
//            $trick->setSlug($_POST['slug'] ?? null);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($trick);
            $entityManager->flush();
            $this->addFlash('success', 'Trick was successfully created !');

            return $this->redirectToRoute('home');
        }

        return $this->render('trick/new.html.twig', [
            'trick' => $trick,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{slug}", name="trick_show", methods={"GET","POST"})
     * @param Request $request
     * @param TrickRepository $trickRepository
     * @param CommentRepository $commentRepository
     * @param string $slug
     * @return Response
     */
    public function show(Request $request, TrickRepository $trickRepository, CommentRepository $commentRepository, string $slug): Response
    {
        $trick = $trickRepository->findOneBy(['slug' => $slug]);

        $page = $request->query->get('page', 1);
        $comments = $commentRepository->findAllPaginated($trick, $page, self::limitComment);

        $pagination = array(
            'page' => $page,
            'nbPages' => ceil(count($comments) / self::limitComment),
            'routeName' => 'trick_show',
            'slug' => $slug
        );
        $user = $this->getUser();
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setCreatedAt(new DateTime());
            $comment->setUser($user)
                ->setTrick($trick);
            dump($comment);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comment);
            $entityManager->flush();
            $this->addFlash('success', 'Comment was successfully published !');

            return $this->redirectToRoute('trick_show', [
                'slug' => $trick->getSlug()
            ]);
        }

        return $this->render('trick/show.html.twig', [
            'trick' => $trick,
            'comments' => $comments,
            'pagination' => $pagination,
            'form' => $form->createView()
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
        $form = $this->createForm(TrickType::class, $trick);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
//            $trick->setSlug('test');
            $trick->setUpdatedAt(new DateTime());
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Trick was successfully modified !');
            return $this->redirectToRoute('home');
        }

        return $this->render('trick/edit.html.twig', [
            'trick' => $trick,
            'form' => $form->createView()
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
        if ($this->isCsrfTokenValid('delete' . $trick->getId(), $request->request->get('_token'))) {
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
            'category' => $category
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
            'user' => $user
        ]);
    }
}
