<?php
/**
 * Created by PhpStorm.
 * User: Hubert
 * Date: 05.08.2016
 * Time: 23:00
 */

namespace AppBundle\Generators;


class LessonsGenerator
{
    private $lessons; //an array

    public function __construct($xml)
    {
        //parses xml file into array
        foreach ($xml->children() as $lesson) {
            $this->lessons[] = array(
                'start_hour' => (string)$lesson->start_hour,
                'length' => (int)$lesson->length,
                'weekday' => (string)$lesson->weekday);
        };
    }

    public function getLessons() {
        return $this->lessons;
    }
}