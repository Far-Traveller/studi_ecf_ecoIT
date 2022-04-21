<?php

namespace App\Controller\Admin;

use App\Entity\Formation;
use App\Entity\Lesson;
use App\Entity\Section;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {

//         $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
//         return $this->redirect($adminUrlGenerator->setController(UserCrudController::class)->generateUrl());

        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        $administratorPath = $this->redirect($adminUrlGenerator->setController(UserCrudController::class)->generateUrl());
        $instructorPath = $this->redirect($adminUrlGenerator->setController(UserCrudController::class)->generateUrl());

        if (!$this->getUser()) {
            return $this->redirectToRoute('app_homepage');

        }

        $userRole = $this->getUser()->getRoles();

        if ($userRole[0] === "ROLE_ADMIN") {
            return $this->redirect($administratorPath);
        } else if ($userRole[0] === "ROLE_INSTRUCTOR") {
            return $this->redirect($instructorPath);
        } else {
            return $this->redirectToRoute('app_homepage');
        }

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('EcoIT');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::section('Utilisateurs');
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-user', User::class);
        yield MenuItem::section('Formations');
        yield MenuItem::linkToCrud('Formations', 'fas fa-user', Formation::class);
        yield MenuItem::linkToCrud('Sections', 'fas fa-user', Section::class);
        yield MenuItem::linkToCrud('Lessons', 'fas fa-user', Lesson::class);
    }
}