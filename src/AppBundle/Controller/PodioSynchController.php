<?php

namespace AppBundle\Controller;

use AppBundle\Services\PodioSynch;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class PodioSynchController extends Controller{


    /**
     * @Route("/update_podio", name="update_podio")
     */
    public function updatePodio(){

        $updater = new PodioSynch($this->getDoctrine()->getManager());

        $updater->exportStudents();
        return new Response('Synchronisation done!');
    }
}


?>