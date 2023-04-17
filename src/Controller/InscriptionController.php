<?php
namespace App\Controller;


use App\Entity\User;
use App\Form\FormHandler\InscriptionFormHandler;
use App\Form\InscriptionType;
use App\Repository\UserRepository;
use App\Security\AppAuthenticator;
use App\Service\SendMailService;
use App\Service\JWTService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security\UserAuthenticator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

class InscriptionController extends AbstractController{

    #[Route('/inscription', name:'inscription.index', methods: ['GET','POST'])]
    public function create(Request $request, InscriptionFormHandler $inscriptionFormHandler,UserPasswordHasherInterface $passwordHasher, UserAuthenticatorInterface $userAuthenticator, AppAuthenticator $authenticator,SendMailService $mail,JWTService $jwt) : Response {
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
            // On génère le JWT de l'utilisateur
            // On crée le Header
            $header = [
                'typ' => 'JWT',
                'alg' => 'HS256'
            ];

            // On crée le Payload
            $payload = [
                'user_id' => $user->getId()
            ];

            // On génère le token
            $token = $jwt->generate($header, $payload, $this->getParameter('app.jwtsecret'));

            // On envoie un mail
            $mail->send(
                'no-reply@monsite.net',
                $user->getEmail(),
                'Activation de votre compte sur le site e-commerce',
                'register',
                compact('user', 'token')
            );
            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
        }
        return $this->render('inscription.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/verif/{token}', name: 'verify_user')]
    public function verifyUser($token, JWTService $jwt, UserRepository $usersRepository, EntityManagerInterface $em): Response
    {
        //On vérifie si le token est valide, n'a pas expiré et n'a pas été modifié
        if($jwt->isValid($token) && !$jwt->isExpired($token) && $jwt->check($token, $this->getParameter('app.jwtsecret'))){
            // On récupère le payload
            $payload = $jwt->getPayload($token);

            // On récupère le user du token
            $user = $usersRepository->find($payload['user_id']);

            //On vérifie que l'utilisateur existe et n'a pas encore activé son compte
            if($user && !$user->getIsVerified()){
                $user->setIsVerified(true);
                $em->flush($user);
                $this->addFlash('success', 'Utilisateur activé');
                return $this->redirectToRoute('app_user_profile');
            }
        }
        // Ici un problème se pose dans le token
        $this->addFlash('danger', 'Le token est invalide ou a expiré');
        return $this->redirectToRoute('app_login');
    }

}