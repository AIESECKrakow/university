<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Group;
use AppBundle\Entity\Level;
use AppBundle\Entity\Student;
use AppBundle\Repositories\GroupsRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ScheduleController extends Controller
{
    /**
     * @Route("/schedule", name="schedule")
     */
    public function scheduleAction() {
        $schedule = [];
        $languagesNames = [];

        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Lesson');
        $lessons = $repository->findAll();

        if(!$lessons) throw $this->createNotFoundException('No records found.');

        foreach ($lessons as $lesson) {
            $startHour = $lesson->getStartHour();
            //converts DateTime objects into string
            $stopHour = new \DateTime($startHour->format('Y-m-d H:i:s'));
            $stopHour = $stopHour->modify('+'.$lesson->getLength().' minutes');
            $startHour = $startHour->format('H:i');
            $stopHour = $stopHour->format('H:i');
            $weekday = $lesson->getWeekday();
            $languageName = $lesson
                ->getGroup()
                ->getLanguage()
                ->getName();
            $levelName = $lesson
                ->getGroup()
                ->getLevel()
                ->getLevel();

            $schedule[] = array('startHour' => $startHour, 'stopHour' => $stopHour, 'weekday' => $weekday, 'languageName' => $languageName, 'levelName' => $levelName);
        }

        //Fetches languages names
        $repository = $this->getDoctrine()->getRepository('AppBundle:Language');
        $languages = $repository->findAll();

        if(!$languages) throw $this->createNotFoundException('No records found.');

        //Inserts languages names into array
        foreach ($languages as $language) {
            $languagesNames[] = $language->getName();
        }

        //removes duplicates from an array
        $languagesNames = array_unique($languagesNames);

        return $this->render('default/schedule.html.twig', array(
            'lessons' => $schedule,
            'languagesNames' => $languagesNames
        ));
    }

}