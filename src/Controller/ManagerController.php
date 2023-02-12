<?php

namespace App\Controller;

use App\Entity\Film;
use App\Form\FilmType;
use App\Repository\FilmRepository;
use Doctrine\ORM\EntityManagerInterface;
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
            $repository->findAll(),
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('manager/index.html.twig', [
            'films' => $films
        ]);
    }

    #[Route('/manager/nouveau', 'film.new', methods: ['GET', 'POST'])]
    public function new(Request $request,
    EntityManagerInterface $manager
    ): Response
    {
        $film = new Film();
        $form = $this->createForm(FilmType::class, $film);

        $form -> handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $film = $form->getData();

            $manager -> persist($film);
            $manager -> flush();

            $this->addFlash(
                'success',
                'Le film a été ajouté !'
            );
        }
    return $this->render('manager/new.html.twig',[
        'form' => $form -> createView()
    ]);
    }
}
