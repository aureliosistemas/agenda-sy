<?php

namespace Aurelio\AgendaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReuniaoDia
 *
 * @ORM\Table(name="reuniao_dia")
 * @ORM\Entity(repositoryClass="Aurelio\AgendaBundle\Repository\ReuniaoDiaRepository")
 */
class ReuniaoDia
{

    public function __toString() {
        return $this->data;
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
     * @var \Aurelio\AgendaBundle\Entity\Reuniao
     *
     * @ORM\ManyToOne(targetEntity="\Aurelio\AgendaBundle\Entity\Reuniao", inversedBy="datas")
     * @ORM\JoinColumn(name="reuniao_id", referencedColumnName="id")
     */
    private $reuniao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date")
     */
    private $data;


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

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return ReuniaoDia
     */
    public function setData(\DateTime $data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }
}

