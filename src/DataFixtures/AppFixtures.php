<?php

namespace App\DataFixtures;

use App\Entity\Formation;
use App\Entity\Lesson;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 20; $i++) {
            $formation = new Formation();
            $formation->setTitle('formation '.$i);
            $formation->setDescription('Lorem ipsumimous');
            $formation->setSlug('formation'.$i);
            $manager->persist($formation);
        }

        $manager->flush();
    }
}
