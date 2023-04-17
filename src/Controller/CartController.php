<?php

namespace App\Controller;

use App\Entity\Film;
use App\Repository\FilmRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    /**
     * Panier contenant les projections de films
     * @param SessionInterface $session
     * @param FilmRepository $filmRepository
     * @return Response
     */
    #[Route('/cart', name: 'app_cart')]
    public function index(SessionInterface $session, FilmRepository $filmRepository): Response
    {
        $panier = $session -> get("panier", []);
        $dataPanier = [];
        $total = 0;
        foreach($panier as $id => $quantite){
            $film = $filmRepository->find($id);
            if ($film) {
                $dataPanier[] = [
                    "film" => $film,
                    "quantite" => $quantite
                ];
                $total += $film->getPrix() * $quantite;
            }
        }
        return $this->render('cart/index.html.twig', [
            'dataPanier' => $dataPanier,
            'total' => $total
        ]);
    }

    /**
     * L'ajout d'un film dans le panier
     * @param Film $film
     * @param SessionInterface $session
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[Route('/add/{id}', name: 'cart_add')]
    public function add(Film $film, SessionInterface $session){
        $panier = $session-> get("panier", []);
        $id = $film -> getId();
        if(!empty($panier[$id])){
            $panier[$id]++;
        } else{
            $panier[$id] = 1;
        }
        $session->set("panier", $panier);
        return $this->redirectToRoute("app_cart");
    }

    /**
     * La suppression d'un film dans le panier
     * @param Film $film
     * @param SessionInterface $session
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[Route('/remove/{id}', name: 'cart_remove')]
    public function remove(Film $film, SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get("panier", []);
        $id = $film->getId();
        if(!empty($panier[$id])){
            if($panier[$id] > 1){
                $panier[$id]--;
            }else{
                unset($panier[$id]);
            }
        }

        // On sauvegarde dans la session
        $session->set("panier", $panier);
        return $this->redirectToRoute("app_cart");
    }

    /**
     * Suppression du panier
     * @param Film $film
     * @param SessionInterface $session
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[Route('/delete/{id}', name: 'cart_delete')]
    public function delete(Film $film, SessionInterface $session)
    {
        $panier = $session->get("panier", []);
        $id = $film->getId();
        if(!empty($panier[$id])){
            unset($panier[$id]);
        }
        $session->set("panier", $panier);
        return $this->redirectToRoute("app_cart");
    }

    #[Route('/delete', name: 'cart_deleteAll')]
    public function deleteAll(SessionInterface $session)
    {
        $session->remove("panier");
        return $this->redirectToRoute("app_cart");
    }

}
