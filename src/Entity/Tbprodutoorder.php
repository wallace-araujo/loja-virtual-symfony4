<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TbprodutoorderRepository")
 * @ORM\Table(name="tb_produto_order")
 */
class Tbprodutoorder
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
    * @ORM\Column(type="integer")
    */ 
    private $orderid;

    /**
    * @ORM\Column(type="integer")
    */ 
    private $produto_id;

    /**
    * @ORM\Column(type="decimal", precision=10, scale=2)
    */    
    private $preco;

    /**
     * @ORM\Column(type="integer")
     */
    private $qtd;



    public function getId(): ?int
    {
        return $this->id;
    }


    //-----------------------------
    public function getorderid()
    {
        return $this->orderid;
    }

    public function setorderid($orderid)
    {
        $this->orderid = $orderid;

        return $this;
    }
    //-----------------------------
    public function getproduto_id(): ?string
    {
        return $this->produto_id;
    }

    public function setproduto_id(string $produto_id): self
    {
        $this->produto_id = $produto_id;

        return $this;
    }
    //-----------------------------
    public function getpreco(): ?string
    {
        return $this->preco;
    }

    public function setpreco(string $preco): self
    {
        $this->preco = $preco;

        return $this;
    }
    //-----------------------------
    public function getqtd(): ?string
    {
        return $this->qtd;
    }

    public function setqtd(string $qtd): self
    {
        $this->qtd = $qtd;

        return $this;
    }
    //-----------------------------
}
