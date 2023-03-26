<?php

namespace App\Controller;

use App\Form\SearchType;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\SearchRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    #[Route('/catalogue', name: 'app_catalogue')]
    public function index(SearchRepository $SearchRepository, Request $request ): Response
    {
        $form = $this->createForm(SearchType::class, null, [
            'action' => $this->generateUrl('app_catalogue'),
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

        return $this->render('catalogue/index.html.twig', [
            'form' => $form->createView(),
            'films' => $searchResults,
        ]);
    }
}