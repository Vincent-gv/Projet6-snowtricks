<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class CommentFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $comment = new Comment();
        $comment->setComment('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.')
            ->setCreatedAt(new \DateTime())
            ->setUser($this->getReference(TrickFixtures::USER_1))
        ->setTrick($this->getReference(TrickFixtures::TRICK_1));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setComment('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.')
            ->setCreatedAt(new \DateTime())
            ->setUser($this->getReference(TrickFixtures::USER_2))
        ->setTrick($this->getReference(TrickFixtures::TRICK_2));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setComment('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.')
            ->setCreatedAt(new \DateTime())
            ->setUser($this->getReference(TrickFixtures::USER_3))
        ->setTrick($this->getReference(TrickFixtures::TRICK_8));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setComment('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.')
            ->setCreatedAt(new \DateTime())
            ->setUser($this->getReference(TrickFixtures::USER_2))
        ->setTrick($this->getReference(TrickFixtures::TRICK_8));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setComment('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.')
            ->setCreatedAt(new \DateTime())
            ->setUser($this->getReference(TrickFixtures::USER_1))
        ->setTrick($this->getReference(TrickFixtures::TRICK_8));
        $manager->persist($comment);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            TrickFixtures::class
        ];
    }
}
