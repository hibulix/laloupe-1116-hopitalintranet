<?php

namespace HopitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certifications
 */
class Certifications
{
    /**
     * @var int
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}