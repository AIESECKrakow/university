<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Language;
use AppBundle\Entity\Level;
use AppBundle\Entity\Student;
use AppBundle\Repositories\GroupsRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Form\Type\SignUpType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Test\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Type;

class SignUpController extends Controller
{
    /**
     * @Route("/sign-up", name="sign-up")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function signUpAction(Request $request)
    {

        $student = new Student();
        $form = $this->createForm(SignUpType::class, $student);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $selected_city = $form->get('city')->getData()->getCity();

            $doctrine = $this->getDoctrine()->getManager();
            $student = $form->getData();
            $actual_city = $student->getGroup()->getCity();

            if($actual_city != $selected_city){
                return $this->render(
                    ':default:error_display.html.twig',
                    array('form' => $form->createView(),
                        'name' => $student->getFirstName())
                );
            }


            $dateTime = new \DateTime('now');
            $student->setCreatedAt($dateTime);
            $student->setUpdatedAt($dateTime);

            $group_id = $student->getGroup()->getId();

            $query = $doctrine->getRepository('AppBundle:Group')
                ->createQueryBuilder('g')
                ->select('COUNT(s)')
                ->leftJoin('g.students','s')
                ->where('g.id = :chosen_group')
                ->setParameter('chosen_group', $group_id)
                ->getQuery();

            if ($query->getSingleScalarResult() >= $student->getGroup()->getCapacity()){
                $student->getGroup()->setEnabled(0);
            }

            $student->setPodioSynchronised(0);  //wasn't synchronised
            $doctrine->persist($student->getGroup());
            $doctrine->persist($student);
            $doctrine->flush();
            return $this->render(
                ':default:confirmation.html.twig',
                array('form' => $form->createView(),
                    'name' => $student->getFirstName())
            );
        }
        return $this->render(
            'default/signUp.html.twig',
            array('form' => $form->createView())
        );
    }
}
