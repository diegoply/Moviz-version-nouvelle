<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $websitename = 'Moviz';
        return $this->render('page/index.html.twig', [
            'websiteName' => $websitename,
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        $name ='Diego ply';
        return $this->render('page/about.html.twig', [
            'name' => $name,
         
        ]);
    }
}
