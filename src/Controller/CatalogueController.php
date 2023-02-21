<?php

namespace App\Controller;

use App\Repository\FilmRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{
    #[Route('/catalogue', name: 'app_catalogue')]
    public function index(FilmRepository $filmRepository): Response
    {
        return $this->render('catalogue/index.html.twig', [
            'films' => $filmRepository ->getFilm(),
        ]);
    }
}
