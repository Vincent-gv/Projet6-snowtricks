<?php

namespace App\DataFixtures;

use App\Entity\ImageTrick;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ImageTrickFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $images = new ImageTrick();
        $images->setFilename('snowboard-01.jpg')
            ->setAlt('Picture snowboard')
        ->setTrick($this->getReference(TrickFixtures::TRICK_1));

        $images2 = new ImageTrick();
        $images2->setFilename('snowboard-02.jpg')
            ->setAlt('Picture snowboard')
        ->setTrick($this->getReference(TrickFixtures::TRICK_1));

        $images3 = new ImageTrick();
        $images3->setFilename('snowboard-03.jpg')
            ->setAlt('Picture snowboard')
        ->setTrick($this->getReference(TrickFixtures::TRICK_1));

        $images4 = new ImageTrick();
        $images4->setFilename('snowboard-04.jpg')
            ->setAlt('Picture snowboard')
        ->setTrick($this->getReference(TrickFixtures::TRICK_1));

        $images5 = new ImageTrick();
        $images5->setFilename('snowboard-05.jpg')
            ->setAlt('Picture snowboard')
        ->setTrick($this->getReference(TrickFixtures::TRICK_1));

        $images6 = new ImageTrick();
        $images6->setFilename('snowboard-06.jpg')
            ->setAlt('Picture snowboard')
        ->setTrick($this->getReference(TrickFixtures::TRICK_1));

        $images7 = new ImageTrick();
        $images7->setFilename('snowboard-07.jpg')
            ->setAlt('Picture snowboard')
        ->setTrick($this->getReference(TrickFixtures::TRICK_1));

        $images8 = new ImageTrick();
        $images8->setFilename('snowboard-08.jpg')
            ->setAlt('Picture snowboard')
        ->setTrick($this->getReference(TrickFixtures::TRICK_1));

        $manager->persist($images);
        $manager->persist($images2);
        $manager->persist($images3);
        $manager->persist($images4);
        $manager->persist($images5);
        $manager->persist($images6);
        $manager->persist($images7);
        $manager->persist($images8);

        $images = new ImageTrick();
        $images->setFilename('snowboard-02.jpg')
            ->setAlt('Picture snowboard')
        ->setTrick($this->getReference(TrickFixtures::TRICK_2));

        $images2 = new ImageTrick();
        $images2->setFilename('snowboard-01.jpg')
            ->setAlt('Picture snowboard')
        ->setTrick($this->getReference(TrickFixtures::TRICK_2));

        $images3 = new ImageTrick();
        $images3->setFilename('snowboard-03.jpg')
            ->setAlt('Picture snowboard')
        ->setTrick($this->getReference(TrickFixtures::TRICK_2));

        $images4 = new ImageTrick();
        $images4->setFilename('snowboard-04.jpg')
            ->setAlt('Picture snowboard')
        ->setTrick($this->getReference(TrickFixtures::TRICK_2));

        $images5 = new ImageTrick();
        $images5->setFilename('snowboard-05.jpg')
            ->setAlt('Picture snowboard')
        ->setTrick($this->getReference(TrickFixtures::TRICK_2));

        $images6 = new ImageTrick();
        $images6->setFilename('snowboard-06.jpg')
            ->setAlt('Picture snowboard')
        ->setTrick($this->getReference(TrickFixtures::TRICK_2));

        $images7 = new ImageTrick();
        $images7->setFilename('snowboard-07.jpg')
            ->setAlt('Picture snowboard')
        ->setTrick($this->getReference(TrickFixtures::TRICK_2));

        $images8 = new ImageTrick();
        $images8->setFilename('snowboard-08.jpg')
            ->setAlt('Picture snowboard')
        ->setTrick($this->getReference(TrickFixtures::TRICK_2));

        $manager->persist($images);
        $manager->persist($images2);
        $manager->persist($images3);
        $manager->persist($images4);
        $manager->persist($images5);
        $manager->persist($images6);
        $manager->persist($images7);
        $manager->persist($images8);

        $images = new ImageTrick();
        $images->setFilename('snowboard-03.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_3));

        $images2 = new ImageTrick();
        $images2->setFilename('snowboard-02.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_3));

        $images3 = new ImageTrick();
        $images3->setFilename('snowboard-01.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_3));

        $images4 = new ImageTrick();
        $images4->setFilename('snowboard-04.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_3));

        $images5 = new ImageTrick();
        $images5->setFilename('snowboard-05.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_3));

        $images6 = new ImageTrick();
        $images6->setFilename('snowboard-06.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_3));

        $images7 = new ImageTrick();
        $images7->setFilename('snowboard-07.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_3));

        $images8 = new ImageTrick();
        $images8->setFilename('snowboard-08.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_3));

        $manager->persist($images);
        $manager->persist($images2);
        $manager->persist($images3);
        $manager->persist($images4);
        $manager->persist($images5);
        $manager->persist($images6);
        $manager->persist($images7);
        $manager->persist($images8);

        $images = new ImageTrick();
        $images->setFilename('snowboard-04.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_4));

        $images2 = new ImageTrick();
        $images2->setFilename('snowboard-02.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_4));

        $images3 = new ImageTrick();
        $images3->setFilename('snowboard-03.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_4));

        $images4 = new ImageTrick();
        $images4->setFilename('snowboard-01.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_4));

        $images5 = new ImageTrick();
        $images5->setFilename('snowboard-05.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_4));

        $images6 = new ImageTrick();
        $images6->setFilename('snowboard-06.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_4));

        $images7 = new ImageTrick();
        $images7->setFilename('snowboard-07.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_4));

        $images8 = new ImageTrick();
        $images8->setFilename('snowboard-08.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_4));

        $manager->persist($images);
        $manager->persist($images2);
        $manager->persist($images3);
        $manager->persist($images4);
        $manager->persist($images5);
        $manager->persist($images6);
        $manager->persist($images7);
        $manager->persist($images8);

        $images = new ImageTrick();
        $images->setFilename('snowboard-05.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_5));

        $images2 = new ImageTrick();
        $images2->setFilename('snowboard-02.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_5));

        $images3 = new ImageTrick();
        $images3->setFilename('snowboard-03.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_5));

        $images4 = new ImageTrick();
        $images4->setFilename('snowboard-04.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_5));

        $images5 = new ImageTrick();
        $images5->setFilename('snowboard-01.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_5));

        $images6 = new ImageTrick();
        $images6->setFilename('snowboard-06.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_5));

        $images7 = new ImageTrick();
        $images7->setFilename('snowboard-07.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_5));

        $images8 = new ImageTrick();
        $images8->setFilename('snowboard-08.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_5));

        $manager->persist($images);
        $manager->persist($images2);
        $manager->persist($images3);
        $manager->persist($images4);
        $manager->persist($images5);
        $manager->persist($images6);
        $manager->persist($images7);
        $manager->persist($images8);

        $images = new ImageTrick();
        $images->setFilename('snowboard-06.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_6));

        $images2 = new ImageTrick();
        $images2->setFilename('snowboard-02.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_6));

        $images3 = new ImageTrick();
        $images3->setFilename('snowboard-03.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_6));

        $images4 = new ImageTrick();
        $images4->setFilename('snowboard-04.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_6));

        $images5 = new ImageTrick();
        $images5->setFilename('snowboard-05.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_6));

        $images6 = new ImageTrick();
        $images6->setFilename('snowboard-01.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_6));

        $images7 = new ImageTrick();
        $images7->setFilename('snowboard-07.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_6));

        $images8 = new ImageTrick();
        $images8->setFilename('snowboard-08.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_6));

        $manager->persist($images);
        $manager->persist($images2);
        $manager->persist($images3);
        $manager->persist($images4);
        $manager->persist($images5);
        $manager->persist($images6);
        $manager->persist($images7);
        $manager->persist($images8);

        $images = new ImageTrick();
        $images->setFilename('snowboard-07.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_7));

        $images2 = new ImageTrick();
        $images2->setFilename('snowboard-02.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_7));

        $images3 = new ImageTrick();
        $images3->setFilename('snowboard-03.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_7));

        $images4 = new ImageTrick();
        $images4->setFilename('snowboard-04.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_7));

        $images5 = new ImageTrick();
        $images5->setFilename('snowboard-05.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_7));

        $images6 = new ImageTrick();
        $images6->setFilename('snowboard-06.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_7));

        $images7 = new ImageTrick();
        $images7->setFilename('snowboard-01.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_7));

        $images8 = new ImageTrick();
        $images8->setFilename('snowboard-08.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_7));

        $manager->persist($images);
        $manager->persist($images2);
        $manager->persist($images3);
        $manager->persist($images4);
        $manager->persist($images5);
        $manager->persist($images6);
        $manager->persist($images7);
        $manager->persist($images8);

        $images = new ImageTrick();
        $images->setFilename('snowboard-08.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_8));

        $images2 = new ImageTrick();
        $images2->setFilename('snowboard-02.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_8));

        $images3 = new ImageTrick();
        $images3->setFilename('snowboard-03.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_8));

        $images4 = new ImageTrick();
        $images4->setFilename('snowboard-04.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_8));

        $images5 = new ImageTrick();
        $images5->setFilename('snowboard-05.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_8));

        $images6 = new ImageTrick();
        $images6->setFilename('snowboard-06.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_8));

        $images7 = new ImageTrick();
        $images7->setFilename('snowboard-07.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_8));

        $images8 = new ImageTrick();
        $images8->setFilename('snowboard-01.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_8));

        $manager->persist($images);
        $manager->persist($images2);
        $manager->persist($images3);
        $manager->persist($images4);
        $manager->persist($images5);
        $manager->persist($images6);
        $manager->persist($images7);
        $manager->persist($images8);

        $images = new ImageTrick();
        $images->setFilename('backflip-1.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_9));

        $images2 = new ImageTrick();
        $images2->setFilename('snowboard-02.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_9));

        $images3 = new ImageTrick();
        $images3->setFilename('snowboard-03.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_9));

        $images4 = new ImageTrick();
        $images4->setFilename('snowboard-04.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_9));

        $images5 = new ImageTrick();
        $images5->setFilename('snowboard-05.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_9));

        $images6 = new ImageTrick();
        $images6->setFilename('snowboard-06.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_9));

        $images7 = new ImageTrick();
        $images7->setFilename('snowboard-07.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_9));

        $images8 = new ImageTrick();
        $images8->setFilename('snowboard-08.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_9));

        $manager->persist($images);
        $manager->persist($images2);
        $manager->persist($images3);
        $manager->persist($images4);
        $manager->persist($images5);
        $manager->persist($images6);
        $manager->persist($images7);
        $manager->persist($images8);

        $images = new ImageTrick();
        $images->setFilename('slide-1.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_10));

        $images2 = new ImageTrick();
        $images2->setFilename('snowboard-01.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_10));

        $images3 = new ImageTrick();
        $images3->setFilename('snowboard-03.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_10));

        $images4 = new ImageTrick();
        $images4->setFilename('snowboard-04.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_10));

        $images5 = new ImageTrick();
        $images5->setFilename('snowboard-05.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_10));

        $images6 = new ImageTrick();
        $images6->setFilename('snowboard-06.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_10));

        $images7 = new ImageTrick();
        $images7->setFilename('snowboard-07.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_10));

        $images8 = new ImageTrick();
        $images8->setFilename('snowboard-08.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_10));

        $manager->persist($images);
        $manager->persist($images2);
        $manager->persist($images3);
        $manager->persist($images4);
        $manager->persist($images5);
        $manager->persist($images6);
        $manager->persist($images7);
        $manager->persist($images8);

        $images = new ImageTrick();
        $images->setFilename('seatbelt.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_11));

        $images2 = new ImageTrick();
        $images2->setFilename('snowboard-02.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_11));

        $images3 = new ImageTrick();
        $images3->setFilename('snowboard-01.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_11));

        $images4 = new ImageTrick();
        $images4->setFilename('snowboard-04.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_11));

        $images5 = new ImageTrick();
        $images5->setFilename('snowboard-05.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_11));

        $images6 = new ImageTrick();
        $images6->setFilename('snowboard-06.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_11));

        $images7 = new ImageTrick();
        $images7->setFilename('snowboard-07.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_11));

        $images8 = new ImageTrick();
        $images8->setFilename('snowboard-08.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_11));

        $manager->persist($images);
        $manager->persist($images2);
        $manager->persist($images3);
        $manager->persist($images4);
        $manager->persist($images5);
        $manager->persist($images6);
        $manager->persist($images7);
        $manager->persist($images8);

        $images = new ImageTrick();
        $images->setFilename('rocket.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_12));

        $images2 = new ImageTrick();
        $images2->setFilename('snowboard-02.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_12));

        $images3 = new ImageTrick();
        $images3->setFilename('snowboard-03.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_12));

        $images4 = new ImageTrick();
        $images4->setFilename('snowboard-01.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_12));

        $images5 = new ImageTrick();
        $images5->setFilename('snowboard-05.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_12));

        $images6 = new ImageTrick();
        $images6->setFilename('snowboard-06.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_12));

        $images7 = new ImageTrick();
        $images7->setFilename('snowboard-07.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_12));

        $images8 = new ImageTrick();
        $images8->setFilename('snowboard-08.jpg')
            ->setAlt('Picture snowboard')
            ->setTrick($this->getReference(TrickFixtures::TRICK_12));

        $manager->persist($images);
        $manager->persist($images2);
        $manager->persist($images3);
        $manager->persist($images4);
        $manager->persist($images5);
        $manager->persist($images6);
        $manager->persist($images7);
        $manager->persist($images8);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            TrickFixtures::class
        ];
    }
}
