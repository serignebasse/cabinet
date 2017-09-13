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

        if (0 === strpos($pathinfo, '/consultation')) {
            // consultation_index
            if (rtrim($pathinfo, '/') === '/consultation') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_consultation_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'consultation_index');
                }

                return array (  '_controller' => 'SamaBundle\\Controller\\ConsultationController::indexAction',  '_route' => 'consultation_index',);
            }
            not_consultation_index:

            // consultation_new
            if ($pathinfo === '/consultation/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_consultation_new;
                }

                return array (  '_controller' => 'SamaBundle\\Controller\\ConsultationController::newAction',  '_route' => 'consultation_new',);
            }
            not_consultation_new:

            // consultation_show
            if (preg_match('#^/consultation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_consultation_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'consultation_show')), array (  '_controller' => 'SamaBundle\\Controller\\ConsultationController::showAction',));
            }
            not_consultation_show:

            // consultation_edit
            if (preg_match('#^/consultation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_consultation_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'consultation_edit')), array (  '_controller' => 'SamaBundle\\Controller\\ConsultationController::editAction',));
            }
            not_consultation_edit:

            // consultation_delete
            if (preg_match('#^/consultation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_consultation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'consultation_delete')), array (  '_controller' => 'SamaBundle\\Controller\\ConsultationController::deleteAction',));
            }
            not_consultation_delete:

        }

        // sama_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sama_default_index');
            }

            return array (  '_controller' => 'SamaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sama_default_index',);
        }

        if (0 === strpos($pathinfo, '/medecin')) {
            // medecin_index
            if (rtrim($pathinfo, '/') === '/medecin') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_medecin_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'medecin_index');
                }

                return array (  '_controller' => 'SamaBundle\\Controller\\MedecinController::indexAction',  '_route' => 'medecin_index',);
            }
            not_medecin_index:

            // medecin_new
            if ($pathinfo === '/medecin/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_medecin_new;
                }

                return array (  '_controller' => 'SamaBundle\\Controller\\MedecinController::newAction',  '_route' => 'medecin_new',);
            }
            not_medecin_new:

            // medecin_show
            if (preg_match('#^/medecin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_medecin_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medecin_show')), array (  '_controller' => 'SamaBundle\\Controller\\MedecinController::showAction',));
            }
            not_medecin_show:

            // medecin_edit
            if (preg_match('#^/medecin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_medecin_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medecin_edit')), array (  '_controller' => 'SamaBundle\\Controller\\MedecinController::editAction',));
            }
            not_medecin_edit:

            // medecin_delete
            if (preg_match('#^/medecin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_medecin_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medecin_delete')), array (  '_controller' => 'SamaBundle\\Controller\\MedecinController::deleteAction',));
            }
            not_medecin_delete:

        }

        if (0 === strpos($pathinfo, '/ordonnance')) {
            // ordonnance_index
            if (rtrim($pathinfo, '/') === '/ordonnance') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ordonnance_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ordonnance_index');
                }

                return array (  '_controller' => 'SamaBundle\\Controller\\OrdonnanceController::indexAction',  '_route' => 'ordonnance_index',);
            }
            not_ordonnance_index:

            // ordonnance_new
            if ($pathinfo === '/ordonnance/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ordonnance_new;
                }

                return array (  '_controller' => 'SamaBundle\\Controller\\OrdonnanceController::newAction',  '_route' => 'ordonnance_new',);
            }
            not_ordonnance_new:

            // ordonnance_show
            if (preg_match('#^/ordonnance/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ordonnance_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnance_show')), array (  '_controller' => 'SamaBundle\\Controller\\OrdonnanceController::showAction',));
            }
            not_ordonnance_show:

            // ordonnance_edit
            if (preg_match('#^/ordonnance/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ordonnance_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnance_edit')), array (  '_controller' => 'SamaBundle\\Controller\\OrdonnanceController::editAction',));
            }
            not_ordonnance_edit:

            // ordonnance_delete
            if (preg_match('#^/ordonnance/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ordonnance_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnance_delete')), array (  '_controller' => 'SamaBundle\\Controller\\OrdonnanceController::deleteAction',));
            }
            not_ordonnance_delete:

        }

        if (0 === strpos($pathinfo, '/patient')) {
            // patient_index
            if (rtrim($pathinfo, '/') === '/patient') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_patient_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'patient_index');
                }

                return array (  '_controller' => 'SamaBundle\\Controller\\PatientController::indexAction',  '_route' => 'patient_index',);
            }
            not_patient_index:

            // patient_new
            if ($pathinfo === '/patient/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_patient_new;
                }

                return array (  '_controller' => 'SamaBundle\\Controller\\PatientController::newAction',  '_route' => 'patient_new',);
            }
            not_patient_new:

            // patient_show
            if (preg_match('#^/patient/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_patient_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patient_show')), array (  '_controller' => 'SamaBundle\\Controller\\PatientController::showAction',));
            }
            not_patient_show:

            // patient_edit
            if (preg_match('#^/patient/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_patient_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patient_edit')), array (  '_controller' => 'SamaBundle\\Controller\\PatientController::editAction',));
            }
            not_patient_edit:

            // patient_delete
            if (preg_match('#^/patient/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_patient_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patient_delete')), array (  '_controller' => 'SamaBundle\\Controller\\PatientController::deleteAction',));
            }
            not_patient_delete:

        }

        if (0 === strpos($pathinfo, '/rendezvous')) {
            // rendezvous_index
            if (rtrim($pathinfo, '/') === '/rendezvous') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_rendezvous_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'rendezvous_index');
                }

                return array (  '_controller' => 'SamaBundle\\Controller\\RendezvousController::indexAction',  '_route' => 'rendezvous_index',);
            }
            not_rendezvous_index:

            // rendezvous_new
            if ($pathinfo === '/rendezvous/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_rendezvous_new;
                }

                return array (  '_controller' => 'SamaBundle\\Controller\\RendezvousController::newAction',  '_route' => 'rendezvous_new',);
            }
            not_rendezvous_new:

            // rendezvous_show
            if (preg_match('#^/rendezvous/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_rendezvous_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rendezvous_show')), array (  '_controller' => 'SamaBundle\\Controller\\RendezvousController::showAction',));
            }
            not_rendezvous_show:

            // rendezvous_edit
            if (preg_match('#^/rendezvous/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_rendezvous_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rendezvous_edit')), array (  '_controller' => 'SamaBundle\\Controller\\RendezvousController::editAction',));
            }
            not_rendezvous_edit:

            // rendezvous_delete
            if (preg_match('#^/rendezvous/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_rendezvous_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rendezvous_delete')), array (  '_controller' => 'SamaBundle\\Controller\\RendezvousController::deleteAction',));
            }
            not_rendezvous_delete:

        }

        if (0 === strpos($pathinfo, '/secretaire')) {
            // secretaire_index
            if (rtrim($pathinfo, '/') === '/secretaire') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_secretaire_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'secretaire_index');
                }

                return array (  '_controller' => 'SamaBundle\\Controller\\SecretaireController::indexAction',  '_route' => 'secretaire_index',);
            }
            not_secretaire_index:

            // secretaire_new
            if ($pathinfo === '/secretaire/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_secretaire_new;
                }

                return array (  '_controller' => 'SamaBundle\\Controller\\SecretaireController::newAction',  '_route' => 'secretaire_new',);
            }
            not_secretaire_new:

            // secretaire_show
            if (preg_match('#^/secretaire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_secretaire_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'secretaire_show')), array (  '_controller' => 'SamaBundle\\Controller\\SecretaireController::showAction',));
            }
            not_secretaire_show:

            // secretaire_edit
            if (preg_match('#^/secretaire/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_secretaire_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'secretaire_edit')), array (  '_controller' => 'SamaBundle\\Controller\\SecretaireController::editAction',));
            }
            not_secretaire_edit:

            // secretaire_delete
            if (preg_match('#^/secretaire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_secretaire_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'secretaire_delete')), array (  '_controller' => 'SamaBundle\\Controller\\SecretaireController::deleteAction',));
            }
            not_secretaire_delete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
