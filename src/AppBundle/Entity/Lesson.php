<?php
/**
 * Created by PhpStorm.
 * User: Hubert
 * Date: 05.08.2016
 * Time: 00:52
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repositories\LessonRepository")
 * @ORM\Table(name="lessons")
 */
class Lesson
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Group", inversedBy="lessons", cascade={"persist"})
     * @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     */
    private $group;

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
     * Set start_hour
     *
     * @param \DateTime $startHour
     * @return Group
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
     * @return Group
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
     * @return Group
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
     * setGroup
     * @param \AppBundle\Entity\Group $group
     * @return Student
     */
    public function setGroup(Group $group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get groups
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroup()
    {
        return $this->group;
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
}
