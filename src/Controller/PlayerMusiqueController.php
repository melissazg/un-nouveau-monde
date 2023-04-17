<?php

namespace App\Controller;


use App\Entity\Musique;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlayerMusiqueController extends AbstractController
{
    public function __construct(public EntityManagerInterface $entityManager)
    {
    }
    #[Route('/player_musique/{id}', name: 'app_player_musique', methods: ['GET', 'POST'])]
    public function index(Musique $musique,UserRepository $userRepository, Request $request): Response
    {
        # appel de l'utilisateur connecté
        $mail = $this->getUser()->getUserIdentifier();

        # récupération de l'entité user
        $user = $userRepository -> findOneBy(["email" => $mail]);

        return $this->render('player_musique/index.html.twig', [
            'title' => $musique->getName(),
            'musiques' => $musique,
            'iframePath' => $musique->getIframePath(),
        ]);
    }
}
