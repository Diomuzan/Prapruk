<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
class PraprukController extends AbstractController {
    #[Route('/Home', name: 'Home')]
    public function index(): Response {
        return $this->render('Prapruk_Home.html.twig', ['controller_name' => 'PraprukController',]);
    }

    #[Route('/Webshop', name: 'webshop')]
    public function webshop(): Response {
        return $this->render('Prapruk_Webshop.html.twig', ['controller_name' => 'PraprukController',]);
    }
}
