<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class Admin extends Fixture
{
    private UserPasswordHasherInterface $passwordEncoder;
    public function __construct(UserPasswordHasherInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    public function load(ObjectManager $manager)
    {
        $user = new \App\Entity\Admin();
        $user->setUsername('Lioka');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword($this->passwordEncoder->hashPassword(
            $user,
            '123456'
        ));
        $manager->persist($user);
        $user2 = new \App\Entity\Admin();
        $user2->setUsername('Harivelo');
        $user2->setPassword($this->passwordEncoder->hashPassword(
            $user2,
            'azerty'
        ));
        $manager->persist($user2);
        $manager->flush();
    }
}
