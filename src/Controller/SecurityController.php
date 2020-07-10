<?php


namespace App\Controller;


use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @var UserRepository
     */
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/sign-in", name="sign-in")
     * @return Response
     */
    public function securitySignIn(): Response
    {
        return $this->render('pages/security-sign-in.html.twig');
    }

    /**
     * @Route("/sign-up", name="sign-up")
     * @param Request $request
     * @return Response
     */
    public function securitySignUp(Request $request
//        , UserPasswordEncoderInterface $encoder
    ): Response
    {
        $form = $this->createForm(UserType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // TODO: password hash
//            $hash = $encoder->encodePassword($user, $user->getPassword());
//            $user->setPassword($hash);
            $user = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            $this->addFlash('success', 'New user successfully created !');
            return  $this->redirectToRoute('home');
        }
        return $this->render('pages/security-sign-up.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/reset-password", name="reset-password")
     * @return Response
     */
    public function securityResetPassword(): Response
    {
        return $this->render('pages/security-reset-password.html.twig');
    }
}