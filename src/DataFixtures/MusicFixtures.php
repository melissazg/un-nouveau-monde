<?php

namespace App\DataFixtures;

use App\Entity\Musique;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
class MusicFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');


        for ($i = 0; $i < 4; $i++){
            $film = new Musique();
            $film -> setName($faker -> word());
            $film -> setGenre($faker -> word());
            $film -> setRealisateur($faker->name());
            $film -> setDescription($faker->text());
            $film -> setDate($faker -> dateTime);
            $film -> setDuree($faker->dateTime);
            $film -> setActeursPrincipaux($faker->text());
            $film -> setImagePath('https://i.ibb.co/09prxKV/index1.jpg');
            $film -> setIframePath('https://mixdrp.to/e/qlxl7zn3fwjk64');
            $film -> setInitNbNotes(0);
            $film -> setInitNotes(0);

            $manager ->persist($film);
        }

        $manager->flush();
    }
}
