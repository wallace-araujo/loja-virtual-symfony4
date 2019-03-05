<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CarrinhoComprasController extends AbstractController
{
    /**
     * @Route("/carrinho/compras", name="carrinho_compras")
     */
    public function index()
    {
        return $this->render('carrinho_compras/index.html.twig', [
            'controller_name' => 'CarrinhoComprasController',
        ]);
    }
}
