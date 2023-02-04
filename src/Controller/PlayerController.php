<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\FilmRepository;

class PlayerController extends AbstractController
{
    #[Route('/player/{title}', name: 'app_player')]
    public function index(string $title, FilmRepository $filmRepository): Response
    {

        return $this->render('player/index.html.twig', [
            'title' => $title,
            'film' => $filmRepository -> getIframeByName($title)
        ]);
    }
}
