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
            'website-audit' => ['name' => 'Website Audit', 'slug' => 'website-audit', 'description' => ''],
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
            'website-audit' => ['name' => 'Website Audit', 'slug' => 'website-audit', 'description' => 'Any company planning to promote its business online or having had not very successful experience in promotion, first and foremost, conducts a website audit. Only a comprehensive analysis of the website, evaluation of competitors, and business peculiarities provide a complete picture of the actual state of affairs, the required budget, and the promotion strategy.'],
            'website-design' => ['name' => 'Website Design', 'slug' => 'website-design', 'description' => 'When entering any website in Moldova, the first thing you notice is what? Regardless of the actual answer, in the first few seconds of opening a website in a browser tab, any visitor subconsciously evaluates the appearance – that is, the website design. Only after the visitor decides if they find being on this site pleasant, they continue to explore it further. No matter how interesting the information on your page is, the likelihood that the visitor will continue using the resource is too low if the website design doesn’t appeal to them.'],
            'website-development' => ['name' => 'Website Development', 'slug' => 'website-development', 'description' => 'Successful business in Moldova – is a business that keeps up with the times. Modern individuals and potential customers spend more and more of their time online. On websites, they seek information, make purchases, earn money, communicate with friends, and relax. It’s evident that to stay ahead of your competitors, your business needs to conquer the vast spaces of the internet, and that means you need your own website.'],
            'content-writing' => ['name' => 'Content Writing', 'slug' => 'content-writing', 'description' => 'A common misconception among many website owners is the prevailing belief that visitors rarely pay attention to the textual content of a website. Overlooking this fact, owners fill their sites with unfiltered, low-quality information. Even if someone decides to read it, they are likely to abandon the endeavor within a minute.'],
            'websites-maintenance' => ['name' => 'Websites Maintenance', 'slug' => 'websites-maintenance', 'description' => 'Supporting a website is equivalent to managing a business. The responsibilities of administering internet resources should be entrusted to individuals capable of maintaining the site at a high level and having the potential to improve the entire project as a whole.'],
            'seo-optimization' => ['name' => 'SEO Optimization', 'slug' => 'seo-optimization', 'description' => 'Laptop, fax, a paper folder, calculator, even the paper clip lying lonely on the office table – you can touch them all. You see the system administrator who has fixed the network, shake hands with the courier delivering your mail. Thanking the technician for promptly replacing the printer cartridge, you go online and try to find your website. You type in the search for your product or service (just as a potential buyer would), but… you don’t find it at the top. You try to find the answer to the obvious question – how does my target audience know that the best offer for their query is with us?'],
            'website-promotion' => ['name' => 'Website Promotion', 'slug' => 'website-promotion', 'description' => 'SEMSEO, a Moldovan IT company, over many years of practice, has encountered cases where a high-quality internet resource had minimal visitor metrics, while a hastily assembled site proved to be much more popular. Search engine optimization is one of the fundamental stages in working on an internet resource for its effective functioning.'],
            'google-adwords' => ['name' => 'Google AdWords', 'slug' => 'google-adwords', 'description' => 'SEMSEO, thanks to its effectiveness, obtained the Google Partner status in 2013 (Verified here…). We will create a separate advertising account for you and provide full access to it, set up advertising campaigns, select keywords, and create attractive ads. We will optimize the advertising, manage your Google advertising, and provide reporting and suggestions for increasing efficiency in a timely manner.'],
            'targeted-advertising' => ['name' => 'Targeted advertising', 'slug' => 'targeted-advertising', 'description' => 'SEMSEO – your reliable partner in the field of digital marketing. Our IT company in Moldova specializes in creating and optimizing targeted advertising campaigns on social networks such as Facebook and Instagram. That’s why we are the perfect choice for businesses looking to maximize their online potential.'],
            'web-hosting' => ['name' => 'Web Hosting', 'slug' => 'web-hosting', 'description' => 'The proper hosting and domain name selection are crucial for the proper functioning of a website. In today’s online landscape, you may come across numerous offers advertising paid website hosting. However, there are no guarantees that the services of the chosen company will be of high quality.'],
            'crm-md' => ['name' => 'CRM MD', 'slug' => 'crm-md', 'description' => 'SEMSEO, based on years of experience using various CRMs in its own operations and analyzing clients’ CRMs for over 10 years, offers the installation, configuration, and integration of one of the most optimal, multifunctional, and user-friendly CRMs on our domestic and international market.'],
            'amo-crm' => ['name' => 'AMO CRM', 'slug' => 'amo-crm', 'description' => 'SEMSEO, focused on the integration, installation, and configuration of amoCRM in Moldova since 2016, has extensive experience in attracting website visitors and converting them into customers through effective amoCRM configuration. Official partnership with amoCRM highlights the company’s high status in this field.'],
            'yclients' => ['name' => 'Yclients', 'slug' => 'yclients', 'description' => 'The YCLIENTS CRM system is designed for use in various business sectors where effective customer relationship management and appointment scheduling are essential. '],
            'jivochat' => ['name' => 'Jivochat', 'slug' => 'jivochat', 'description' => 'SEMSEO has been an official partner of Jivochat in Moldova since 2018. We provide services for installing and configuring the online chat on your website. Additionally, through our company, you can make payments for Jivochat licenses via bank transfer + 20% VAT at the exchange rate of the National Bank of Moldova, receiving e-invoices.'],
            'smartchat-md' => ['name' => 'Smartchat.MD', 'slug' => 'smartchat-md', 'description' => 'SEMSEO установку настройку и возможность оплатить лицензии SmartChat.md по перечислению.'],
            'sms-md' => ['name' => 'SMS.MD', 'slug' => 'sms-md', 'description' => 'Our services for setting up SMS broadcasts are designed to provide you with a highly effective and professional tool for communicating with your audience. We guarantee high quality and a personalized approach to each client.'],
            'proofdy' => ['name' => 'Proofdy', 'slug' => 'proofdy', 'description' => 'Social proofs by Proofdy are the best FOMO tool for effortlessly boosting conversions and trust on your website. Proofdy is a unique marketing tool that allows you to maintain communication with existing customers and attract new ones to increase sales. Examples of ready-made solutions for setting up hot notifications for various business industries and service sectors can be found on the website https://proofdy.com/. Create your own hot notifications and attract new customers!'],
            'marquiz' => ['name' => 'Marquiz', 'slug' => 'marquiz', 'description' => 'SEMSEO offers services for the installation and configuration of marketing quizzes on your website.'],
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
