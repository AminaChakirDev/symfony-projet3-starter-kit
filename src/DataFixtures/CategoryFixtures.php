<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Category;

class CategoryFixtures extends Fixture
{
    public const CATEGORY = [
    'dessin',
    'landscape',
    'Photo',
    'science-fiction',
    'Fantaisy',
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::CATEGORY as $categoryName) {
            $category = new Category();
            $category->setName($categoryName);
            $manager->persist($category);
            $this->addReference($categoryName, $category);
        }

        $manager->flush();
    }
}
