<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kid
 *
 * @ORM\Table(name="kid")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\KidRepository")
 */
class Kid
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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Dad")
     */
    private $dad;


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
     * Set description
     *
     * @param string $description
     *
     * @return Kid
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dad
     *
     * @param \AppBundle\Entity\Dad $dad
     *
     * @return Kid
     */
    public function setDad(\AppBundle\Entity\Dad $dad = null)
    {
        $this->dad = $dad;

        return $this;
    }

    /**
     * Get dad
     *
     * @return \AppBundle\Entity\Dad
     */
    public function getDad()
    {
        return $this->dad;
    }
}
