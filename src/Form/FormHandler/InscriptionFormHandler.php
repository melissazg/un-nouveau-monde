<?php

namespace App\Form\FormHandler;

use App\Entity\Client;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

final class InscriptionFormHandler
{
    public function __construct(
        public EntityManagerInterface $entityManager
    ) {}
    public function handleForm(User $user): void
    {
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }
}