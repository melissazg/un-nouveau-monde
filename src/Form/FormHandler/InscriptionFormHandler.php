<?php

namespace App\Form\FormHandler;

use App\Entity\Client;
use Doctrine\ORM\EntityManagerInterface;

final class InscriptionFormHandler
{
    public function __construct(
        public EntityManagerInterface $entityManager
    ) {}
    public function handleForm(Client $client): void
    {
        $this->entityManager->persist($client);
        $this->entityManager->flush();
    }
}