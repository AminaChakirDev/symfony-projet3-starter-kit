<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
  private UserPasswordHasherInterface $passwordHasher;

  public function __construct(UserPasswordHasherInterface $passwordHasher)
  {
    $this->passwordHasher = $passwordHasher;
  }

  public function load(ObjectManager $manager): void
  {
    $user = new User();
    $user->setName('altyrion');
    $user->setEmail('altyrion@hotmail.fr');
    $user->setPassword($this->passwordHasher->hashPassword($user, 'azerty123'));
    $user->setDescription(
      'Je suis passionné par l\'art et les innovations technologiques. 
              Toutefois, comme je ne sais ni peindre ni dessiner,
            l\'intelligence artificielle est devenue le pinceau avec lequel je peux illustrer 
            l\'univers que j\'ai toujours rêvé de concevoir,
            me fournissant ainsi une toile numérique pour concrétiser ma vision.'
    );
    $user->setRoles(['ROLE_USER']);

    $manager->persist($user);
    $manager->flush();
  }
}
