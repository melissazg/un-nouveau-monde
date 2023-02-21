<?php

namespace App\Repository;

use App\Entity\Film;
use http\Env\Request;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class SearchRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Film::class);
    }

    /**
    public function getSearchFilm(Request $request): array
    {
        return $this->createQueryBuilder('film')
            ->andWhere('film.name LIKE :search')
            ->setParameter('search' , $request)
            ->getQuery()
            ->getArrayResult();
    }
    */
}