<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Language;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Classes\LanguageGenerator;

class LanguagesController extends Controller
{
    /**
     * @Route("/add-languages", name="add_languages")
     */
    public function addLanguagesAction()
    {
        //generates an array with languages from xml file
        $languagesGenerator = new LanguageGenerator(__DIR__.'\languages.xml');
        $languages = $languagesGenerator->getLanguages();

        $em = $this->getDoctrine()->getManager();

        //saves entities into database
        foreach ($languages as $element) {
            $language = new Language();
            $language->setName($element['name']);
            $language->setEnabled($element['enabled']);
            $language->setCreatedAt(new \DateTime());
            $language->setUpdatedAt(new \DateTime());

            $em->persist($language);
            $em->flush();
        };
        
        return new Response('Languages have been added.');
    }

}
