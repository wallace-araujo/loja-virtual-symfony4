<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TbProdutosRepository")
 */
class TbProdutos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
    * coment: nome do produto
    * @ORM\Column(type="string", length=255)
    */ 
    private $nome;

    /**
    * coment: imagem do produto via cdn
    * @ORM\Column(type="text")
    */ 
    private $imagem;

    /**
    * coment: preço do produto definido como decimal
    * @ORM\Column(type="decimal", precision=10, scale=2)
    */ 
    private $preco;

    /**
    * coment: breve descriçao pequeno texto
    * @ORM\Column(type="text")
    */
    private $descricao;

    /**
    * coment: id da categoria que vinculo o produto para  uma ou mais categoria.
    * @ORM\Column(type="integer")
    */    
    private $categorias;

    /**
    * coment: id que vincula oproduto para sua caracteristica especifica.
    * @ORM\Column(type="integer")
    */
    private $Caracteristicas;

    /**
    * coment: data da criaçao do produto
    * @ORM\Column(type="datetime")
    */
    private $datecreate;



    public function getId(): ?int
    {
        return $this->id;
    }


    //START--------------------------
    public function getnome()
    {
        return $this->nome;
    }
    public function setnome($nome)
    {
        $this->nome = $nome;
        return $this;
    }
    //END--------------------------
    //START--------------------------
    public function getimagem()
    {
        return $this->imagem;
    }
    public function setimagem($imagem)
    {
        $this->imagem = $imagem;
        return $this;
    }
    //END--------------------------
    //START--------------------------
    public function getpreco()
    {
        return $this->preco;
    }
    public function setpreco($preco)
    {
        $this->preco = $preco;
        return $this;
    }
    //END--------------------------
    //START--------------------------
    public function getdescricao()
    {
        return $this->descricao;
    }
    public function setdescricao($descricao)
    {
        $this->descricao = $descricao;
        return $this;
    }
    //END--------------------------
    //START--------------------------
    public function getcategorias()
    {
        return $this->categorias;
    }
    public function setcategorias($categorias)
    {
        $this->categorias = $categorias;
        return $this;
    }
    //END--------------------------
    //START--------------------------
    public function getCaracteristicas()
    {
        return $this->Caracteristicas;
    }
    public function setCaracteristicas($Caracteristicas)
    {
        $this->Caracteristicas = $Caracteristicas;
        return $this;
    }
    //END--------------------------
    //START--------------------------
    public function getdatecreate()
    {
        return $this->datecreate;
    }
    public function setdatecreate($datecreate)
    {
        $this->datecreate = $datecreate;
        return $this;
    }
    //END--------------------------

}
