<?php

namespace App\Controller;

use App\Repository\VideoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @param VideoRepository $videoRepository
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(VideoRepository $videoRepository)
    {

        $videos = $videoRepository->findAll();

        return $this->render('home.html.twig', [
            'current_menu' => 'home',
            'videos' => $videos,
        ]);
    }
}
