<?php
/**
 * Created by PhpStorm.
 * User: Patryk
 * Date: 17.07.2016
 * Time: 14:50
 */

namespace AppBundle\Classes;

class LanguageGenerator {
    private $languages; //an array

    public function __construct($file)
    {
        $xml = simplexml_load_file($file) or die('Cannot load a file.');

        //parses xml file into array
        foreach ($xml as $language) {
            $this->languages[] = array('name' => $language, 'enabled' => $language['enabled']);
        };
    }

    public function getLanguages() {
        return $this->languages;
    }
}