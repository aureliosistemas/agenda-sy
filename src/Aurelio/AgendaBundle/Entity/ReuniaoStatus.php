<?php

namespace Aurelio\AgendaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReuniaoStatus
 *
 * @ORM\Table(name="reuniao_status")
 * @ORM\Entity(repositoryClass="Aurelio\AgendaBundle\Repository\ReuniaoStatusRepository")
 */
class ReuniaoStatus
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
     * @return ReuniaoStatus
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
}

