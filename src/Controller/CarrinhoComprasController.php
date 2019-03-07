<?php

namespace App\Controller;

use App\Entity\TbProdutos;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CarrinhoComprasController extends AbstractController
{

    public $items = [];


    public function __construct(SessionInterface $session)
    {
        if($session->has('Carrinho')){
            $Carrinho = $session->get('Carrinho', []);
            $this->items = $Carrinho;
            //dump($Carrinho );
        }
    }

    /**
     * @Route("/carrinho/compras", name="carrinho_compras")
     * @Template("carrinho_compras/index.html.twig")
     */
    public function index(SessionInterface $session)
    {
        $Produtos = $session->get('Carrinho', []);
        // dump($Produtos);
        // dump($this->totalItems());

        return [
            'Produtos' => $Produtos,
            'Total' => $this->totalCarrinho(),
        ];
    }

    /**
    * Comentario: add produto no carrinho e guardo  na sessao  futuro redis. 
    * @Route("/add/carrinho/{id}", name="add_carrinho")
    */
    public function addCarrinho(TbProdutos $Produto,SessionInterface $session)
    {
        if(isset($this->items[$Produto->getId()])){
            // existe o produto no carrinho add incremento na qtd
            $this->items[$Produto->getId()] = [
                'Item' =>$Produto,
                'qtd' => $this->items[$Produto->getId()]['qtd'] + 1,
            ];
        }else{
            // nao existe add o produto
            $this->items[$Produto->getId()] = [
                'Item' =>$Produto,
                'qtd' => 1
            ];
        }
        $session->set('Carrinho', $this->items);
        //dump($this->items);
        // exit;
        
        return $this->redirectToRoute('carrinho_compras');
    }


    /**
    * Comentario: remover produto do carrinho diminuindo a qtd
    * @Route("/remove/Qtdcarrinho/{id}", name="removeQtd_carrinho")
    */
    public function removeQtdCarrinho(TbProdutos $Produto,SessionInterface $session)
    {
        if(isset($this->items[$Produto->getId()]) && $this->items[$Produto->getId()]['qtd'] > 1 ){
            $this->items[$Produto->getId()] = [
                'Item' =>$Produto,
                'qtd' => $this->items[$Produto->getId()]['qtd'] - 1,
            ];
        }elseif(isset($this->items[$Produto->getId()])){
            unset($this->items[$Produto->getId()]);
        }
        $session->set('Carrinho', $this->items);

        return $this->redirectToRoute('carrinho_compras');
    }

        /**
    * Comentario: remover produto do carrinho
    * @Route("/remove/carrinho/{id}", name="remove_carrinho")
    */
    public function removeCarrinho(TbProdutos $Produto,SessionInterface $session)
    {
        if(isset($this->items[$Produto->getId()])){
            unset($this->items[$Produto->getId()]);
        }
        $session->set('Carrinho', $this->items);

        return $this->redirectToRoute('carrinho_compras');
    }


    public function totalCarrinho()
    {
        $total = 0;
        foreach($this->items as $item){
            //dump($item['Item']->getpreco());
            $subtotal = $item['Item']->getpreco() * $item['qtd'];
            $total += $subtotal;
        }
        return $total;
    }

    public function totalItems()
    {
        return count($this->items);
    }

}
