<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Group;
use AppBundle\Entity\Level;
use AppBundle\Entity\Student;
use AppBundle\Repositories\GroupsRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

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

    /**
     * @Route("/sign-up", name="sign-up")
     */
    public function signUpAction(Request $request) {
        $student = new Student();

        $form = $this->createFormBuilder($student)
            ->add('first_name', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('last_name', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('email', EmailType::class, array('attr' => array('class' => 'form-control')))
            ->add('phone', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('sign_up', SubmitType::class, array('label' => 'Zarejestruj sie', 'attr' => array('class' => 'form-control btn btn-primary')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            //get data from the form
            $firstName = $form['first_name']->getData();
            $lastName = $form['last_name']->getData();
            $email = $form['email']->getData();
            $phoneNumber = $form['phone']->getData();
            $createdAt = new \DateTime('now');
            $updatedAt = new \DateTime('now');

            //set attributes to the object
            $student->setFirstName($firstName);
            $student->setLastName($lastName);
            $student->setEmail($email);
            $student->setPhone($phoneNumber);
            $student->setCreatedAt($createdAt);
            $student->setUpdatedAt($updatedAt);

            //insert entity into database
            $doctrine = $this->getDoctrine()->getManager();
            $doctrine->persist($student);
            $doctrine->flush();

            $this->addFlash('notice', 'Student has been registered.');

            return $this->redirectToRoute('homepage');
        }

        return $this->render('default/signUp.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
