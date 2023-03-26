<?php

namespace App\Repository;

use App\Entity\Film;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class SearchRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Film::class);
    }

    public function getSearchResults(string $query): array
    {
        return $this->createQueryBuilder('f')
            ->where('f.name LIKE :query')
            ->setParameter('query', '%'.$query.'%')
            ->getQuery()
            ->getResult();
    }

    public function getFilm(): array
    {
        return $this->createQueryBuilder('film')
            ->getQuery()
            ->getArrayResult();
    }


}