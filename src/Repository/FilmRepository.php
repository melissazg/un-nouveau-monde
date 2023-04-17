<?php

namespace App\Repository;

use App\Entity\Film;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Film>
 *
 * @method Film|null find($id, $lockMode = null, $lockVersion = null)
 * @method Film|null findOneBy(array $criteria, array $orderBy = null)
 * @method Film[]    findAll()
 * @method Film[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FilmRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Film::class);
    }

    /**
     * @param Film $entity
     * @param bool $flush
     * @return void
     */
    public function save(Film $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @param Film $entity
     * @param bool $flush
     * @return void
     */
    public function remove(Film $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @param $title
     * @return float|int|mixed|string|null
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getIframeByName($title){
        return $this->createQueryBuilder('f')
            ->andWhere('f.name =:title')
            ->setParameter('title', $title)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }

    /**
     * La méthode findByFilters retourne un tableau de films en fonction des données d'entrée.
     * @param array $data
     * @return array
     */
    public function findByFilters(array $data): array
    {
        $qb = $this->createQueryBuilder('f');

        if (!empty($data['realisateur'])) {
            $qb->andWhere('f.realisateur = :realisateur')
                ->setParameter('realisateur', $data['realisateur']);
        }

        if (!empty($data['date'])) {
            $qb->andWhere('f.date = :date')
                ->setParameter('date', $data['date']);
        }

        if (!empty($data['genre'])) {
            $qb->andWhere('f.genre = :genre')
                ->setParameter('genre', $data['genre']);
        }

        return $qb->getQuery()->getResult();
    }



//    /**
//     * @return Film[] Returns an array of Film objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Film
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
