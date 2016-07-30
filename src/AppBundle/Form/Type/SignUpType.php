<?php
namespace AppBundle\Form\Type;
use AppBundle\Entity\Language;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Created by PhpStorm.
 * User: Hubert
 * Date: 30.07.2016
 * Time: 20:24
 */
class SignUpType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('language', EntityType::class, array(
            'class' => 'AppBundle:Language',
            'choice_label' => 'name',
            'expanded' => true
            )
        );

        $formModifier = function (FormInterface $form, Language $language = null) {
            $groups = null === $language ? array() : $language->getGroups();

            $form->add('group', EntityType::class, array(
                'class'       => 'AppBundle:Group',
                'placeholder' => '',
                'choices'     => $groups,
            ));
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                // this would be your entity, i.e. Language
                $data = $event->getData();

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


//    public function configureOptions(OptionsResolver $resolver)
//    {
//        $resolver -> setRequired('entity_manager');
//    }

}