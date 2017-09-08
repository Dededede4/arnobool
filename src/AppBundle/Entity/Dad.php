<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dad
 *
 * @ORM\Table(name="dad")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DadRepository")
 */
class Dad
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="childUpdatedAt", type="datetime", nullable=true)
     */
    private $childUpdatedAt;


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
     * Set childUpdatedAt
     *
     * @param \DateTime $childUpdatedAt
     *
     * @return Dad
     */
    public function setChildUpdatedAt($childUpdatedAt)
    {
        $this->childUpdatedAt = $childUpdatedAt;

        return $this;
    }

    /**
     * Get childUpdatedAt
     *
     * @return \DateTime
     */
    public function getChildUpdatedAt()
    {
        return $this->childUpdatedAt;
    }
}

