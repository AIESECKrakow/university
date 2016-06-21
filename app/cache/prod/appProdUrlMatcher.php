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

        // sign-up
        if ($pathinfo === '/sign-up') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::signUpAction',  '_route' => 'sign-up',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            // partners
            if ($pathinfo === '/partners') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::partnersAction',  '_route' => 'partners',);
            }

            // price
            if ($pathinfo === '/price') {
                return array (  '_controller' => 'AppBundle\\Controller\\PriceController::priceAction',  '_route' => 'price',);
            }

        }

        // about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'AppBundle\\Controller\\UniController::aboutAction',  '_route' => 'about',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
