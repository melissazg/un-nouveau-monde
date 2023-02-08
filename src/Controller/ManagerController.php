<?php

namespace App\Controller;

use App\Repository\FilmRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManagerController extends AbstractController
{
    #[Route('/manager', name: 'app_manager', methods: ['GET'])]
    public function index(FilmRepository $repository, PaginatorInterface $paginator, Request $request): Response
    {
        $films = $paginator->paginate(
            $repository -> findAll(),
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('manager/index.html.twig', [
            'films' => $films
        ]);
    }
}
