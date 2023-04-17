<?php

namespace App\Controller;

use App\Form\FilterType;
use App\Form\SearchType;
use App\Repository\FilmRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\SearchRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    #[Route('/catalogue', name: 'app_catalogue',methods: ['GET','POST'])]
    public function index(SearchRepository $SearchRepository, Request $request, FilmRepository $filmRepository ): Response
    {
        $searchForm = $this->createForm(SearchType::class, null, [
            'action' => $this->generateUrl('app_catalogue'),
            'method' => 'GET'
        ]);
        $searchForm->handleRequest($request);
        $filterForm = $this->createForm(FilterType::class);
        $filterForm->handleRequest($request);

        $searchResults = [];

        if ($searchForm->isSubmitted() && $searchForm->isValid()) {
            $query = $searchForm->getData()['query'];
            $searchResults = $SearchRepository->getSearchResults($query);
        } elseif ($filterForm->isSubmitted() && $filterForm->isValid()) {
            $data = $filterForm->getData();
            $searchResults = $filmRepository->findByFilters($data);
        } else{
            $searchResults = $SearchRepository->getFilm();
        }
        return $this->render('catalogue/index.html.twig', [
            'searchForm' => $searchForm->createView(),
            'filterForm' => $filterForm->createView(),
            'films' => $searchResults,
        ]);
    }
}