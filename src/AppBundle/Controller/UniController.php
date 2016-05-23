<?php

namespace AppBundle\Controller {

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
    class UniController
    {

        /**
         * @Route ("/about")
         * @Template
         */
        public function aboutAction ()
        {
            return array ();
            $html = $this->container->get('templating')->render(
                'Uni.html.twig',
        }
    }}