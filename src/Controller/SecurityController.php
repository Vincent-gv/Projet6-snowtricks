<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ResetPasswordType;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

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
     * @Route("/sign-up", name="sign-up")
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @return Response
     */
    public function securitySignUp(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $user->getPassword();
            $encoded = $encoder->encodePassword($user, $plainPassword);
            $user->setPassword($encoded);
            $user = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            $this->addFlash('success', 'New user successfully created !');
            return $this->redirectToRoute('home');
        }
        return $this->render('security/security-sign-up.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/recover-password", name="recover-password")
     * @param Request $request
     * @param UserRepository $userRepository
     * @param \Swift_Mailer $mailer
     * @return Response
     */
    public function securityForgotPassword(Request $request, UserRepository $userRepository, \Swift_Mailer $mailer): Response
    {
        if ($request->isMethod('post')) {

            $user = $userRepository->findOneBy(['email' => $request->get('email')]);

            if ($user === null) {
                $this->addFlash('danger', 'Incorrect email');
                return $this->render('security/security-recover-password.html.twig');
            }
            $user->setToken($this->generateToken())
                ->setTokenCreatedAt(new \DateTime());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            $message = (new \Swift_Message('Password reset'))
                ->setFrom('contact@snowtricks.com')
                ->setTo($user->getEmail())
                ->setBody(
                    $this->renderView('emails/forgotPassword.html.twig', [
                        'user' => $user
                    ]),
                    'text/html'
                );

            $mailer->send($message);

            $this->addFlash('success', 'An email has been sent to reset your password');
        }
        return $this->render('security/security-recover-password.html.twig');
    }

    /**
     * @Route("/reset-password", name="reset-password")
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @param UserRepository $userRepository
     * @param Session $session
     * @return Response
     */
    public function resetPassword(Request $request, UserPasswordEncoderInterface $encoder, UserRepository $userRepository, Session $session)
    {
        if ($request->get('id') && $request->get('token')) {
            $user = $userRepository->find($request->get('id'));
            if (
                $user->getTokenCreatedAt() === null ||
                ($user->getTokenCreatedAt() !== null && $user->getToken() !== $request->get('token') && $user->getTokenCreatedAt()->diff(new \DateTime(), true)->days >= 2)
            ) {
                $this->addFlash('danger', 'The security token is not valid');

                return $this->render('security/security-recover-password.html.twig');
            }
            $session->set('forgotPasswordUserId', $user->getId());
        }

        if ($this->getUser()) {
            $user = $this->getUser();
        } elseif ($session->get('forgotPasswordUserId')) {
            $user = $userRepository->find($session->get('forgotPasswordUserId'));
        } else {
            return $this->redirectToRoute('recover-password');
        }

        $form = $this->createForm(ResetPasswordType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword($encoder->encodePassword($user, $user->getPassword()));
            $user->setToken(null);
            $user->setTokenCreatedAt( null);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            $session->remove('forgotPasswordUserId');
            $this->addFlash('success', 'Your account password has been updated');
            if (!$this->getUser()) {
                return $this->redirectToRoute('sign-in');
            }
        }
        return $this->render('security/security-reset-password.html.twig',[
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/login", name="sign-in")
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('security/security-sign-in.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        $this->addFlash('success', 'You have been successfully logged out');
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    public function generateToken()
    {
        return rtrim(strtr(base64_encode(random_bytes(32)), '+/','-_'), '=');
    }
}
