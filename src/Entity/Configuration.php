<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ConfigurationRepository")
 * @Vich\Uploadable
 */
class Configuration
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @var string
     * @ORM\Column(type="string",name="adresse_fr")
     */
    private $adresse_fr;

    /**
     * @var string
     * @ORM\Column(type="string", name="email")
     */
    private $email_fr;

    /**
     * @var string
     * @ORM\Column(name="phone", type="string")
     */
    private $phone_fr;

    /**
     * @var string
     * @ORM\Column(name="adresse_en", type="string", nullable=true)
     */
    private $adresse_en;

    /**
     * @var string
     * @ORM\Column(name="phone_en", type="string", nullable=true)
     */
    private $phone_en;

    /**
     * @var string
     * @ORM\Column(name="email_en", type="string", nullable=true)
     */
    private $email_en;

    /**
     * @var string
     * @ORM\Column(name="phone_ar", type="string", nullable=true)
     */
    private $phone_ar;

    /**
     * @var string
     * @ORM\Column(name="email_ar", type="string", nullable=true)
     */
    private $email_ar;

    /**
     * @var string
     * @ORM\Column(name="adresse_ar", type="string", nullable=true)
     */
    private $adresse_ar;

    /**
     * @var string
     * @ORM\Column(name="presentation_fr", type="string")
     */
    private $presentation_fr;

    /**
     * @var string
     * @ORM\Column(name="presentation_en", type="string", nullable=true)
     */
    private $presentation_en;

    /**
     * @var string
     * @ORM\Column(name="presentation_ar", type="string", nullable=true)
     */
    private $presentation_ar;

    /**
     * @var string
     * @ORM\Column(name="facebook_link", type="string", nullable=true)
     */
    private $facebook_link;

    /**
     * @var string
     * @ORM\Column(name="linkedin_link", type="string", nullable=true)
     */
    private $linkedin_link;

    /**
     * @var string
     * @ORM\Column(name="instagram_link", type="string", nullable=true)
     */
    private $instagram_link;

    /**
     * @var string
     * @ORM\Column(name="twitter_link", type="string", nullable=true)
     */
    private $twitter_link;

    /**
     * @var boolean
     * @ORM\Column(name="active",type="boolean")
     */
    private $active;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="logo_image", fileNameProperty="imageName")
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
     * Configuration constructor.
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
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @return string
     */
    public function getAdresseFr()
    {
        return $this->adresse_fr;
    }

    /**
     * @param string $adresse_fr
     */
    public function setAdresseFr($adresse_fr)
    {
        $this->adresse_fr = $adresse_fr;
    }

    /**
     * @return string
     */
    public function getEmailFr()
    {
        return $this->email_fr;
    }

    /**
     * @param string $email_fr
     */
    public function setEmailFr($email_fr)
    {
        $this->email_fr = $email_fr;
    }

    /**
     * @return string
     */
    public function getPhoneFr()
    {
        return $this->phone_fr;
    }

    /**
     * @param string $phone_fr
     */
    public function setPhoneFr($phone_fr)
    {
        $this->phone_fr = $phone_fr;
    }

    /**
     * @return string
     */
    public function getAdresseEn()
    {
        return $this->adresse_en;
    }

    /**
     * @param string $adresse_en
     */
    public function setAdresseEn($adresse_en)
    {
        $this->adresse_en = $adresse_en;
    }

    /**
     * @return string
     */
    public function getPhoneEn()
    {
        return $this->phone_en;
    }

    /**
     * @param string $phone_en
     */
    public function setPhoneEn($phone_en)
    {
        $this->phone_en = $phone_en;
    }

    /**
     * @return string
     */
    public function getEmailEn()
    {
        return $this->email_en;
    }

    /**
     * @param string $email_en
     */
    public function setEmailEn($email_en)
    {
        $this->email_en = $email_en;
    }

    /**
     * @return string
     */
    public function getPhoneAr()
    {
        return $this->phone_ar;
    }

    /**
     * @param string $phone_ar
     */
    public function setPhoneAr($phone_ar)
    {
        $this->phone_ar = $phone_ar;
    }

    /**
     * @return string
     */
    public function getEmailAr()
    {
        return $this->email_ar;
    }

    /**
     * @param string $email_ar
     */
    public function setEmailAr($email_ar)
    {
        $this->email_ar = $email_ar;
    }

    /**
     * @return string
     */
    public function getAdresseAr()
    {
        return $this->adresse_ar;
    }

    /**
     * @param string $adresse_ar
     */
    public function setAdresseAr($adresse_ar)
    {
        $this->adresse_ar = $adresse_ar;
    }

    /**
     * @return string
     */
    public function getPresentationFr()
    {
        return $this->presentation_fr;
    }

    /**
     * @param string $presentation_fr
     */
    public function setPresentationFr($presentation_fr)
    {
        $this->presentation_fr = $presentation_fr;
    }

    /**
     * @return string
     */
    public function getPresentationEn()
    {
        return $this->presentation_en;
    }

    /**
     * @param string $presentation_en
     */
    public function setPresentationEn($presentation_en)
    {
        $this->presentation_en = $presentation_en;
    }

    /**
     * @return string
     */
    public function getPresentationAr()
    {
        return $this->presentation_ar;
    }

    /**
     * @param string $presentation_ar
     */
    public function setPresentationAr($presentation_ar)
    {
        $this->presentation_ar = $presentation_ar;
    }

    /**
     * @return string
     */
    public function getFacebookLink()
    {
        return $this->facebook_link;
    }

    /**
     * @param string $facebook_link
     */
    public function setFacebookLink($facebook_link)
    {
        $this->facebook_link = $facebook_link;
    }

    /**
     * @return string
     */
    public function getLinkedinLink()
    {
        return $this->linkedin_link;
    }

    /**
     * @param string $linkedin_link
     */
    public function setLinkedinLink($linkedin_link)
    {
        $this->linkedin_link = $linkedin_link;
    }

    /**
     * @return string
     */
    public function getInstagramLink()
    {
        return $this->instagram_link;
    }

    /**
     * @param string $instagram_link
     */
    public function setInstagramLink($instagram_link)
    {
        $this->instagram_link = $instagram_link;
    }

    /**
     * @return string
     */
    public function getTwitterLink()
    {
        return $this->twitter_link;
    }

    /**
     * @param string $twitter_link
     */
    public function setTwitterLink($twitter_link)
    {
        $this->twitter_link = $twitter_link;
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
