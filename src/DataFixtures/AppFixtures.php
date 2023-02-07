<?php

namespace App\DataFixtures;

use App\Entity\Film;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        $film = new Film();

        $film ->setName($faker -> word());
        $film -> setGenre($faker -> word());
        $film -> setRealisateur($faker->name());
        $film -> setDescription($faker->text());
        $film -> setDate($faker -> dateTime);
        $film -> setDurée($faker->dateTime);
        $film -> setActeursPrincipaux($faker->text());
        $film -> setIframePath('https://mixdrp.to/e/qlxl7zn3fwjk64');


        $manager ->persist($film);
        $manager->flush();
    }
}
