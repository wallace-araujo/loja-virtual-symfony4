<?php

namespace App\Controller;

use App\Entity\TbProdutos;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomeLojaController extends AbstractController
{
    /**
     * @Route("/", name="HomeLoja")
     * @Template("home_loja/index.html.twig")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $produtos = $em->getRepository(TbProdutos::class)->findAll();
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
