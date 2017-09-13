<?php

namespace Aurelio\AgendaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReuniaoPessoa
 *
 * @ORM\Table(name="reuniao_pessoa")
 * @ORM\Entity(repositoryClass="Aurelio\AgendaBundle\Repository\ReuniaoPessoaRepository")
 */
class ReuniaoPessoa
{

    public function __toString() {
        return $this->nome;
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
     * @ORM\Column(name="dias", type="text", nullable=true)
     */
    private $dias;

    /**
     * @var \Aurelio\AgendaBundle\Entity\Reuniao
     *
     * @ORM\ManyToOne(targetEntity="\Aurelio\AgendaBundle\Entity\Reuniao", inversedBy="pessoas")
     * @ORM\JoinColumn(name="reuniao_id", referencedColumnName="id")
     */
    private $reuniao;

    


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
     * @return ReuniaoPessoa
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
     * Set dias
     *
     * @param array $dias
     *
     * @return ReuniaoPessoa
     */
    public function setDias($dias)
    {   
        $json = json_encode($dias);
        $this->dias = $json;

        return $this;
    }

    /**
     * Get dias
     *
     * @return array
     */
    public function getDias()
    {
        return json_decode($this->dias);
    }

    /**
     * Set reuniao
     *
     * @param \Aurelio\AgendaBundle\Entity\Reuniao $reuniao
     *
     * @return ReuniaoPessoa
     */
    public function setReuniao(\Aurelio\AgendaBundle\Entity\Reuniao $reuniao)
    {
        $this->reuniao = $reuniao;

        return $this;
    }

    /**
     * Get reuniao
     *
     * @return \Aurelio\AgendaBundle\Entity\Reuniao
     */
    public function getReuniao()
    {
        return $this->reuniao;
    }
}

