<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TeamRepository")
 */
class Team
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
    private $firstname_fr;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $lastname_fr;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $decription_fr;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $firstname_en;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $lastname_en;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $decription_en;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $firstname_ar;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $lastname_ar;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $decription_ar;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $image;

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
     * @return string
     */
    public function getFirstnameFr()
    {
        return $this->firstname_fr;
    }

    /**
     * @param string $firstname_fr
     */
    public function setFirstnameFr($firstname_fr)
    {
        $this->firstname_fr = $firstname_fr;
    }

    /**
     * @return string
     */
    public function getLastnameFr()
    {
        return $this->lastname_fr;
    }

    /**
     * @param string $lastname_fr
     */
    public function setLastnameFr($lastname_fr)
    {
        $this->lastname_fr = $lastname_fr;
    }

    /**
     * @return string
     */
    public function getDecriptionFr()
    {
        return $this->decription_fr;
    }

    /**
     * @param string $decription_fr
     */
    public function setDecriptionFr($decription_fr)
    {
        $this->decription_fr = $decription_fr;
    }

    /**
     * @return string
     */
    public function getFirstnameEn()
    {
        return $this->firstname_en;
    }

    /**
     * @param string $firstname_en
     */
    public function setFirstnameEn($firstname_en)
    {
        $this->firstname_en = $firstname_en;
    }

    /**
     * @return string
     */
    public function getLastnameEn()
    {
        return $this->lastname_en;
    }

    /**
     * @param string $lastname_en
     */
    public function setLastnameEn($lastname_en)
    {
        $this->lastname_en = $lastname_en;
    }

    /**
     * @return string
     */
    public function getDecriptionEn()
    {
        return $this->decription_en;
    }

    /**
     * @param string $decription_en
     */
    public function setDecriptionEn($decription_en)
    {
        $this->decription_en = $decription_en;
    }

    /**
     * @return string
     */
    public function getFirstnameAr()
    {
        return $this->firstname_ar;
    }

    /**
     * @param string $firstname_ar
     */
    public function setFirstnameAr($firstname_ar)
    {
        $this->firstname_ar = $firstname_ar;
    }

    /**
     * @return string
     */
    public function getLastnameAr()
    {
        return $this->lastname_ar;
    }

    /**
     * @param string $lastname_ar
     */
    public function setLastnameAr($lastname_ar)
    {
        $this->lastname_ar = $lastname_ar;
    }

    /**
     * @return string
     */
    public function getDecriptionAr()
    {
        return $this->decription_ar;
    }

    /**
     * @param string $decription_ar
     */
    public function setDecriptionAr($decription_ar)
    {
        $this->decription_ar = $decription_ar;
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
