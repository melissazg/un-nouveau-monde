<?php

namespace App\Controller;

use App\Form\SearchType;
use App\Repository\SearchRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function search(Request $request, SearchRepository $SearchRepository)
    {
        $form = $this->createForm(SearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $query = $form->getData()['query'];

            $search = $SearchRepository->getSearchResults($query);

            return $this->render('search/results.html.twig', [
                'query' => $query,
                'films' => $search
            ]);
        }

        return $this->render('search/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
