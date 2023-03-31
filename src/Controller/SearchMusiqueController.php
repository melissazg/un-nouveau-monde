<?php

namespace App\Controller;

use App\Form\SearchMusiqueType;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\SearchMusiqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchMusiqueController extends AbstractController
{
    #[Route('/catalogue_musique', name: 'app_catalogue_musique')]
    public function index(SearchMusiqueRepository $SearchRepository, Request $request ): Response
    {
        $form = $this->createForm(SearchMusiqueType::class, null, [
            'action' => $this->generateUrl('app_catalogue_musique'),
            'method' => 'GET'
        ]);
        $form->handleRequest($request);

        $searchResults = [];

        if ($form->isSubmitted() && $form->isValid()) {
            $query = $form->getData()['query'];

            $searchResults = $SearchRepository->getSearchResults($query);
        }
        else{
            $searchResults = $SearchRepository->getFilm();
        }

        return $this->render('catalogue_musique/index.html.twig', [
            'form' => $form->createView(),
            'musiques' => $searchResults,
        ]);
    }
}