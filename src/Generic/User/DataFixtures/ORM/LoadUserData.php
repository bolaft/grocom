<?php

namespace Generic\User\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Generic\User\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('user');
        $user->setEmail('user@mail.com');
        $user->setPlainPassword('password');
        $user->addRole('ROLE_USER');

        $manager->persist($user);

        $admin = new User();
        $admin->setUsername('admin');
        $admin->setEmail('admin@mail.com');
        $admin->setPlainPassword('password');
        $admin->addRole('ROLE_ADMIN');

        $manager->persist($admin);

        $superadmin = new User();
        $superadmin->setUsername('superadmin');
        $superadmin->setEmail('superadmin@mail.com');
        $superadmin->setPlainPassword('password');
        $superadmin->addRole('ROLE_SUPER_ADMIN');

        $manager->persist($superadmin);

        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}