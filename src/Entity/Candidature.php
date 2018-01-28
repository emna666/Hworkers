<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CandidatureRepository")
 */
class Candidature
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="firstname",type="string")
     */
    private $firstname;

    /**
     * @var string
     * @ORM\Column(name="lastname", type="string")
     */
    private $lastname;

    /**
     * @var string
     * @ORM\Column(name="email", type="string")
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(name="phone", type="string")
     */
    private $phone;

    /**
     * @var string
     * @ORM\Column(name="comment", type="string")
     */
    private $comment;

    /**
     * @var string
     * @ORM\Column(name="cv", type="string")
     */
    private $cv;

    /**
     * @var \DateTime
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $CreatedAt;

    /**
     * @ORM\ManyToOne(targetEntity="Stage", inversedBy="candidatures")
     * @ORM\JoinColumn(nullable=true)
     */
    private $stage;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Candidature
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return Candidature
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return Candidature
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Candidature
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return Candidature
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return Candidature
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return string
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * @param string $cv
     * @return Candidature
     */
    public function setCv($cv)
    {
        $this->cv = $cv;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->CreatedAt;
    }

    /**
     * @param \DateTime $CreatedAt
     * @return Candidature
     */
    public function setCreatedAt($CreatedAt)
    {
        $this->CreatedAt = $CreatedAt;
        return $this;
    }

    /**
     * @return Stage
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * @param Stage $stage
     */
    public function setStage(Stage $stage)
    {
        $this->stage = $stage;
    }

}
