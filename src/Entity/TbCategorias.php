<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TbCategoriasRepository")
 */
class TbCategorias
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
    * coment: nome de categoria    
    * @ORM\Column(type="string", length=255)
    */  
    Private $nomeCategoria;

    /**
    * coment: texto de descricao
    * @ORM\Column(type="text")
    */  
    private $descricao;

    /**
    * coment: relacionamento muitos para muitos
    * @ORM\ManyToMany(targetEntity="App\Entity\TbProdutos", mappedBy="categorias" )
    */
    private $produtos;

    /**
    * coment: data da criaçao
    * @ORM\Column(type="datetime")
    */
    private $datecreate;


    public function getId(): ?int
    {
        return $this->id;
    }

    //START--------------------------
    public function getnomeCategoria()
    {
        return $this->nomeCategoria;
    }
    public function setnomeCategoria($nomeCategoria)
    {
        $this->nomeCategoria = $nomeCategoria;
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
    //START--------------------------
    public function getprodutos()
    {
        return $this->produtos;
    }
    public function setprodutos($produtos)
    {
        $this->produtos = $produtos;
        return $this;
    }
    //END--------------------------     
    

}
