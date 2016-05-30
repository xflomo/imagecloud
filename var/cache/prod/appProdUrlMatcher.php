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

        // user_home
        if (preg_match('#^/(?P<username>[^/]++)/Fotos/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'user_home');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_home')), array (  '_controller' => 'MainBundle\\Controller\\DefaultController::userHomeSite',));
        }

        // user_registration
        if ($pathinfo === '/registration') {
            return array (  '_controller' => 'MainBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'user_registration',);
        }

        // login
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login');
            }

            return array (  '_controller' => 'MainBundle\\Controller\\SecurityController::homeAction',  '_route' => 'login',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
