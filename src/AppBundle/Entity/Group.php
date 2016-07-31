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
     * @ORM\Column(type="text")
     */
    private $description;


    /**
     * @ORM\ManyToOne(targetEntity="Language", inversedBy="groups")
     * @ORM\JoinColumn(name="language_id", referencedColumnName="name")
     */
    private $language;


    /**
     * @ORM\ManyToOne(targetEntity="Level", inversedBy="groups")
     * @ORM\JoinColumn(name="level_id", referencedColumnName="level")
     */
    private $level;

    /**
     * @ORM\OneToMany(targetEntity="Student", mappedBy="group")
     */
    private $students;


    /**
     * @ORM\Column(type="time")
     */
    private $start_hour;


    // in minutes
    /**
     * @ORM\Column(type="integer")
     */
    private $length;



    /**
     * @ORM\Column(type="string")
     */
    private $weekday;


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
     * Constructor
     */
    public function __construct()
    {
        $this->students = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set description
     *
     * @param string $description
     * @return Groups
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set start_hour
     *
     * @param \DateTime $startHour
     * @return Groups
     */
    public function setStartHour($startHour)
    {
        $this->start_hour = $startHour;

        return $this;
    }

    /**
     * Get start_hour
     *
     * @return \DateTime 
     */
    public function getStartHour()
    {
        return $this->start_hour;
    }

    /**
     * Set length
     *
     * @param integer $length
     * @return Groups
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return integer 
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set weekday
     *
     * @param string $weekday
     * @return Groups
     */
    public function setWeekday($weekday)
    {
        $this->weekday = $weekday;

        return $this;
    }

    /**
     * Get weekday
     *
     * @return string 
     */
    public function getWeekday()
    {
        return $this->weekday;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Groups
     */
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
     * @return Groups
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
     * @return Groups
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
     * @return Groups
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
     * @return Groups
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
     * @return Groups
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
     * @return Groups
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
        return (string) $this->getLanguage() . (string)$this->getLevel();
    }

}
