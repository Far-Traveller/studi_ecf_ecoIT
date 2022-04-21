<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        $userAdmin = new User();
        $userAdmin->setEmail('admin@orange.fr');
        $userAdmin->setRoles(['ROLE_ADMIN']);
        $userAdmin->setFirstname('Dragon');
        $userAdmin->setLastname('Bidule');
        $password = $this->hasher->hashPassword($userAdmin, 'admini');
        $userAdmin->setPassword($password);
        $manager->persist($userAdmin);

        $userInstr = new User();
        $userInstr->setEmail('instructor@orange.fr');
        $userInstr->setRoles(['ROLE_INSTRUCTOR']);
        $userInstr->setFirstname('Fleur');
        $userInstr->setLastname('Sandale');
        $password = $this->hasher->hashPassword($userInstr, 'instru');
        $userInstr->setPassword($password);
        $manager->persist($userInstr);

        $manager->flush();
    }
}
