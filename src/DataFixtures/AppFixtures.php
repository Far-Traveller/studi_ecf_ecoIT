<?php

namespace App\DataFixtures;

use App\Entity\Formation;
use App\Entity\Lesson;
use App\Entity\Section;
use App\Entity\User;
use App\Repository\FormationRepository;
use App\Repository\LessonRepository;
use App\Repository\SectionRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 20; $i++) {
            $formation = new Formation();
            $formation->setTitle('Formation '.$i);
            $formation->setDescription('Lorem ipsumimous de fabilous');
            $formation->setSlug('formation'.$i);
            $manager->persist($formation);

            $section = new Section();
            $section->setTitle('Section '.$i);
            $section->setFormation($formation);
            $manager->persist($section);

            $lesson = new Lesson();
            $lesson->setTitle('Leçon '.$i);
            $lesson->setText('Il en faut peu pour être heureux');
            $lesson->setVideo('url_video');
            $lesson->setSection($section);
            $manager->persist($lesson);
        }
        $manager->flush();
    }
}
