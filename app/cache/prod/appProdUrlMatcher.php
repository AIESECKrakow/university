<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            // partners
            if ($pathinfo === '/partners') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::partnersAction',  '_route' => 'partners',);
            }

            // pricelist
            if ($pathinfo === '/pricelist') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::priceAction',  '_route' => 'pricelist',);
            }

        }

        // schedule
        if ($pathinfo === '/schedule') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::scheduleAction',  '_route' => 'schedule',);
        }

        // about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'about',);
        }

        // contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::contactAction',  '_route' => 'contact',);
        }

        // sign-up
        if ($pathinfo === '/sign-up') {
            return array (  '_controller' => 'AppBundle\\Controller\\SignUpController::signUpAction',  '_route' => 'sign-up',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
