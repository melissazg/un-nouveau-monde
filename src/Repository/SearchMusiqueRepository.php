<?php

namespace App\Repository;

use App\Entity\Musique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class SearchMusiqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Musique::class);
    }

    public function getSearchResults(string $query): array
    {
        return $this->createQueryBuilder('musique')
            ->where('musique.name LIKE :query')
            ->setParameter('query', '%'.$query.'%')
            ->getQuery()
            ->getResult();
    }

    public function getFilm(): array
    {
        return $this->createQueryBuilder('musique')
            ->getQuery()
            ->getArrayResult();
    }


}