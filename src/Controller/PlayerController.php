<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Film;
use App\Form\CommentType;
use App\Repository\CommentaireRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\FilmRepository;

class PlayerController extends AbstractController
{
    public function __construct(public EntityManagerInterface $entityManager)
    {
    }
    #[Route('/utilisateur/player/{id}', name: 'app_player', methods: ['GET', 'POST'])]
    public function index(Film $film,CommentaireRepository $commentaireRepository, UserRepository $userRepository, Request $request): Response
    {

        # appel de l'utilisateur connecté
        $mail = $this->getUser()->getUserIdentifier();

        # récupération de l'entité user
        $user = $userRepository -> findOneBy(["email" => $mail]);

        $comment = new Commentaire();

        $comment->setUser($user);
        $comment->setFilm($film);

        #
        $form = $this->createForm(CommentType::class, $comment);

        # le formulaire saisit la requête
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $content = $form->get('content')->getData();
            $note = $form->get('note')->getData();

            # gestion des données reçues
            $comment->setContent($content);
            $comment->setNote($note);
            $film->addNote($note);
            $this->entityManager->persist($comment);
            $this->entityManager->persist($film);
            $this->entityManager->flush();

        }

        #calcul de la note moyenne
        $note=null;
        $nbNote=$film->getNbNotes();
        if($nbNote>0) {
            $note = round($film->getNotes() / $nbNote);
        }

        return $this->render('player/index.html.twig', [
            'title' => $film->getName(),
            'film' => $film,
            'iframePath' => $film->getIframePath(),
            'form' => $form->createView(),
            'comments'=>$commentaireRepository->findBy(['film'=>$film]),
            'averageRating'=>$note
        ]);
    }
}
