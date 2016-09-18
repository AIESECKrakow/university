<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repositories\GroupsRepository")
 * @ORM\Table(name="groups")
 */
class Group
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $city;

    /**
     * @ORM\ManyToOne(targetEntity="Language", inversedBy="groups", cascade={"persist"})
     * @ORM\JoinColumn(name="language_id", referencedColumnName="name")
     */
    private $language;


    /**
     * @ORM\ManyToOne(targetEntity="Level", inversedBy="groups", cascade={"persist"})
     * @ORM\JoinColumn(name="level_id", referencedColumnName="level")
     */
    private $level;

    /**
     * @ORM\OneToMany(targetEntity="Student", mappedBy="group", cascade={"persist"})
     */
    private $students;

    /**
     * @ORM\OneToMany(targetEntity="Lesson", mappedBy="group", cascade={"persist"})
     */
    private $lessons;


    /**
     * @ORM\Column(type="boolean")
     */
    private $enabled;


    /**
     * @ORM\Column(type="integer")
     */
    private $capacity;


    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;


    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;

    /**
     * @ORM\Column(type="integer")
     */
    private $internal_number;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->students = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lessons = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }


    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set capacity
     *
     * @param integer $capacity
     * @return Group
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return integer 
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Group
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Group
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set language
     *
     * @param \AppBundle\Entity\Language $language
     * @return Group
     */
    public function setLanguage(\AppBundle\Entity\Language $language = null)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return \AppBundle\Entity\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set level
     *
     * @param \AppBundle\Entity\Level $level
     * @return Group
     */
    public function setLevel(\AppBundle\Entity\Level $level = null)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return \AppBundle\Entity\Level
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Add students
     *
     * @param \AppBundle\Entity\Student $students
     * @return Group
     */
    public function addStudent(\AppBundle\Entity\Student $students)
    {
        $this->students[] = $students;

        return $this;
    }

    /**
     * Remove students
     *
     * @param \AppBundle\Entity\Student $students
     */
    public function removeStudent(\AppBundle\Entity\Student $students)
    {
        $this->students->removeElement($students);
    }

    /**
     * Get students
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStudents()
    {
        return $this->students;
    }

    public function __toString()
    {
        return (string)$this->getLevel();
    }

    /**
     * Add lessons
     *
     * @param \AppBundle\Entity\Lesson $lessons
     * @return Group
     */
    public function addLesson(\AppBundle\Entity\Lesson $lessons)
    {
        $this->lessons[] = $lessons;

        return $this;
    }

    /**
     * Remove lessons
     *
     * @param \AppBundle\Entity\Lesson $lessons
     */
    public function removeLesson(\AppBundle\Entity\Lesson $lessons)
    {
        $this->lessons->removeElement($lessons);
    }

    /**
     * Get lessons
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLessons()
    {
        return $this->lessons;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Group
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }



    /**
     * Set internalNumber
     *
     * @param integer $internalNumber
     *
     * @return Group
     */
    public function setInternalNumber($internalNumber)
    {
        $this->internal_number = $internalNumber;
    
        return $this;
    }

    /**
     * Get internalNumber
     *
     * @return integer
     */
    public function getInternalNumber()
    {
        return $this->internal_number;
    }
}
