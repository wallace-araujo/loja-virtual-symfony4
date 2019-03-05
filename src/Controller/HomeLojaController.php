<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeLojaController extends AbstractController
{
    /**
     * @Route("/", name="home_loja")
     */
    public function index()
    {
        return $this->render('home_loja/index.html.twig', [
            'controller_name' => 'HomeLojaController',
        ]);
    }
}
