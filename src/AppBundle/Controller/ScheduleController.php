<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Group;
use AppBundle\Entity\Level;
use AppBundle\Entity\Student;
use AppBundle\Repositories\GroupsRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ScheduleController extends Controller
{
    /**
     * @Route("/schedule", name="schedule")
     */
    public function scheduleAction(Request $request) {

        if($request->query->get('city') != null) {
            $chosen = $request->query->get('city');
            $schedule = [];
            $languagesNames = [];
            $cities = [];

            $repository = $this->getDoctrine()
                ->getRepository('AppBundle:Lesson');
            $lessons = $repository->findAll();

            if (!$lessons) throw $this->createNotFoundException('No records found.');

            foreach ($lessons as $lesson) {
                $startHour = $lesson->getStartHour();
                //converts DateTime objects into string
                $stopHour = new \DateTime($startHour->format('Y-m-d H:i:s'));
                $stopHour = $stopHour->modify('+' . $lesson->getLength() . ' minutes');
                $startHour = $startHour->format('H:i');
                $stopHour = $stopHour->format('H:i');
                $weekday = $lesson->getWeekday();
                $tmp = '';

                if($lesson->getGroup()->getCity() === 'Tarnów'){
                    $tmp = 'tarnow';
                } else{
                    $tmp = 'krakow';
                }

                $languageName =  $tmp . "-" . $lesson->getGroup()->getLanguage()->getName();
                $levelName = $lesson->getGroup()->getLevel()->getLevel();
                $groupNumber = $lesson->getGroup()->getInternalNumber();
                $city = $lesson->getGroup()->getCity();

                if (!in_array($city, $cities)) {
                    $cities[] = $city;
                }

                $schedule[] = array('startHour' => $startHour,
                    'stopHour' => $stopHour,
                    'weekday' => strtolower($weekday),
                    'languageName' => $languageName,
                    'languageClassName' => str_replace(" ","_",$languageName),
                    'levelName' => $levelName,
                    'city' => $city,
                    'group_number' => $groupNumber);
            }

            //Fetches languages names
            $repository = $this->getDoctrine()->getRepository('AppBundle:Language');
            $languages = $repository->findAll();

            if (!$languages) throw $this->createNotFoundException('No records found.');

            //Inserts languages names into array
            foreach ($languages as $language) {
                $languagesNames[str_replace(" ","_",$language->getName())] = $language->getName();
            }

            //removes duplicates from an array
            $languagesNames = array_unique($languagesNames);

            $weekdays = [];
            $weekdays['monday'] = 'Poniedziałek';
            $weekdays['tuesday'] = 'Wtorek';
            $weekdays['wednesday'] = 'Środa';
            $weekdays['thursday'] = 'Czwartek';
            $weekdays['friday'] = 'Piątek';

            return $this->render('default/schedule.html.twig', array(
                'lessons' => $schedule,
                'languagesNames' => $languagesNames,
                'cities' => $cities,
                'weekdays' => $weekdays,
                'city' => $chosen
            ));
        }
        else {
            return $this->render('default/schedule.html.twig', array());
        }
    }

}