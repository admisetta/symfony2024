<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PrincipalController extends AbstractController
{
    #[Route('/principal', name: 'app_principal')]
    public function index(): Response
    {
        return $this->render('principal/index.html.twig', [
            'controller_name' => 'PrincipalController',
        ]);
    }

    #[Route('/', name: 'app_accueil')]
    public function accueil(): Response
    {
        $message="Accueil";
        return $this->render('model.html.twig',['message'=>$message]);
    }

    #[Route('/apropos', name: 'app_apropos')]
    public function apropos(): Response
    {
        $message="à propos";
        return $this->render('model.html.twig',['message'=>$message]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        $message="contact";
        return $this->render('model.html.twig',['message'=>$message]);
    }

    #[Route('/services', name: 'app_services')]
    public function services(): Response
    {
        $message="services";
        return $this->render('model.html.twig',['message'=>$message]);
    }
}
