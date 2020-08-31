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
            ->setContent('Many variations of flips exist, with usage depending on the particular type of activity. In gymnastics, for example, flips conform to a small number of specific, rigorously defined forms and movements. In Snowboard, however, there are seemingly endless variations of flips.')
            ->setSlug('double-backflip')
            ->setUser($user)
            ->setCategory($category)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_1, $trick);

        $trick2 = new Trick();
        $trick2->setTitle('Taipan air')
            ->setContent('The back hand grabs the toe edge just in front of the rear foot. However, the arm must go around the outside of your rear knee. The board is then pulled behind the rider (tweaked). The name Taipan is a portmanteau of tail/Japan air.')
            ->setSlug('taipan-air')
            ->setUser($user3)
            ->setCategory($category2)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_2, $trick2);

        $trick3 = new Trick();
        $trick3->setTitle('Goofy stance')
            ->setContent('Fakie is riding backwards with the tail facing in the direction of travel. When used in conjunction with a trick name, like "fakie ollie", it means that the trick was performed as it would normally be done with the exception of riding backwards. Not to be confused with "switch" or switchstance which is literally "switching" ones stance (from either regular or goofy to the opposite) with the nose pointing in the direction of travel.')
            ->setSlug('goofy-stance')
            ->setUser($user3)
            ->setCategory($category3)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_3, $trick3);

        $trick4 = new Trick();
        $trick4->setTitle('Rocket Air')
            ->setContent('The front hand grabs the toe edge in front of the front foot (mute) and the back leg is boned while the board points perpendicular to the ground.
             The identifier fakie has its origin in skateboarding, a discipline where the feet are not attached to the board, but where the skateboarder\'s natural stance includes positioning the trailing foot on the kicked tail of the skateboard. On a snowboard, fakie refers to an instance where the snowboard is traveling backward, but their feet remain in the same position on the snowboard as their natural stance.')
            ->setSlug('rocket-air')
            ->setUser($user)
            ->setCategory($category4)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_4, $trick4);

        $trick5 = new Trick();
        $trick5->setTitle('Swiss cheese air')
            ->setContent('The rear hand reaches between the legs and grabs the heel edge in front of the front foot while the back leg is boned. 
            A regular rider approaching a rail from the left side of the rail would be considered frontside because the "front side" of their body is facing the rail. A regular rider approaching a rail from the right side of the rail would be considered backside because the "back side" of their body is facing the rail.')
            ->setSlug('regular-positions')
            ->setUser($user2)
            ->setCategory($category5)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_5, $trick5);

        $trick6 = new Trick();
        $trick6->setTitle('Nose Grab')
            ->setContent('The front hand grabs the nose of the snowboard. More fun : doing a frontside spin onto a rail would rotate their body clockwise and then land on the rail. A regular rider doing a backside spin onto a rail would rotate their body counterclockwise and then land on the rail.')
            ->setSlug('nose-grab')
            ->setUser($user2)
            ->setCategory($category6)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_6, $trick6);

        $trick7 = new Trick();
        $trick7->setTitle('Frontside 180')
            ->setContent('A switch-frontside 540 would land a rider in the same switch position they took off from in the halfpipe, it was not referred to as a "Cab 540" because the rider did not take off switch, spin frontside, and land in their comfortable stance.  Several snowboarders have recently extended the limits of technical snowboarding by performing triple-cork variations, Torstein Horgmo being the first to land one in competition.')
            ->setSlug('frontside-180')
            ->setUser($user3)
            ->setCategory($category)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_7, $trick7);

        $trick8 = new Trick();
        $trick8->setTitle('Frontside 540')
            ->setContent('The basic frontside rodeo is all together a 540. It essentially falls into a grey area between an off axis frontside 540 and a frontside 180 with a back flip blended into it. An invert where the rider plants the front hand on the wall, rotated 540 degrees in a backside direction and lands riding forward. This refers to a rotation in which a snowboarder inverts or orients themselves sideways at two distinct times during an aerial rotation.')
            ->setSlug('frontside-540')
            ->setUser($user)
            ->setCategory($category6)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_8, $trick8);

        $trick9 = new Trick();
        $trick9->setTitle('Fakie ollie (Switch Nollie)')
            ->setContent('While riding switch, the snowboarder springs off of their \'new nose\' and into the air. This resembles an ollie, but the snowboarder is riding in switch.  A spin attempted from a jump to a rail is the only time a spin can be referred to in a 90-degree increment, examples: 270 (between a 180 and 360-degree spin) or 450 (between a 360 and 540-degree spin). These spins can be frontside, backside, cab, or switch-backside just like any other spins. ')
            ->setSlug('fakie-ollie')
            ->setUser($user2)
            ->setCategory($category2)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_9, $trick9);

        $trick10 = new Trick();
        $trick10->setTitle('Switch ollie Trick')
            ->setContent('Spins are corked or corkscrew when the axis of the spin allows for the snowboarder to be oriented sideways or upside-down in the air, typically without becoming completely inverted (though the head and shoulders should drop below the relative position of the board). A Double-Cork refers to a rotation in which a snowboarder inverts or orients themselves sideways at two distinct times during an aerial rotation.')
            ->setSlug('switch-ollie-trick')
            ->setUser($user)
            ->setCategory($category3)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_10, $trick10);

        $trick11 = new Trick();
        $trick11->setTitle('Double-Cork')
            ->setContent('David Benedek is the originator of the Double-Cork in the Half-pipe, but the Double-Cork is also a very common trick in Big-Air competitions. Shaun White is known for making this trick famous in the half-pipe. The front hand reaches across the body and grabs the tail while the front leg is boned. The snowboarders\'s arm resembles the sash of a three-point seatbelt, hence the name.')
            ->setSlug('double-cork')
            ->setUser($user3)
            ->setCategory($category4)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());
        $this->addReference(self::TRICK_11, $trick11);

        $trick12 = new Trick();
        $trick12->setTitle('Mule kick')
            ->setContent('An early snowboarder adaptation of the skateboarders method air. Often called a Toyota air, after its similar posturing to the early 1980s Toyota "Oh What A Feeling" ad campaign featuring people jumping off the ground, performed by jumping into an aerial backbend with legs bending until nearly kicking yourself in the butt as with skiing\'s backscratcher air, both arms bent back high over the head and not grabbing the board. Still occasionally seen and wide regarded as terrible.')
            ->setSlug('mule-kick')
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
