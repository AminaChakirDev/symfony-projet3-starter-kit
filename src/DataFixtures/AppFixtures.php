<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $user = new User();
        $user->setName('altyrion');
        $user->setEmail('altyrion@hotmail.fr');
        $user->setPassword('azerty123');

            $manager->persist($user);
            $manager->flush();
    }
}
