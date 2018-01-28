<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PartnerRepository")
 * @Vich\Uploadable
 */
class Partner
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
     * @var String
     * @ORM\Column(type="string", nullable=true)
     */
    private  $label_en;

    /**
     * @var String
     * @ORM\Column(type="string", nullable=true)
     */
    private $label_ar;

    /**
    * NOTE: This is not a mapped field of entity metadata, just a simple property.
    *
    * @Vich\UploadableField(mapping="partner_image", fileNameProperty="imageName")
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
     * Partner constructor.
     */
    public function __construct()
    {
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
     * @return Partner
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
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
     * @return Partner
     */
    public function setLabelFr($label_fr)
    {
        $this->label_fr = $label_fr;
        return $this;
    }

    /**
     * @return String
     */
    public function getLabelEn()
    {
        return $this->label_en;
    }

    /**
     * @param String $label_en
     * @return Partner
     */
    public function setLabelEn($label_en)
    {
        $this->label_en = $label_en;
        return $this;
    }

    /**
     * @return String
     */
    public function getLabelAr()
    {
        return $this->label_ar;
    }

    /**
     * @param String $label_ar
     * @return Partner
     */
    public function setLabelAr($label_ar)
    {
        $this->label_ar = $label_ar;
        return $this;
    }

    /**
     * @return String
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param String $image
     * @return Partner
     */
    public function setImage($image)
    {
        $this->image = $image;
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
     * @return Partner
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

}
