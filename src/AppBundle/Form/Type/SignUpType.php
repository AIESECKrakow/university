<?php
namespace AppBundle\Form\Type;
use AppBundle\Entity\Language;
use AppBundle\Entity\Student;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Type;

/**
 * Created by PhpStorm.
 * User: Hubert
 * Date: 30.07.2016
 * Time: 20:24
 */
class SignUpType extends AbstractType
{

    private $em;

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('first_name', TextType::class, array(
                'constraints' => array(
                    new NotBlank(),
                    new Regex(array(
                        'pattern' => '/\d/',
                        'match' => false,
                        'message' => 'Imię nie może zawierać cyfr.'
                    ))
                ),
                'label' => 'Imię',
                'attr' => array('class' => 'form-control')
            ))
            ->add('last_name', TextType::class, array(
                'constraints' => array(
                    new Regex(array(
                        'pattern' => '/\d/',
                        'match' => false,
                        'message' => 'Nazwisko nie może zawierać cyfr.'
                    )),
                    new NotBlank(),
                    new Type('string')
                ),
                'label' => 'Nazwisko',
                'attr' => array('class' => 'form-control')))
            ->add('email', EmailType::class, array(
                'constraints' => array(
                    new NotBlank(),
                    new Email()
                ),
                'label' => 'Email',
                'attr' => array('class' => 'form-control')))
            ->add('phone', TextType::class, array(
                'constraints' => array(
                    new NotBlank(),
                    new Type(array(
                        'type' => 'numeric',
                        'message' => 'Nr telefonu może zawierać tylko cyfry, bez spacji i prefiksu'
                    ))
                ),
                'label' => 'Nr telefonu',
                'attr' => array('class' => 'form-control')))

            ->add('discount', ChoiceType::class, array(
                'choices' => array(
                    'Nie' => 'Nie',
                    'Tak' => 'Tak',
                ),
                'label' => 'Czy przysługuje Ci zniżka?'
            ))
            ->add('language', EntityType::class, array(
            'class' => 'AppBundle:Language',
            'choice_label' => 'name',
                'placeholder' => 'Wybierz język',
                'mapped' => false,
                'attr' => array('class' => 'selectpicker', 'disabled' =>'true'),
                'label'=> "Język"
            ))
            ->add('city', EntityType::class, array(
                'class' => 'AppBundle:Group',
                'choice_label' => 'city',
                'placeholder' => 'Wybierz miasto',
                'mapped' => false,
                'label' => 'Miasto',
                'attr' => array('class' => 'selectpicker'),
                "query_builder" => function (EntityRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->where('g.enabled = 1')
                        ->groupBy('g.city');
                    },
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Zapisz się!',
                'attr' => array('class' => 'form-control btn btn-primary', "disabled" => 'true ')
            ));

        $formModifier = function (FormInterface $form, Language $language = null) {
            $chosen = null === $language ? 'none' : $language->getName();

                $form->add('group', EntityType::class, array(
                    'class' => 'AppBundle:Group',
                    'placeholder' => 'Wybierz grupę',
                    'expanded' => true,
                    'attr' => array('class' => 'radio'),
                    'query_builder' => function (EntityRepository $er) use ($chosen) {
                        return $er->createQueryBuilder('g')
                            ->where('g.enabled = 1')
                            ->andWhere('g.language = :chosen')
                            ->setParameter("chosen", $chosen);
                    },
                ));
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                // this would be your entity, i.e. Student
                $data = $event->getForm()->get('language')->getData();
                $formModifier($event->getForm(), $data);
            }
        );

        $builder->get('language')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                // It's important here to fetch $event->getForm()->getData(), as
                // $event->getData() will get you the client data (that is, the ID)
                $language = $event->getForm()->getData();
                // since we've added the listener to the child, we'll have to pass on
                // the parent to the callback functions!
                $formModifier($event->getForm()->getParent(), $language);
            }
        );

    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => Student::class]);
    }


}