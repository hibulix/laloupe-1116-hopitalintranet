<?php

namespace HopitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Idees
 */
class Idees
{

    /**
     * Set ideestitle
     *
     * @param string $ideestitle
     * @return Idees
     */
    public function setIdeestitle($ideestitle)
    {
        $this->ideestitle = $ideestitle;

        return $this;
    }

    /**
     * Get ideestitle
     *
     * @return string
     */
    public function getIdeestitle()
    {
        return $this->ideestitle;
    }




    /**
     * @var int
     */
    private $id;


    /**
     * @var string
     */
    private $ideestitle;






    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> book










<<<<<<< HEAD
=======
>>>>>>> b5081c74eadd43691d274f1232309d8ee62c399b
>>>>>>> book
    
}




