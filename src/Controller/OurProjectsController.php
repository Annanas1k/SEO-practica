<?php

namespace App\Controller;

use App\Entity\OurProjects;
use App\Repository\OurProjectsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OurProjectsController extends AbstractController
{
    #[Route('/projects', name: 'app_our_projects')]
    public function index(OurProjectsRepository $projectRepository): Response
    {
        $projects = $projectRepository->findAll();
        $types = [];

        // Colectăm toate tipurile unice
        foreach ($projects as $project) {
            $types[] = $project->getType();
        }

        // Eliminăm duplicatelor
        $types = array_unique($types);

        return $this->render('our_projects/index.html.twig', [
            'projects' => $projects,
            'types' => $types,
        ]);
    }

}
