<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SignInController extends AbstractController
{
    /**
     * @Route("/signin", name="sign_in")
     */
    public function index()
    {
        return $this->render('authentication/sign_up.html.twig', [
            'current_menu' => 'sign_in',
        ]);
    }
}
