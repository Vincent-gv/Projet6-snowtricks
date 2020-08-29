<?php

namespace App\DataFixtures;

use App\Entity\VideoTrick;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class VideoTrickFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $videos = new VideoTrick();
        $videos->setVideoId('qsd8uaex-Is')
        ->setTrick($this->getReference(TrickFixtures::TRICK_1));
        $manager->persist($videos);

        $videos = new VideoTrick();
        $videos->setVideoId('x63itee')
        ->setTrick($this->getReference(TrickFixtures::TRICK_2));
        $manager->persist($videos);

        $videos = new VideoTrick();
        $videos->setVideoId('aRyFCCq63ms')
        ->setTrick($this->getReference(TrickFixtures::TRICK_2));
        $manager->persist($videos);

        $videos = new VideoTrick();
        $videos->setVideoId('AwRIi1DaYPM')
        ->setTrick($this->getReference(TrickFixtures::TRICK_3));
        $manager->persist($videos);

        $videos = new VideoTrick();
        $videos->setVideoId('x2fs4j4')
        ->setTrick($this->getReference(TrickFixtures::TRICK_4));
        $manager->persist($videos);

        $videos = new VideoTrick();
        $videos->setVideoId('tHHxTHZwFUw')
        ->setTrick($this->getReference(TrickFixtures::TRICK_5));
        $manager->persist($videos);

        $videos = new VideoTrick();
        $videos->setVideoId('qsd8uaex-Is')
        ->setTrick($this->getReference(TrickFixtures::TRICK_6));
        $manager->persist($videos);

        $videos = new VideoTrick();
        $videos->setVideoId('x63itee')
        ->setTrick($this->getReference(TrickFixtures::TRICK_7));
        $manager->persist($videos);

        $videos = new VideoTrick();
        $videos->setVideoId('aRyFCCq63ms')
        ->setTrick($this->getReference(TrickFixtures::TRICK_8));
        $manager->persist($videos);

        $videos = new VideoTrick();
        $videos->setVideoId('AwRIi1DaYPM')
        ->setTrick($this->getReference(TrickFixtures::TRICK_9));
        $manager->persist($videos);

        $videos = new VideoTrick();
        $videos->setVideoId('x2fs4j4')
        ->setTrick($this->getReference(TrickFixtures::TRICK_10));
        $manager->persist($videos);

        $videos = new VideoTrick();
        $videos->setVideoId('tHHxTHZwFUw')
        ->setTrick($this->getReference(TrickFixtures::TRICK_9));
        $manager->persist($videos);

        $videos = new VideoTrick();
        $videos->setVideoId('AwRIi1DaYPM')
        ->setTrick($this->getReference(TrickFixtures::TRICK_10));
        $manager->persist($videos);

        $videos = new VideoTrick();
        $videos->setVideoId('x2fs4j4')
        ->setTrick($this->getReference(TrickFixtures::TRICK_8));
        $manager->persist($videos);

        $videos = new VideoTrick();
        $videos->setVideoId('tHHxTHZwFUw')
        ->setTrick($this->getReference(TrickFixtures::TRICK_12));
        $manager->persist($videos);


        $videos = new VideoTrick();
        $videos->setVideoId('qsd8uaex-Is')
            ->setTrick($this->getReference(TrickFixtures::TRICK_11));
        $manager->persist($videos);

        $videos = new VideoTrick();
        $videos->setVideoId('x63itee')
            ->setTrick($this->getReference(TrickFixtures::TRICK_4));
        $manager->persist($videos);

        $videos = new VideoTrick();
        $videos->setVideoId('aRyFCCq63ms')
            ->setTrick($this->getReference(TrickFixtures::TRICK_6));
        $manager->persist($videos);

        $videos = new VideoTrick();
        $videos->setVideoId('AwRIi1DaYPM')
            ->setTrick($this->getReference(TrickFixtures::TRICK_1));
        $manager->persist($videos);

        $videos = new VideoTrick();
        $videos->setVideoId('x2fs4j4')
            ->setTrick($this->getReference(TrickFixtures::TRICK_3));
        $manager->persist($videos);

        $videos = new VideoTrick();
        $videos->setVideoId('tHHxTHZwFUw')
            ->setTrick($this->getReference(TrickFixtures::TRICK_8));
        $manager->persist($videos);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            TrickFixtures::class
        ];
    }
}
