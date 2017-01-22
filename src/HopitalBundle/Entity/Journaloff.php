<?php

namespace HopitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Journaloff
 */
class Journaloff
{
    public $file1;

    protected function getUploadDir()
    {
        return 'uploads';
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }

    public function getWebPath()
    {
        return null === $this->image ? null : $this->getUploadDir().'/'.$this->image;
    }

    public function getAbsolutePath()
    {
        return null === $this->image ? null : $this->getUploadRootDir().'/'.$this->image;
    }


    public function preUpload1()
    {
        if (null !== $this->file1) {
            // do whatever you want to generate a unique name
            $this->journaloffimg = uniqid().'.'.$this->file1->guessExtension();
        }
    }

    public function upload1()
    {
        if (null === $this->file1) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file1->move($this->getUploadRootDir(), $this->journaloffimg);

        unset($this->file1);
    }

    public function removeUpload1()
    {
        if ($file1 = $this->getAbsolutePath()) {
            unlink($file1);
        }
    }



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


    /**
     * @var string
     */
    private $image;


    /**
     * Set image
     *
     * @param string $image
     * @return Journaloff
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }


    /**
     * @var string
     */
    private $journaloffimg;




    /**
     * Set journaloffimg
     *
     * @param string $journaloffimg
     * @return Journaloff
     */
    public function setJournaloffimg($journaloffimg)
    {
        $this->journaloffimg = $journaloffimg;

        return $this;
    }

    /**
     * Get journaloffimg
     *
     * @return string
     */
    public function getJournaloffimg()
    {
        return $this->journaloffimg;
    }

    /**
     * @var string
     */
    private $journalofftitle;

    /**
     * Set journalofftitle
     *
     * @param string $journalofftitle
     * @return Journaloff
     */
    public function setJournalofftitle($journalofftitle)
    {
        $this->journalofftitle = $journalofftitle;

        return $this;
    }
    /**
     * Get journalofftitle
     *
     * @return string
     */
    public function getJournalofftitle()
    {
        return $this->journalofftitle;
    }


    /**
     * @var string
     */
    private $journaloffdescription;

    /**
     * Set journaloffdescription
     *
     * @param string $journaloffdescription
     * @return Journaloff
     */
    public function setJournaloffdescription($journaloffdescription)
    {
        $this->journaloffdescription = $journaloffdescription;

        return $this;
    }
    /**
     * Get journaloffdescription
     *
     * @return string
     */
    public function getJournaloffdescription()
    {
        return $this->journaloffdescription;
    }
    /**
     * @var string
     */
    private $journaloffurl;




    /**
     * Set journaloffurl
     *
     * @param string $journaloffurl
     * @return Journaloff
     */
    public function setJournaloffurl($journaloffurl)
    {
        $this->journaloffurl = $journaloffurl;

        return $this;
    }

    /**
     * Get journaloffurl
     *
     * @return string
     */
    public function getJournaloffurl()
    {
        return $this->journaloffurl;
    }
    /**
     * @ORM\PrePersist
     */
    public function preUpload()
    {
        // Add your code here
    }

    /**
     * @ORM\PostPersist
     */
    public function upload()
    {
        // Add your code here
    }

    /**
     * @ORM\PostRemove
     */
    public function removeUpload()
    {
        // Add your code here
    }




}
