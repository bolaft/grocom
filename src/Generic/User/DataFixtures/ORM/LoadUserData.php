<?php

namespace Generic\User\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Generic\User\Entity\User;

/**
 * Charge les données utilisateurs
 * 
 * @author Soufian Salim <soufi@nsal.im>
 */
class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('user');
        $user->setEmail('user@mail.com');
        $user->setPlainPassword('password');
        $user->addRole('ROLE_USER');
        $user->setEnabled(true);

        $manager->persist($user);

        $admin = new User();
        $admin->setUsername('admin');
        $admin->setEmail('admin@mail.com');
        $admin->setPlainPassword('password');
        $admin->addRole('ROLE_ADMIN');
        $admin->setEnabled(true);

        $manager->persist($admin);

        $superadmin = new User();
        $superadmin->setUsername('superadmin');
        $superadmin->setEmail('superadmin@mail.com');
        $superadmin->setPlainPassword('password');
        $superadmin->addRole('ROLE_SUPER_ADMIN');
        $superadmin->setEnabled(true);

        $manager->persist($superadmin);

        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}