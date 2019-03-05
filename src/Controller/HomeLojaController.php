<?php

namespace App\Controller;

use App\Entity\TbProdutos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;


class HomeLojaController extends Controller
{
    /**
     * @Route("/", name="HomeLoja")
     * @Template("home_loja/index.html.twig")
     */
    public function index(Request $request)
    {
        $paginacao  = $this->get('knp_paginator');
        $em = $this->getDoctrine()->getManager();
        $produtos = $em->getRepository(TbProdutos::class)->findAll();

        $produtos  = $paginacao->paginate(
            $produtos,$request->query->getInt('page', 1),3
        );

        dump($produtos);

        return [
            'produtos' => $produtos,
        ];
    }


    /**
     * @Route("/produto/{id}", name="Detalhes_Produto")
     * @Template("View/_view_html.twig")
     */
    public function DetalheProduto(TbProdutos $Produto)
    {
        // dump($Produto);
        // exit;
        return [
            'Produto' => $Produto,
        ];

    }

}
