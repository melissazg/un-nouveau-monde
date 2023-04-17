<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UsersFixtures extends Fixture
{
    public function __construct(
    private UserPasswordHasherInterface $passwordEncoder)
{
}
    public function load(ObjectManager $manager): void
    {
        $admin = new User();
        $admin->setFirstName('Nicolas')
            ->setLastName('Desole')
            ->setAddress('1 rue de Paris')
            ->setTelephoneNumber('0666666666')
            ->setEmail('admin@demo.fr')
            ->setHighschool('HIV')
            ->setRoles(['ROLE_ADMIN'])
            ->setPassword($this->passwordEncoder->hashPassword($admin, 'admin')
            );
        $manager->persist($admin);

        $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 50; $i++){
                $user = new User();
                $user->setFirstName($faker->firstName())
                    ->setLastName($faker->lastName())
                    ->setAddress($faker->address())
                    ->setTelephoneNumber($faker->numerify('0#########'))
                    ->setEmail($faker->email)
                    ->setHighschool($faker->citySuffix())
                    ->setRoles(['ROLE_USER'])
                    ->setPassword($this->passwordEncoder->hashPassword($user, 'secret')
                    );
            $manager->persist($user);
        }
        $manager->flush();
    }
}