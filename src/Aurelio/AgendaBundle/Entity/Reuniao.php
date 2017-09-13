<?php

namespace Aurelio\AgendaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Reuniao
 *
 * @ORM\Table(name="reuniao")
 * @ORM\Entity(repositoryClass="Aurelio\AgendaBundle\Repository\ReuniaoRepository")
 */
class Reuniao
{   

    public function __toString() {
        return $this->nome;
    }
    
    public function __construct()
    {
        $this->pessoas = new ArrayCollection();
        $this->datas = new ArrayCollection();
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text")
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="local", type="string", length=255)
     */
    private $local;


    /**
     * @var \Aurelio\AgendaBundle\Entity\ReuniaoStatus
     *
     * @ORM\ManyToOne(targetEntity="\Aurelio\AgendaBundle\Entity\ReuniaoStatus", inversedBy="datas")
     * @ORM\JoinColumn(name="status", referencedColumnName="id")
     */
    private $status;


    /**
     * @ORM\OneToMany(targetEntity="\Aurelio\AgendaBundle\Entity\ReuniaoPessoa", mappedBy="reuniao")
     */
    private $pessoas;

    /**
     * @ORM\OneToMany(targetEntity="\Aurelio\AgendaBundle\Entity\ReuniaoDia", mappedBy="reuniao")
     */
    private $datas;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Reuniao
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Reuniao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set local
     *
     * @param string $local
     *
     * @return Reuniao
     */
    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return string
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set status
     *
     * @param \Aurelio\AgendaBundle\Entity\ReuniaoStatus $status
     *
     * @return Reuniao
     */
    public function setStatus(\Aurelio\AgendaBundle\Entity\ReuniaoStatus $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \Aurelio\AgendaBundle\Entity\ReuniaoStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get pessoas
     *
     * @return array
     */
    public function getPessoas()
    {
        return $this->pessoas;
    }

       /**
     * Get pessoas
     *
     * @return array
     */
    public function getDatas()
    {
        return $this->datas;
    }
}

