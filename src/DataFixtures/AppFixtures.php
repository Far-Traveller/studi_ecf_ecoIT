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
         $formation = new Formation();
        $formation->setDescription('fnrbjkefln,lz,ezlv');
        $formation->setTitle('edfredfded');
        $formation->getSlug();

         $manager->persist($formation);
        $manager->flush();
    }
}
