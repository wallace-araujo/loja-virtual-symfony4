<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TborderRepository")
 * @ORM\Table(name="tb_order")
 */
class Tborder
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
    private $userid;


    /**
    * @ORM\Column(type="string", length=100)
    */     
    private $pagamento;

    /**
    * @ORM\Column(type="string", length=100)
    */ 
    private $status;


    /**
    * @ORM\Column(type="datetime")
    */    
    private $data;


    public function getId(): ?int
    {
        return $this->id;
    }
    //-----------------------------
    public function getuserid(): ?string
    {
        return $this->userid;
    }

    public function setuserid(string $userid): self
    {
        $this->userid = $userid;

        return $this;
    }
    //-----------------------------

    public function getpagamento(): ?string
    {
        return $this->pagamento;
    }

    public function setpagamento(string $pagamento): self
    {
        $this->pagamento = $pagamento;

        return $this;
    }
    //-----------------------------
    public function getstatus(): ?string
    {
        return $this->status;
    }

    public function setstatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
    //-----------------------------
    public function getdata(): ?string
    {
        return $this->data;
    }

    public function setdata($data)
    {
        $this->data = $data;

        return $this;
    }
    //-----------------------------


}
