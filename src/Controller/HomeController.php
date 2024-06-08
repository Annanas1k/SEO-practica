<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {

        $data = [
            [
                'image' => '/assets/img/home1.png',
                'title' => 'We analyze and  improve',
                'description' => 'A website audit is essential for a thorough analysis of its technical, content, and marketing aspects with the goal of identifying issues, optimizing the site’s performance, and improving its effectiveness.',
                'link' => '/aboutus'
            ],
            [
                'image' => '/assets/img/home2.png',
                'title' => 'Creating websites and design',
                'description' => 'We specialize in creating effective websites, providing unique design, intuitive navigation, and high performance to achieve the business goals of our clients.',
                'link' => 'example.com'
            ],
            [
                'image' => '/assets/img/home3.png',
                'title' => 'We write compelling sales texts',
                'description' => 'Selling, yet search engine optimized texts with an optimal amount of keywords are a necessity for website promotion. Our copywriting is unique, easily readable, and most importantly, sells your products!',
                'link' => 'example.com'
            ],
            [
                'image' => '/assets/img/home4.png',
                'title' => 'SEO Optimizing websites',
                'description' => 'With our more than 15 years of experience, we conduct comprehensive SEO optimization for websites, aimed at improving their visibility in search engines and increasing organic traffic.',
                'link' => 'example.com'
            ],
            [
                'image' => '/assets/img/home5.png',
                'title' => 'Planning a successful advertising campaign',
                'description' => 'The peculiarity of contextual advertising lies in the fact that it is shown only to interested users, meaning every invested leu guarantees a return.',
                'link' => 'example.com'
            ],
            [
                'image' => '/assets/img/home6.png',
                'title' => 'Sharing about you on social media',
                'description' => 'Social networks are one of the most effective ways to communicate with your target audience. We know how to attract subscribers and retain them with unique, interesting content.',
                'link' => 'example.com'
            ],
            [
                'image' => '/assets/img/home7.png',
                'title' => 'Manages and develops your website',
                'description' => 'We provide full management and administration of the website, including technical support, content updates, and ensuring continuous functionality for optimal performance.',
                'link' => 'example.com'
            ]

        ];
        $backUrl = "/assets/img/background_home.png";
        $youtubeUrl = "https://www.youtube.com/embed/1VJenmt9LCk";

        return $this->render('home/index.html.twig', [
            'data' => $data,
            'youtubeUrl' => $youtubeUrl,
            'backUrl' => $backUrl,
        ]);
    }

}
