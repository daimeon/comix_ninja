<?php

namespace Dmoritz\ComixNinjaBundle\Entity;

class Comics
{

    /**
     * @var integer
     */
    public $comics_id;

    /**
     * @var string
     */
    public $cn_id;

    /**
     * @var string
     */
    public $isbn;

    /**
     * @var string
     */
    public $title;

    /**
     * @var integer
     */
    public $issue_no;

    /**
     * @var integer
     */
    public $volume_id;

    /**
     * Set cn_id
     *
     * @param string $cnId
     * @return Comics
     */
    public function setCnId($cnId)
    {
        $this->cn_id = $cnId;

        return $this;
    }

    /**
     * Get cn_id
     *
     * @return string 
     */
    public function getCnId()
    {
        return $this->cn_id;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     * @return Comics
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string 
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Comics
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set issue_no
     *
     * @param integer $issueNo
     * @return Comics
     */
    public function setIssueNo($issueNo)
    {
        $this->issue_no = $issueNo;

        return $this;
    }

    /**
     * Get issue_no
     *
     * @return integer 
     */
    public function getIssueNo()
    {
        return $this->issue_no;
    }

    /**
     * Set volume_id
     *
     * @param integer $volumeId
     * @return Comics
     */
    public function setVolumeId($volumeId)
    {
        $this->volume_id = $volumeId;

        return $this;
    }

    /**
     * Get volume_id
     *
     * @return integer 
     */
    public function getVolumeId()
    {
        return $this->volume_id;
    }

    /**
     * Get comics_id
     *
     * @return integer 
     */
    public function getComicsId()
    {
        return $this->comics_id;
    }
}
