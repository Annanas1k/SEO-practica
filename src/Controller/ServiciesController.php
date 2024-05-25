<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class ServiciesController extends AbstractController
{
    #[Route('/services', name: 'app_servicies')]
    public function index(): Response
    {
        $services = [
            'website-audit' => ['name' => 'Website Audit', 'slug' => 'website-audit', 'description' => 'Details about Website Audit'],
            'website-design' => ['name' => 'Website Design', 'slug' => 'website-design', 'description' => 'Details about Website Design'],
            'website-development' => ['name' => 'Website Development', 'slug' => 'website-development', 'description' => 'Details about Website Development'],
            'content-writing' => ['name' => 'Content Writing', 'slug' => 'content-writing', 'description' => 'Details about Content Writing'],
            'websites-maintenance' => ['name' => 'Websites Maintenance', 'slug' => 'websites-maintenance', 'description' => 'Details about Websites Maintenance'],
            'seo-optimization' => ['name' => 'SEO Optimization', 'slug' => 'seo-optimization', 'description' => 'Details about SEO Optimization'],
            'website-promotion' => ['name' => 'Website Promotion', 'slug' => 'website-promotion', 'description' => 'Details about Website Promotion'],
            'google-adwords' => ['name' => 'Google AdWords', 'slug' => 'google-adwords', 'description' => 'Details about Google AdWords'],
            'targeted-advertising' => ['name' => 'Targeted advertising', 'slug' => 'targeted-advertising', 'description' => 'Details about Targeted advertising'],
            'web-hosting' => ['name' => 'Web Hosting', 'slug' => 'web-hosting', 'description' => 'Details about Web Hosting'],
            'crm-md' => ['name' => 'CRM MD', 'slug' => 'crm-md', 'description' => 'Details about CRM MD'],
            'amo-crm' => ['name' => 'AMO CRM', 'slug' => 'amo-crm', 'description' => 'Details about AMO CRM'],
            'yclients' => ['name' => 'Yclients', 'slug' => 'yclients', 'description' => 'Details about Yclients'],
            'jivochat' => ['name' => 'Jivochat', 'slug' => 'jivochat', 'description' => 'Details about Jivochat'],
            'smartchat-md' => ['name' => 'Smartchat.MD', 'slug' => 'smartchat-md', 'description' => 'Details about Smartchat.MD'],
            'sms-md' => ['name' => 'SMS.MD', 'slug' => 'sms-md', 'description' => 'Details about SMS.MD'],
            'proofdy' => ['name' => 'Proofdy', 'slug' => 'proofdy', 'description' => 'Details about Proofdy'],
            'marquiz' => ['name' => 'Marquiz', 'slug' => 'marquiz', 'description' => 'Details about Marquiz'],
        ];


        return $this->render('services/index.html.twig', [
            'services' => $services,
            'selectedService' => null,
        ]);
    }

    #[Route('/services/{slug}', name: 'service_detail')]
    public function detail(string $slug): Response
    {
        $services = [
            'website-audit' => ['name' => 'Website Audit', 'slug' => 'website-audit', 'description' => 'Details about Website Audit'],
            'website-design' => ['name' => 'Website Design', 'slug' => 'website-design', 'description' => 'Details about Website Design'],
            'website-development' => ['name' => 'Website Development', 'slug' => 'website-development', 'description' => 'Details about Website Development'],
            'content-writing' => ['name' => 'Content Writing', 'slug' => 'content-writing', 'description' => 'Details about Content Writing'],
            'websites-maintenance' => ['name' => 'Websites Maintenance', 'slug' => 'websites-maintenance', 'description' => 'Details about Websites Maintenance'],
            'seo-optimization' => ['name' => 'SEO Optimization', 'slug' => 'seo-optimization', 'description' => 'Details about SEO Optimization'],
            'website-promotion' => ['name' => 'Website Promotion', 'slug' => 'website-promotion', 'description' => 'Details about Website Promotion'],
            'google-adwords' => ['name' => 'Google AdWords', 'slug' => 'google-adwords', 'description' => 'Details about Google AdWords'],
            'targeted-advertising' => ['name' => 'Targeted advertising', 'slug' => 'targeted-advertising', 'description' => 'Details about Targeted advertising'],
            'web-hosting' => ['name' => 'Web Hosting', 'slug' => 'web-hosting', 'description' => 'Details about Web Hosting'],
            'crm-md' => ['name' => 'CRM MD', 'slug' => 'crm-md', 'description' => 'Details about CRM MD'],
            'amo-crm' => ['name' => 'AMO CRM', 'slug' => 'amo-crm', 'description' => 'Details about AMO CRM'],
            'yclients' => ['name' => 'Yclients', 'slug' => 'yclients', 'description' => 'Details about Yclients'],
            'jivochat' => ['name' => 'Jivochat', 'slug' => 'jivochat', 'description' => 'Details about Jivochat'],
            'smartchat-md' => ['name' => 'Smartchat.MD', 'slug' => 'smartchat-md', 'description' => 'Details about Smartchat.MD'],
            'sms-md' => ['name' => 'SMS.MD', 'slug' => 'sms-md', 'description' => 'Details about SMS.MD'],
            'proofdy' => ['name' => 'Proofdy', 'slug' => 'proofdy', 'description' => 'Details about Proofdy'],
            'marquiz' => ['name' => 'Marquiz', 'slug' => 'marquiz', 'description' => 'Details about Marquiz'],
        ];


        if (!array_key_exists($slug, $services)) {
            throw $this->createNotFoundException('Service not found');
        }

        return $this->render('services/index.html.twig', [
            'services' => $services,
            'selectedService' => $services[$slug],
        ]);
    }
}
