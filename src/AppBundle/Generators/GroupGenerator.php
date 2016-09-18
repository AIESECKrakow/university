<?php
/**
 * Created by PhpStorm.
 * User: Hubert
 * Date: 05.08.2016
 * Time: 22:39
 */

namespace AppBundle\Generators;


class GroupGenerator
{
    private $groups; //an array

    public function __construct($xml)
    {
        //parses xml file into array
        foreach ($xml->children() as $group) {
            $this->groups[] = array(
                'level_id' => (string)$group->level_id,
                'internal_number' =>(int)$group->internal_number,
                'g_enabled' => (int)$group->g_enabled,
                'capacity' => (int)$group->capacity,
                'lessons' => $group->lessons);
        };
    }

    public function getGroups() {
        return $this->groups;
    }
}