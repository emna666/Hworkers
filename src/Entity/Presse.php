<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PresseRepository")
 */
class Presse
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
    private $title_ar;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $content_ar;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $media;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $type;

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
     * @return Presse
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitleFr()
    {
        return $this->title_fr;
    }

    /**
     * @param string $title_fr
     * @return Presse
     */
    public function setTitleFr($title_fr)
    {
        $this->title_fr = $title_fr;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentFr()
    {
        return $this->content_fr;
    }

    /**
     * @param string $content_fr
     * @return Presse
     */
    public function setContentFr($content_fr)
    {
        $this->content_fr = $content_fr;
        return $this;
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
     * @return Presse
     */
    public function setTitleEn($title_en)
    {
        $this->title_en = $title_en;
        return $this;
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
     * @return Presse
     */
    public function setContentEn($content_en)
    {
        $this->content_en = $content_en;
        return $this;
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
     * @return Presse
     */
    public function setTitleAr($title_ar)
    {
        $this->title_ar = $title_ar;
        return $this;
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
     * @return Presse
     */
    public function setContentAr($content_ar)
    {
        $this->content_ar = $content_ar;
        return $this;
    }

    /**
     * @return string
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * @param string $media
     * @return Presse
     */
    public function setMedia($media)
    {
        $this->media = $media;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Presse
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
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
     * @return Presse
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

}
