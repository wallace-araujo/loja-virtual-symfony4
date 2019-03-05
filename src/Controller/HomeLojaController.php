<?php

namespace App\Controller;

use App\Entity\TbProdutos;
use App\Entity\TbCategorias;
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



    /**
     * @Route("/{name}/{id}", name="View_categoria")
     * @Template("View/_categoria.html.twig")
     */
    public function View_categoria(TbCategorias $Categorias)
    {
        //Request $request,
        // $paginacao  = $this->get('knp_paginator');
        // $Categorias  = $paginacao->paginate(
        //     $Categorias,$request->query->getInt('page', 1),3
        // );

        return [
            'Categorias' => $Categorias,
        ];
    }



    /**
     * @Template("_menu.html.twig")
    */
    public function ViewMenu()
    {
        $em = $this->getDoctrine()->getManager();
        $Categorias = $em->getRepository(TbCategorias::class)->findAll();

        return [
            'Categorias' => $Categorias,
        ];
    }

}
