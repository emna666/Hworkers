<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NewsRepository")
 */
class News
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $title_fr;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $content_fr;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $title_en;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $content_en;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private  $title_ar;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private  $content_ar;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $image;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitleFr()
    {
        return $this->title_fr;
    }

    /**
     * @param mixed $title_fr
     */
    public function setTitleFr($title_fr)
    {
        $this->title_fr = $title_fr;
    }

    /**
     * @return mixed
     */
    public function getContentFr()
    {
        return $this->content_fr;
    }

    /**
     * @param mixed $content_fr
     */
    public function setContentFr($content_fr)
    {
        $this->content_fr = $content_fr;
    }

    /**
     * @return string
     */
    public function getTitleEn()
    {
        return $this->title_en;
    }

    /**
     * @param string $title_en
     */
    public function setTitleEn($title_en)
    {
        $this->title_en = $title_en;
    }

    /**
     * @return string
     */
    public function getContentEn()
    {
        return $this->content_en;
    }

    /**
     * @param string $content_en
     */
    public function setContentEn($content_en)
    {
        $this->content_en = $content_en;
    }

    /**
     * @return string
     */
    public function getTitleAr()
    {
        return $this->title_ar;
    }

    /**
     * @param string $title_ar
     */
    public function setTitleAr($title_ar)
    {
        $this->title_ar = $title_ar;
    }

    /**
     * @return string
     */
    public function getContentAr()
    {
        return $this->content_ar;
    }

    /**
     * @param string $content_ar
     */
    public function setContentAr($content_ar)
    {
        $this->content_ar = $content_ar;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

}
