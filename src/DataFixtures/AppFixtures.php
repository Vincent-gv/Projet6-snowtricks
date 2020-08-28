<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Trick;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $category = new Category();
        $category->setName('category');
        $user = new User();
        $user->setUsername('vincent')
            ->setPassword('1234')
            ->setEmail('vinz@gmail.com');
        $trick = new Trick();
        $trick->setTitle('Mon titre')
            ->setContent('mon contenu')
            ->setSlug('slug')
            ->setUser($user)
            ->setCategory($category)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());

        $manager->persist($trick);
        $manager->persist($user);
        $manager->persist($category);
        $manager->flush();
    }
}
