<?php

namespace App\Controller;

use App\Repository\FilmRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends CatalogueController
{
    #[Route('/catalogue', name: 'app_catalogue')]
    public function index(FilmRepository $filmRepository): Response
    {
        return $this->render('catalogue/index.html.twig', [
            'film' => $filmRepository ->getFilm(),
        ]);
    }
}
