<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Entity\Lesson;
use App\Entity\Section;
use App\Repository\FormationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormationController extends AbstractController
{
    private EntityManagerInterface $em;
    private FormationRepository $repository;

    public function __construct(EntityManagerInterface $em, FormationRepository $repository)
    {
        $this->em = $em;
        $this->repository = $repository;
    }

    #[Route('/formations', name: 'app_formation')]
    public function index(): Response
    {
        $formations = $this->em->getRepository(Formation::class)->findAll();

        return $this->render('formation/index.html.twig', [
            'controller_name' => 'FormationController',
            'formations' => $formations
        ]);
    }

    #[Route('/formations/{id}', name: 'app_formation_show')]
    public function show(Formation $formation): Response
    {
        return $this->render('formation/show.html.twig', [
            'controller_name' => 'FormationController',
            'formation' => $formation,
            'sections' => $formation->getSection()
        ]);
    }
}
