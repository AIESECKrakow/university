<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Group;
use AppBundle\Entity\Level;
use AppBundle\Entity\Student;
use AppBundle\Repositories\GroupsRepository;
use AppBundle\Classes\LanguageGenerator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Type;

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
        //$languageGenerator = new LanguageGenerator();
        
        return $this->render('default/index.html.twig');
    }
    
}
