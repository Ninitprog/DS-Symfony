<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TacheController extends AbstractController
{
    /**
     * @Route("/tache", name="app_tache")
     */
    public function index(): Response
    {
        return $this->render('tache/index.html.twig', [
            'controller_name' => 'TacheController',
        ]);
    }
    /**
     * @Route("/ListeTaches", name="liste")
     */
    public function ListeTaches(): Response
    {
        return $this->render('tache/index.html.twig', [
            'controller_name' => 'TacheController',
        ]);
    }
    /**
     * @Route("/tache", name="app_tache")
     */
    public function taches(): Response
    {
        return $this->render('tache/index.html.twig', [
            'controller_name' => 'TacheController',
        ]);
    }
    /**
     * @Route("/suprTaches", name="supr")
     */
    public function suprTaches(): Response
    {
        return $this->render('tache/index.html.twig', [
            'controller_name' => 'TacheController',
        ]);
    }
    /**
     * @Route("/creerTaches", name="crer")
     */
    public function creerTaches(): Response
    {
        return $this->render('tache/index.html.twig', [
            'controller_name' => 'TacheController',
        ]);
    }
    /**
     * @Route("/inserTaches", name="inser")
     */
    public function inserTaches(): Response
    {
        return $this->render('tache/index.html.twig', [
            'controller_name' => 'TacheController',
        ]);
    }
}
