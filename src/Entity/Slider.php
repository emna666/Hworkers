<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SliderRepository")
 * @Vich\Uploadable
 */
class Slider
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $text_fr;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $text_en;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $text_ar;

    /**
     * @var integer
     * @ORM\Column(type="string")
     */
    private $ordre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;


    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="slider_image", fileNameProperty="imageName")
     *
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $imageName;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $active;



    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     * @return string
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if (null !== $image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
        return $this;
    }

    /**
     * @return null|File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param null|string $imageName
     * @return string
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getImageName()
    {
        return $this->imageName;
    }



    /**
     * Slider constructor.
     *
     */
    public function __construct()
    {
        $this->created_at = new \DateTime();
        $this->active = true;
    }

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
    public function getTextFr()
    {
        return $this->text_fr;
    }

    /**
     * @param string $text_fr
     */
    public function setTextFr($text_fr)
    {
        $this->text_fr = $text_fr;
    }

    /**
     * @return string
     */
    public function getTextEn()
    {
        return $this->text_en;
    }

    /**
     * @param string $text_en
     */
    public function setTextEn($text_en)
    {
        $this->text_en = $text_en;
    }

    /**
     * @return string
     */
    public function getTextAr()
    {
        return $this->text_ar;
    }

    /**
     * @param string $text_ar
     */
    public function setTextAr($text_ar)
    {
        $this->text_ar = $text_ar;
    }

    /**
     * @return int
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * @param int $ordre
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;
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

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param \DateTime $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

}
