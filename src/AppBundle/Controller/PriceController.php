<<<<<<< Updated upstream
<?php

namespace AppBundle\Controller
{
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;


    
class PriceController extends Controller
{
    /**
     * @Route("/price", name="price")
     */
    public function priceAction()
    {
        return $this->render('default/uni_price.html.twig');
    }
}
=======
w<?php

namespace AppBundle\Controller {

    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class UniController extends Controller
    {

        /**
         * @Route ("/price", name="price")

         */
        public function aboutAction ()
        {

            return $this->render('default/uni_price.html.twig');
        }
    }
>>>>>>> Stashed changes
}