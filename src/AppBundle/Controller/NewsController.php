<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Group;
use AppBundle\Entity\Level;
use AppBundle\Entity\Student;
use AppBundle\Repositories\GroupsRepository;
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

class NewsController extends Controller
{
    /**
     * @Route("/news", name="news")
     */
    public function newsAction() {
        return $this->render('default/news.html.twig');
    }

}
