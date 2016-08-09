<?php
namespace AppBundle\Controller;


use AppBundle\Entity\Language;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GetLessonsController extends Controller{

    /**
     * @Route("/getLessons/{id}", name="get_lessons")
     */
    public function getLessonsAction(Language $language){
        $groups = $language->getGroups();
        $result = new ArrayCollection();
        foreach($groups as $group){
            $tmp = new ArrayCollection();
            foreach($group->getLessons() as $lesson){
                $t = new ArrayCollection();
                $t->set('day', $lesson->getWeekday());
                $t->set('hour', $lesson->getStartHour()->format("H:i"));
                $t->set('city', $group->getCity());
                $tmp->set($lesson->getId(), $t->toArray());
            }
            $result->set($group->getId(), $tmp->toArray());
        }
        $response = new Response(json_encode($result->toArray()));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }


}