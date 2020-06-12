<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/post", name="post")
     * @return Response
     */
    public function post(): Response
    {
        return $this->render('pages/post.html.twig');
    }

    /**
     * @Route("/publish", name="publish")
     * @return Response
     */
    public function edit(): Response
    {
        return $this->render('pages/post-new.html.twig');
    }

    /**
     * @Route("/update", name="update")
     * @return Response
     */
    public function modify(): Response
    {
        return $this->render('pages/post-update.html.twig');
    }


}