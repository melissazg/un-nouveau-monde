<?php
namespace App\Controller;


use App\Entity\User;
use App\Form\FormHandler\InscriptionFormHandler;
use App\Form\InscriptionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
class InscriptionController extends AbstractController{

    #[Route('/inscription', name:'inscription.index', methods: ['GET','POST'])]
    public function create(Request $request, InscriptionFormHandler $inscriptionFormHandler,UserPasswordHasherInterface $passwordHasher) : Response {
        $user = new User();
        $user->setRoles(['ROLE_USER']);

        $form = $this->createForm(InscriptionType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $hashedPassword = $passwordHasher->hashPassword(
                $user,
                $user->getPlainPassword()
            );
            $user->setPassword($hashedPassword);

            $this->addFlash('success', 'Votre compte a bien été créé');

            $inscriptionFormHandler ->handleForm($user);
            return $this->redirectToRoute('app_pre_login');
        }
        return $this->render('inscription.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}