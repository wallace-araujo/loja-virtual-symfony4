<?php

namespace App\Controller;

use App\Entity\Tborder;
use App\Entity\Tbprodutoorder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CheckoutController extends AbstractController
{
    /**
     * @Route("/checkout", name="checkout")
     * @Template("checkout/index.html.twig")
     */
    public function index(SessionInterface $session)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $produtos = $session->get('Carrinho', []);
        //dump($produtos);

        $order = $this->insertOrder();
        $this->insertOrderProduct($order,$produtos);
        $session->set('Carrinho', []); 

        return [
            'NumeroPedido' => $order->getId(),
        ];
    }


    public function insertOrder()
    {
        $em = $this->getDoctrine()->getManager();
        $userLogado = $this->getUser();
        $Order = new Tborder();
        $Order->setuserid($userLogado->getId());
        $Order->setpagamento('BOLETO');
        $Order->setstatus('PAGO');

        $date =new \DateTime();
        $date->format('Y-m-d H:i:s');
        $Order->setdata($date);

        $em->persist($Order);
        $em->flush();

        return $Order;
    }

    public function insertOrderProduct($order,$produtos)
    {   
        $em = $this->getDoctrine()->getManager();
        foreach($produtos as  $key => $produto ){

            $ProductOrder = new Tbprodutoorder();
            $ProductOrder->setorderid($order->getId());
            $ProductOrder->setproduto_id($key);
            $ProductOrder->setpreco($produto['Item']->getpreco());
            $ProductOrder->setqtd($produto['qtd']);
            $em->persist($ProductOrder);
            $em->flush();
        }

    }
}
