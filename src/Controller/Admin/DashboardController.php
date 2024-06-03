<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{



    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
//        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
//
//        // Option 1. Make your dashboard redirect to the same page for all users
//        return $this->redirect($adminUrlGenerator->setController(UserController::class)->generateUrl());



        // Option 2. Make your dashboard redirect to different pages depending on the user

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
         return $this->render('admin/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('SEO Practica');

    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),
            MenuItem::linkToRoute('Back to Home Page','fas fa-home', 'app_home'),
            MenuItem::section('Blog'),

            MenuItem::section('Users'),
//            MenuItem::linkToCrud('Users', 'fa fa-user', User::class),
        ];
    }
}
