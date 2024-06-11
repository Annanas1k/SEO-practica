<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Twig\Environment;

class LostController extends AbstractController
{
    public function notFound(): Response
    {
        return $this->render('error/404.html.twig');
    }
}
