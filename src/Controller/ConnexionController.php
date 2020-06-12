<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConnexionController extends AbstractController
{
    /**
     * @Route("/connexion", name="connexionSignIn")
     * @return Response
     */
    public function connexionSignIn(): Response
    {
        return $this->render('pages/connexion-sign-in.html.twig');
    }

    /**
     * @Route("/suscribe", name="connexionSignUp")
     * @return Response
     */
    public function connexionSignUp(): Response
    {
        return $this->render('pages/connexion-sign-up.html.twig');
    }

    /**
     * @Route("/reset-password", name="connexionResetPassword")
     * @return Response
     */
    public function connexionResetPassword(): Response
    {
        return $this->render('pages/connexion-reset-password.html.twig');
    }
}