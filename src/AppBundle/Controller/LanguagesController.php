<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Group;
use AppBundle\Entity\Language;
use AppBundle\Entity\Lesson;
use AppBundle\Generators\GroupGenerator;
use AppBundle\Generators\LanguageGenerator;
use AppBundle\Generators\LessonsGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class LanguagesController extends Controller
{
    /**
     * @Route("/add-languages", name="add_languages")
     */
    public function addLanguagesAction()
    {
        //generates an array with languages from xml file
        $languagesGenerator = new LanguageGenerator(__DIR__ . '\..\Config\languages.xml');
        $languages = $languagesGenerator->getLanguages();
        $em = $this->getDoctrine()->getManager();
        $er = $this->getDoctrine()->getRepository('AppBundle:Level');
        foreach($languages as $language){
            $lng = new Language();

            $groupsGenerator =  new GroupGenerator($language['groups']);
            $language['groups'] = $groupsGenerator->getGroups();
            $lng->setEnabled($language['l_enabled']);
            $lng->setName($language['name']);
            $lng->setCreatedAt(new \DateTime());
            $lng->setUpdatedAt(new \DateTime());

            foreach($language['groups'] as $group){
                $g = new Group();

                $lessonsGenerator =  new LessonsGenerator($group['lessons']);
                $group['lessons'] = $lessonsGenerator->getLessons();
                $g->setCreatedAt(new \DateTime());
                $g->setUpdatedAt(new \DateTime());
                $level = $er->find($group['level_id']);
                $g->setLevel($level);
                $g->setInternalNumber($group['internal_number']);
                $g->setCity($group['city']);
                $g->setCapacity($group['capacity']);
                $g->setEnabled($group['g_enabled']);
                $g->setLanguage($lng);

                foreach($group['lessons'] as $lesson){
                    $lss = new Lesson();
                    $time = date_create_from_format('H:i',$lesson['start_hour']);
                    $lss->setLength($lesson['length']);
                    $lss->setStartHour($time);
                    $lss->setWeekday($lesson['weekday']);
                    $lss->setGroup($g);

                    $g->addLesson($lss);
                }
                $lng->addGroup($g);
            }
            $em->persist($lng);
            $em->flush();
        }

        return new Response('Languages have been added.');
    }

}
