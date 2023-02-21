<?php

namespace App\Controller;

use App\Repository\SearchRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

class SearchController extends AbstractController
{
    /**
    #[Route('/catalogue', name: 'app_catalogue')]
    public function index(SearchRepository $filmRepository, Request $request): Response
    {
        return $this->render('catalogue/index.html.twig', [
            'films' => $filmRepository->getSearchFilm($request),
        ]);
    }
     */
}