<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\LessonRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    private UserRepository $userRepo;
    private LessonRepository $lessonRepo;

    public function __construct(UserRepository $userRepo, LessonRepository $lessonRepo)
    {
        $this->userRepo = $userRepo;
        $this->lessonRepo = $lessonRepo;
    }


    #[Route('/profil/{id}', name: 'app_learner_profile')]
    public function index(User $user): Response
    {
        $done_lessons = $user->getDoneLessons();
        //$done_lessons = $this->lessonRepo->findBy(['doneLessons' => $id_user]);

        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
            'done_lessons' => $done_lessons
        ]);
    }

}
