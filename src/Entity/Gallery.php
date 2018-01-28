<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GalleryRepository")
 */
class Gallery
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
    private $label_fr;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $label_en;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $label_ar;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $image;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $order;

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
    public function getLabelFr()
    {
        return $this->label_fr;
    }

    /**
     * @param string $label_fr
     */
    public function setLabelFr($label_fr)
    {
        $this->label_fr = $label_fr;
    }

    /**
     * @return string
     */
    public function getLabelEn()
    {
        return $this->label_en;
    }

    /**
     * @param string $label_en
     */
    public function setLabelEn($label_en)
    {
        $this->label_en = $label_en;
    }

    /**
     * @return string
     */
    public function getLabelAr()
    {
        return $this->label_ar;
    }

    /**
     * @param string $label_ar
     */
    public function setLabelAr($label_ar)
    {
        $this->label_ar = $label_ar;
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
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param int $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

}
