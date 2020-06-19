<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    /**
     * @Route("/connection", name="securitySignIn")
     * @return Response
     */
    public function securitySignIn(): Response
    {
        return $this->render('pages/security-sign-in.html.twig');
    }

    /**
     * @Route("/suscribe", name="securitySignUp")
     * @return Response
     */
    public function securitySignUp(): Response
    {
        return $this->render('pages/security-sign-up.html.twig');
    }

    /**
     * @Route("/reset-password", name="securityResetPassword")
     * @return Response
     */
    public function securityResetPassword(): Response
    {
        return $this->render('pages/security-reset-password.html.twig');
    }
}