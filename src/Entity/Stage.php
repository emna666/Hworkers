<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StageRepository")
 */
class Stage
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
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    private $expiredAt;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $duration;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\OneToMany(targetEntity="Candidature", mappedBy="Stage")
     */
    private $candidatures;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Stage
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
     * @return Stage
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
     * @return Stage
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
     * @return Stage
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
     * @return Stage
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
     * @return Stage
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
     * @return Stage
     */
    public function setContentAr($content_ar)
    {
        $this->content_ar = $content_ar;
        return $this;
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
     * @return Stage
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpiredAt()
    {
        return $this->expiredAt;
    }

    /**
     * @param \DateTime $expiredAt
     * @return Stage
     */
    public function setExpiredAt($expiredAt)
    {
        $this->expiredAt = $expiredAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param string $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
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
     * @return Stage
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return  Collection|Candidature[]
     */
    public function getCandidatures()
    {
        return $this->candidatures;
    }

    public function __construct()
    {
        $this->candidatures = new ArrayCollection();
    }

}
