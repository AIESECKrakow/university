<?php
/**
 * Created by PhpStorm.
 * User: Patryk
 * Date: 17.07.2016
 * Time: 14:50
 */

namespace AppBundle\Generators;

class LanguageGenerator {
    private $languages; //an array

    public function __construct($file)
    {
        $xml = simplexml_load_file($file) or die('Cannot load a file.');
        //parses xml file into array
        foreach ($xml->children() as $language) {
            $this->languages[] = array(
                'name' => (string)$language->name,
                'l_enabled' => (int)$language->l_enabled,
                'groups' => $language->groups);
        };
    }

    public function getLanguages() {
        return $this->languages;
    }
}

