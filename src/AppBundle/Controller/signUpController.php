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
    public function signUpAction(Request $request) {


        $student = new Student();
        //$languages = $this->getDoctrine()->getRepository('AppBundle:Language')->findAll();
        $form = $this->createForm(SignUpType::class, $student);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $doctrine = $this->getDoctrine()->getManager();
            $doctrine->persist($form->getData());
            $doctrine->flush();
        }
        return $this->render(
            'default/signUp.html.twig',
            array('form' => $form->createView())
        );













        //$languages = $this->getDoctrine()->getRepository('AppBundle:Language')->findAll();
//        foreach($languages as $language) {
//            if ($language->getName() == 'spanish') {
//                $groups = $this->getDoctrine()->getRepository('AppBundle:Group')->findBy(array('language' => $language->getName()));
//                foreach ($groups as $group) {
//                    echo $group->getID();
//                    echo "<br>";
//                }
//            }
//        }



//        $form1 = $this->createFormBuilder($student)
//            ->add('first_name', TextType::class, array(
//                'constraints' => array(
//                    new NotBlank(),
//                    new Regex(array(
//                        'pattern' => '/\d/',
//                        'match' => false,
//                        'message' => 'Imię nie może zawierać cyfr.'
//                    ))
//                ),
//                'label' => 'Imię',
//                'attr' => array('class' => 'form-control')
//            ))
//            ->add('last_name', TextType::class, array(
//                'constraints' => array(
//                    new Regex(array(
//                        'pattern' => '/\d/',
//                        'match' => false,
//                        'message' => 'Nazwisko nie może zawierać cyfr.'
//                    )),
//                    new NotBlank(),
//                    new Type('string')
//                ),
//                'label' => 'Nazwisko',
//                'attr' => array('class' => 'form-control')))
//            ->add('email', EmailType::class, array(
//                'constraints' => array(
//                    new NotBlank(),
//                    new Email()
//                ),
//                'label' => 'Email',
//                'attr' => array('class' => 'form-control')))
//            ->add('phone', TextType::class, array(
//                'constraints' => array(
//                    new NotBlank(),
//                    new Type(array(
//                        'type' => 'numeric',
//                        'message' => 'Nr telefonu może zawierać tylko cyfry, bez spacji i prefiksu'
//                    ))
//                ),
//                'label' => 'Nr telefonu',
//                'attr' => array('class' => 'form-control')))
//            ->add('sign_up', SubmitType::class, array('label' => 'Zarejestruj sie', 'attr' => array('class' => 'form-control btn btn-primary')))
//            ->getForm();
//
//
//        $form1->handleRequest($request);
//
//        if($form1->isSubmitted() && $form1->isValid()) {
//            //get data from the form
//            $firstName = $form1['first_name']->getData();
//            $lastName = $form1['last_name']->getData();
//            $email = $form1['email']->getData();
//            $phoneNumber = $form1['phone']->getData();
//            $createdAt = new \DateTime('now');
//            $updatedAt = new \DateTime('now');
//
//            //set attributes to the object
//            $student->setFirstName($firstName);
//            $student->setLastName($lastName);
//            $student->setEmail($email);
//            $student->setPhone($phoneNumber);
//            $student->setCreatedAt($createdAt);
//            $student->setUpdatedAt($updatedAt);
//
//            //insert entity into database
//            $doctrine = $this->getDoctrine()->getManager();
//            $doctrine->persist($student);
//            $doctrine->flush();
//
//            $this->addFlash('notice', 'Rejestracja przebiegła pomyślnie.');
//
//            return $this->redirectToRoute('homepage');
//        }
//
//
//        return $this->render('default/signUp.html.twig', array(
//            'form' => $form1->createView()
//        ));
    }

//    public function buildForm(FormBuilderInterface $builder, array $options){
//        $builder
//            ->add('first_name', TextType::class, array(
//            'constraints' => array(
//                new NotBlank(),
//                new Regex(array(
//                    'pattern' => '/\d/',
//                    'match' => false,
//                    'message' => 'Imię nie może zawierać cyfr.'
//                ))
//            ),
//            'label' => 'Imię',
//            'attr' => array('class' => 'form-control')
//        ))
//            ->add('last_name', TextType::class, array(
//                'constraints' => array(
//                    new Regex(array(
//                        'pattern' => '/\d/',
//                        'match' => false,
//                        'message' => 'Nazwisko nie może zawierać cyfr.'
//                    )),
//                    new NotBlank(),
//                    new Type('string')
//                ),
//                'label' => 'Nazwisko',
//                'attr' => array('class' => 'form-control')))
//            ->add('email', EmailType::class, array(
//                'constraints' => array(
//                    new NotBlank(),
//                    new Email()
//                ),
//                'label' => 'Email',
//                'attr' => array('class' => 'form-control')))
//            ->add('phone', TextType::class, array(
//                'constraints' => array(
//                    new NotBlank(),
//                    new Type(array(
//                        'type' => 'numeric',
//                        'message' => 'Nr telefonu może zawierać tylko cyfry.'
//                    ))
//                ),
//                'label' => 'Nr telefonu',
//                'attr' => array('class' => 'form-control')))
//
//            ->add('language', EntityType::class, array(
//                'class' => 'AppBundle:Language',
//                'placeholder' => '',
//            ))
//
//            ->add('sign_up', SubmitType::class, array('label' => 'Zarejestruj sie', 'attr' => array('class' => 'form-control btn btn-primary')))
//
//            ->addEventListener(
//                FormEvents::PRE_SET_DATA,
//                function (FormEvent $event){
//                    $form = $event->getForm();
//                    $language = $event->getData();
//                    $groups = $this->getDoctrine()->getRepository('AppBundle:Group')->findBy(array('language' => $language->getName()));
//                    foreach ($groups as $group) {
//                        echo $group->getID();
//                        echo "<br>";
//                    }
//                    $form ->add(
//                        'group', EntityType::class, array(
//                        'class' => 'AppBundle:Group',
//                        'placeholder' => "",
//                        'groups' => $groups
//                    ));
//                }
//            );
//    }
}
