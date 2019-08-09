<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SignInType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SignInController extends AbstractController
{
    /**
     * @Route("/signin", name="sign_in")
     * @param AuthenticationUtils $authenticationUtils
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function index(AuthenticationUtils $authenticationUtils)
    {
        $user = new User();
        $form = $this->createForm(SignInType::class, $user);

        return $this->render('authentication/sign_in.html.twig', [
            'current_menu' => 'sign_in',
            'error' => $authenticationUtils->getLastAuthenticationError(),
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/signout", name="sign_out")
     * @param AuthenticationUtils $authenticationUtils
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function signout(AuthenticationUtils $authenticationUtils)
    {

        return $this->render('home.html.twig', [
            'current_menu' => 'home'
        ]);
    }
}
