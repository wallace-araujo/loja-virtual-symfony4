<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TbCaracteristicasRepository")
 */
class TbCaracteristicas
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
    * coment: titulo das caracteristicas
    * @ORM\Column(type="string", length=255)
    */
    private $titulocaracteristicas;

    /**
    * coment: caracteristicas texto
    * @ORM\Column(type="text")
    */
    private $textcaracteristicas;

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
    public function gettitulocaracteristicas()
    {
        return $this->titulocaracteristicas;
    }
    public function settitulocaracteristicas($titulocaracteristicas)
    {
        $this->titulocaracteristicas = $titulocaracteristicas;
        return $this;
    }
    //END--------------------------

    //START--------------------------
    public function gettextcaracteristicas()
    {
        return $this->textcaracteristicas;
    }
    public function settextcaracteristicas($textcaracteristicas)
    {
        $this->textcaracteristicas = $textcaracteristicas;
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
