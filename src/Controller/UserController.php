<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserPasswordType;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/utilisateur/profil', name: 'app_user_profile',methods: ['GET','POST'])]
    public function  index (){
        return $this->render('user/index.html.twig');
    }
    #[Route('/utilisateur/edition/{id}', name: 'app_user_edit',methods: ['GET','POST'])]
    public function edit(User $user, Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $hasher): Response
    {
        if (!$this->getUser()){
            return $this->redirectToRoute('login');
        }
        if ($this->getUser() !== $user){
            return $this->redirectToRoute('home.index');
        }
        $form= $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            if ($hasher->isPasswordValid($user,$form->getData()->getPlainPassword())){
                $user = $form->getData();
                $entityManager->persist($user);
                $entityManager->flush();

                $this->addFlash('success', 'Modification réussie !');

                return $this->redirectToRoute('home.index');
            } else {
                $this->addFlash('warning', 'Le mot de passe renseigné est incorrect.');
            }
        }
        return $this->render('user/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/utilisateur/edition-mot-de-passe/{id}', name: 'app_user_edit_password',methods: ['GET','POST'])]
    public function editPassword(User $user, Request $request, UserPasswordHasherInterface $hasher, EntityManagerInterface $entityManager) : Response
    {
        $form= $this->createForm(UserPasswordType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            if ($hasher->isPasswordValid($user,$form->getData()['plainPassword'])){
               $user->setPassword($hasher->hashPassword($user,$form->getData()['newPassword']));

                $this->addFlash('success', 'Modification du mot de passe réussi');
                $entityManager->persist($user);
                $entityManager->flush();
                return $this->redirectToRoute('home.index');
            } else {
                $this->addFlash('warning', 'Le mot de passe renseigné est incorrect ');
            }

        }
        return $this->render('user/editPassword.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
