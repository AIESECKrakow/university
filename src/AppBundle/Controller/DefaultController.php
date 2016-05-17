<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Group;
use AppBundle\Entity\Level;
use AppBundle\Repositories\GroupsRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {

//        $g = new Level();
//        $g->setLevel("wysoki");
//        $g->setEnabled(boolval(true));
//        $g->setCreatedAt(new \DateTime());
//        $g->setUpdatedAt(new \DateTime());
//        $this->getDoctrine()->getManager()->getRepository('AppBundle:Level')->saveNewLevel($g);

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');
    }
}
