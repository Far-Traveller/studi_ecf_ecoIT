<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Entity\Lesson;
use App\Entity\Section;
use App\Repository\FormationRepository;
use App\Repository\LessonRepository;
use App\Repository\SectionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormationController extends AbstractController
{
//    private EntityManagerInterface $em;
    private FormationRepository $formationRepo;
    private SectionRepository $sectionRepo;
    private LessonRepository $lessonRepo;

    public function __construct(FormationRepository $formationRepo,
                                SectionRepository $sectionRepo, LessonRepository $lessonRepo)
    {
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

    #[Route('/formations/{id}', name: 'app_formation_show')]
    public function show(Formation $formation): Response
    {
        $id_formation = $formation->getId();
        $sections = $this->sectionRepo->findBy(['formation' => $id_formation]);
        $lessons = $this->lessonRepo->findAll();

        return $this->render('formation/show.html.twig', [
            'controller_name' => 'FormationController',
            'formation' => $formation,
            'sections' => $sections,
            'lessons' => $lessons
        ]);
    }

    #[Route('/formations/{id}/lesson/{id_lesson}', name: 'app_lesson_show')]
    public function showLesson(): Response
    {

    }


}
