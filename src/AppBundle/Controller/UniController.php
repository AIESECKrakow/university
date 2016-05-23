<?php

namespace AppBundle\Controller {

    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class UniController extends Controller
    {

        /**
         * @Route ("/about", name="about")

         */
        public function aboutAction ()
        {

            return $this->render('default/uni_about.html.twig');
        }
    }
}