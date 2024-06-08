<?php

namespace App\Controller;

use App\Repository\PriceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PricesController extends AbstractController
{
    #[Route('/prices', name: 'app_prices')]
    public function index(PriceRepository $priceRepository): Response
    {
        $prices = $priceRepository->findAll();
        $categories = [];

        // Colectăm toate categoriile unice
        foreach ($prices as $price) {
            $categories[] = $price->getCategory();
        }

        // Eliminăm duplicatelor
        $categories = array_unique($categories);

        return $this->render('prices/index.html.twig', [
            'prices' => $prices,
            'categories' => $categories,
        ]);
    }


}
