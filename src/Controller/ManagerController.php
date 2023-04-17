<?php

namespace App\Controller;

use App\Entity\Film;
use App\Form\FilmType;
use App\Repository\FilmRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class ManagerController extends AbstractController
{
    #[Route('/manager', name: 'app_manager', methods: ['GET'])]
    #[IsGranted('ROLE_ADMIN')]
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
    #[IsGranted('ROLE_ADMIN')]
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

    #[Route('/manager/edition/{id}', 'film.edit', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function edit(Film $film, Request $request, EntityManagerInterface $manager) : Response{
        $form = $this->createForm(FilmType::class, $film);

        $form -> handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $film = $form->getData();

            $manager -> persist($film);
            $manager -> flush();

            $this->addFlash(
                'success',
                'Le film a été modifié !'
            );
        }

        return $this->render('manager/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/manager/supprimer/{id}', 'film.delete', methods: ['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function delete(EntityManagerInterface $manager, Film $film) : Response {
        if (!$film) {
            $this->addFlash(
                'success',
                'Le film en question est introuvable'
            );
            return $this->redirectToRoute('app_manager');
        }

        $manager->remove($film);
        $manager->flush();

        $this->addFlash(
            'success',
            'Le film a été supprimé !'
        );

        return $this->redirectToRoute('app_manager');
    }

}
