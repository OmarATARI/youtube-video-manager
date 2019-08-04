<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SignUpController extends AbstractController
{
    /**
     * @Route("/signup", name="sign_up")
     */
    public function index()
    {
        return $this->render('authentication/sign_up.html.twig', [
            'current_menu' => 'sign_up',
        ]);
    }
}
