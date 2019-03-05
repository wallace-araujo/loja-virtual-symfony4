<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TbEnderecoRepository")
 */
class TbEndereco
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
    * coment: nome da rua
    * @ORM\Column(type="string", length=150)
    */
    private $rua;

    /**
    * coment: numero da casa
    * @ORM\Column(type="string", length=50)
    */
    private $numero;

    /**
    * coment: nome do bairro
    * @ORM\Column(type="string", length=50)
    */
    private $bairro;

    /**
    * coment: cep do endereço
    * @ORM\Column(type="string", length=20)
    */
    private $cep;

    public function getId(): ?int
    {
        return $this->id;
    }

    //START--------------------------
    public function getrua()
    {
        return $this->rua;
    }
    public function setrua($rua)
    {
        $this->rua = $rua;
        return $this;
    }
    //END--------------------------

    //START--------------------------
    public function getnumero()
    {
        return $this->numero;
    }
    public function setnumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }
    //END--------------------------

    //START--------------------------
    public function getbairro()
    {
        return $this->bairro;
    }
    public function setbairro($bairro)
    {
        $this->bairro = $bairro;
        return $this;
    }
    //END--------------------------    

    //START--------------------------
    public function getcep()
    {
        return $this->cep;
    }
    public function setcep($cep)
    {
        $this->cep = $cep;
        return $this;
    }
    //END--------------------------   

}
