<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{
    #[Route('/catalogue', name: 'app_catalogue')]
    public function index(): Response
    {
        return $this->render('catalogue/index.html.twig', [
            'controller_name' => 'CatalogueController',
        ]);
    }

    public static function getModel()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getFilm()
    {
        $req = $this->bd->prepare('SELECT * FROM film');
        $req->execute();
        return $req->fetchall();
    }

    public function action_last()
    {
        $m = Model::getModel();
        $data = [
            "liste" => $m->getFilm(),
        ];
        $this->render('catalogue/index.html.twig', $data);
    }
}
