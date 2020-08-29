<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Trick;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TrickFixtures extends Fixture
{
    const TRICK_1 = 'trick1';
    const TRICK_2 = 'trick2';
    const TRICK_3 = 'trick3';
    const TRICK_4 = 'trick4';
    const TRICK_5 = 'trick5';
    const TRICK_6 = 'trick6';
    const TRICK_7 = 'trick7';
    const TRICK_8 = 'trick8';
    const TRICK_9 = 'trick9';
    const TRICK_10 = 'trick10';
    const TRICK_11 = 'trick11';
    const TRICK_12 = 'trick12';

    const USER_1 = 'user1';
    const USER_2 = 'user2';
    const USER_3 = 'user3';

    public function load(ObjectManager $manager)
    {
        $category = new Category();
        $category->setName('Regular');

        $category2 = new Category();
        $category2->setName('Goofy');

        $category3 = new Category();
        $category3->setName('Switch-stance');

        $category4 = new Category();
        $category4->setName('Fakie');

        $category5 = new Category();
        $category5->setName('Frontside');

        $category6 = new Category();
        $category6->setName('Backside');

        $user = new User();
        $user->setUsername('Zander Rohan')
            ->setPassword('1234')
            ->setEmail('zander@gmail.com')
            ->setImage('user1.jpg');
        $this->addReference(self::USER_1, $user);

        $user2 = new User();
        $user2->setUsername('Moris henry')
            ->setPassword('1234')
            ->setEmail('moris@gmail.com')
            ->setImage('user2.jpg');
        $this->addReference(self::USER_2, $user2);

        $user3 = new User();
        $user3->setUsername('Gyle hank')
            ->setPassword('1234')
            ->setEmail('gyle@gmail.com')
            ->setImage('user3.jpg');
        $this->addReference(self::USER_3, $user3);

        $user4 = new User();
        $user4->setUsername('Vincent G')
            ->setPassword('$argon2id$v=19$m=65536,t=4,p=1$tZVT1uxWwYDSiHm2/xNTWg$0R+gkysAe1voHBtF5ynNDZknndY7agyP+HZokravexE')
            ->setEmail('contact@vincent-dev.com');

        $trick = new Trick();
        $trick->setTitle('Double Backflip')
            ->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam arcu velit, posuere non rhoncus at, fermentum non sem. Duis egestas luctus massa sed ullamcorper. Phasellus id lorem id turpis lacinia dictum. Vestibulum in iaculis urna. Nullam quis fringilla sapien. Fusce id nibh malesuada tortor pretium tincidunt non id ante. Aenean facilisis sodales velit non consectetur. Quisque vel facilisis dui.')
            ->setSlug('trick1')
            ->setUser($user)
            ->setCategory($category)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_1, $trick);

        $trick2 = new Trick();
        $trick2->setTitle('Switch-stance and fakie')
            ->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam arcu velit, posuere non rhoncus at, fermentum non sem. Duis egestas luctus massa sed ullamcorper. Phasellus id lorem id turpis lacinia dictum. Vestibulum in iaculis urna. Nullam quis fringilla sapien. Fusce id nibh malesuada tortor pretium tincidunt non id ante. Aenean facilisis sodales velit non consectetur. Quisque vel facilisis dui.')
            ->setSlug('trick2')
            ->setUser($user3)
            ->setCategory($category2)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_2, $trick2);

        $trick3 = new Trick();
        $trick3->setTitle('Goofy stance rider ')
            ->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam arcu velit, posuere non rhoncus at, fermentum non sem. Duis egestas luctus massa sed ullamcorper. Phasellus id lorem id turpis lacinia dictum. Vestibulum in iaculis urna. Nullam quis fringilla sapien. Fusce id nibh malesuada tortor pretium tincidunt non id ante. Aenean facilisis sodales velit non consectetur. Quisque vel facilisis dui.')
            ->setSlug('trick3')
            ->setUser($user3)
            ->setCategory($category3)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_3, $trick3);

        $trick4 = new Trick();
        $trick4->setTitle('The Snowboarder\'s natural stance ')
            ->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam arcu velit, posuere non rhoncus at, fermentum non sem. Duis egestas luctus massa sed ullamcorper. Phasellus id lorem id turpis lacinia dictum. Vestibulum in iaculis urna. Nullam quis fringilla sapien. Fusce id nibh malesuada tortor pretium tincidunt non id ante. Aenean facilisis sodales velit non consectetur. Quisque vel facilisis dui.')
            ->setSlug('trick4')
            ->setUser($user)
            ->setCategory($category4)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_4, $trick4);

        $trick5 = new Trick();
        $trick5->setTitle('Rides with left foot forward')
            ->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam arcu velit, posuere non rhoncus at, fermentum non sem. Duis egestas luctus massa sed ullamcorper. Phasellus id lorem id turpis lacinia dictum. Vestibulum in iaculis urna. Nullam quis fringilla sapien. Fusce id nibh malesuada tortor pretium tincidunt non id ante. Aenean facilisis sodales velit non consectetur. Quisque vel facilisis dui.')
            ->setSlug('trick5')
            ->setUser($user2)
            ->setCategory($category5)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_5, $trick5);

        $trick6 = new Trick();
        $trick6->setTitle('Rides with right foot forward')
            ->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam arcu velit, posuere non rhoncus at, fermentum non sem. Duis egestas luctus massa sed ullamcorper. Phasellus id lorem id turpis lacinia dictum. Vestibulum in iaculis urna. Nullam quis fringilla sapien. Fusce id nibh malesuada tortor pretium tincidunt non id ante. Aenean facilisis sodales velit non consectetur. Quisque vel facilisis dui.')
            ->setSlug('trick6')
            ->setUser($user2)
            ->setCategory($category6)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_6, $trick6);

        $trick7 = new Trick();
        $trick7->setTitle('Frontside 540 for a regular rider')
            ->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam arcu velit, posuere non rhoncus at, fermentum non sem. Duis egestas luctus massa sed ullamcorper. Phasellus id lorem id turpis lacinia dictum. Vestibulum in iaculis urna. Nullam quis fringilla sapien. Fusce id nibh malesuada tortor pretium tincidunt non id ante. Aenean facilisis sodales velit non consectetur. Quisque vel facilisis dui.')
            ->setSlug('trick7')
            ->setUser($user3)
            ->setCategory($category)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_7, $trick7);

        $trick8 = new Trick();
        $trick8->setTitle('Cab 540 for a goofy rider')
            ->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam arcu velit, posuere non rhoncus at, fermentum non sem. Duis egestas luctus massa sed ullamcorper. Phasellus id lorem id turpis lacinia dictum. Vestibulum in iaculis urna. Nullam quis fringilla sapien. Fusce id nibh malesuada tortor pretium tincidunt non id ante. Aenean facilisis sodales velit non consectetur. Quisque vel facilisis dui.')
            ->setSlug('trick8')
            ->setUser($user)
            ->setCategory($category6)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_8, $trick8);

        $trick9 = new Trick();
        $trick9->setTitle('Fakie ollie (Switch Nollie)')
            ->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam arcu velit, posuere non rhoncus at, fermentum non sem. Duis egestas luctus massa sed ullamcorper. Phasellus id lorem id turpis lacinia dictum. Vestibulum in iaculis urna. Nullam quis fringilla sapien. Fusce id nibh malesuada tortor pretium tincidunt non id ante. Aenean facilisis sodales velit non consectetur. Quisque vel facilisis dui.')
            ->setSlug('trick9')
            ->setUser($user2)
            ->setCategory($category2)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_9, $trick9);

        $trick10 = new Trick();
        $trick10->setTitle('Switch ollie Trick')
            ->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam arcu velit, posuere non rhoncus at, fermentum non sem. Duis egestas luctus massa sed ullamcorper. Phasellus id lorem id turpis lacinia dictum. Vestibulum in iaculis urna. Nullam quis fringilla sapien. Fusce id nibh malesuada tortor pretium tincidunt non id ante. Aenean facilisis sodales velit non consectetur. Quisque vel facilisis dui.')
            ->setSlug('trick10')
            ->setUser($user)
            ->setCategory($category3)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_10, $trick10);

        $trick11 = new Trick();
        $trick11->setTitle('Nollie Trick')
            ->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam arcu velit, posuere non rhoncus at, fermentum non sem. Duis egestas luctus massa sed ullamcorper. Phasellus id lorem id turpis lacinia dictum. Vestibulum in iaculis urna. Nullam quis fringilla sapien. Fusce id nibh malesuada tortor pretium tincidunt non id ante. Aenean facilisis sodales velit non consectetur. Quisque vel facilisis dui.')
            ->setSlug('trick11')
            ->setUser($user3)
            ->setCategory($category4)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_11, $trick11);

        $trick12 = new Trick();
        $trick12->setTitle('Air-to-fakie')
            ->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam arcu velit, posuere non rhoncus at, fermentum non sem. Duis egestas luctus massa sed ullamcorper. Phasellus id lorem id turpis lacinia dictum. Vestibulum in iaculis urna. Nullam quis fringilla sapien. Fusce id nibh malesuada tortor pretium tincidunt non id ante. Aenean facilisis sodales velit non consectetur. Quisque vel facilisis dui.')
            ->setSlug('trick12')
            ->setUser($user2)
            ->setCategory($category5)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_12, $trick12);

        $manager->persist($trick);
        $manager->persist($trick2);
        $manager->persist($trick3);
        $manager->persist($trick4);
        $manager->persist($trick5);
        $manager->persist($trick6);
        $manager->persist($trick7);
        $manager->persist($trick8);
        $manager->persist($trick9);
        $manager->persist($trick10);
        $manager->persist($trick11);
        $manager->persist($trick12);
        $manager->persist($category);
        $manager->persist($category2);
        $manager->persist($category3);
        $manager->persist($category4);
        $manager->persist($category5);
        $manager->persist($category6);
        $manager->persist($user);
        $manager->persist($user2);
        $manager->persist($user3);
        $manager->persist($user4);
        $manager->flush();
    }
}
