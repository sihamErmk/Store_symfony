<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MyspaceController extends AbstractController
{
    #[Route('/myspace', name: 'app_myspace')]
    public function index(): Response
    {
        return $this->render('myspace/index.html.twig', [
            'controller_name' => 'MyspaceController',
        ]);
    }
}
