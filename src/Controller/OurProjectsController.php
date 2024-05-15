<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OurProjectsController extends AbstractController
{
    #[Route('/ourprojects', name: 'app_our_projects')]
    public function index(): Response
    {
        return $this->render('our_projects/index.html.twig', [
            'controller_name' => 'OurProjectsController',
        ]);
    }
}
