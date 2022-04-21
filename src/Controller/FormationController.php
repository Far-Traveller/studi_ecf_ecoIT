<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Entity\Lesson;
use App\Entity\Section;
use App\Entity\User;
use App\Repository\FormationRepository;
use App\Repository\LessonRepository;
use App\Repository\SectionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class FormationController extends AbstractController
{
    private EntityManagerInterface $em;
    private FormationRepository $formationRepo;
    private SectionRepository $sectionRepo;
    private LessonRepository $lessonRepo;

    public function __construct(EntityManagerInterface $em, FormationRepository $formationRepo,
                                SectionRepository $sectionRepo, LessonRepository $lessonRepo)
    {
        $this->em = $em;
        $this->formationRepo = $formationRepo;
        $this->sectionRepo = $sectionRepo;
        $this->lessonRepo = $lessonRepo;
    }

    #[Route('/formations', name: 'app_formation')]
    public function index(): Response
    {
        $formations = $this->formationRepo->findAll();

        return $this->render('formation/index.html.twig', [
            'controller_name' => 'FormationController',
            'formations' => $formations
        ]);
    }

    #[Route('/formations/{slug}', name: 'app_formation_show')]
    public function show(Formation $formation): Response
    {
        $id_formation = $formation->getId();
        $sections = $this->sectionRepo->findBy(['formation' => $id_formation]);
        $lessons = $this->lessonRepo->findAll();

        //Display lessons done by current user
        $user = $this->getUser();
        $done_lessons = $user->getDoneLessons();

        return $this->render('formation/show.html.twig', [
            'controller_name' => 'FormationController',
            'formation' => $formation,
            'sections' => $sections,
            'lessons' => $lessons,
            'done_lessons' => $done_lessons
        ]);
    }

    #[Route('/formations/{slug}/{id_section}/{id}', name: 'app_lesson_show')]
    public function showLesson(Lesson $lesson): Response
    {
        return $this->json([
            'title' => $lesson->getTitle(),
            'video' => $lesson->getVideo(),
            'text' => $lesson->getText(),
        ]);
    }

    #[Route('/formations/{slug}/{id_section}/{id}/done', name: 'app_lesson_done')]
    public function lessonDone(Lesson $lesson): Response
    {
        $user = $this->getUser();
        $done_lessons = $user->getDoneLessons()->toArray();

        if (in_array($lesson, $done_lessons)) {
            $user->removeDoneLesson($lesson);
            $this->em->persist($user);
            $this->em->flush();

            return $this->json([
                'message' => 'LESSON_REMOVED',
                'src' => "/images/course-img2.jpg"
            ]);
        }

        $user->addDoneLesson($lesson);
        $this->em->persist($user);
        $this->em->flush();

        return $this->json([
            'message' => 'LESSON_DONE'
        ]);
    }

}
