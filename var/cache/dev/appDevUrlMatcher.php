<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/analyse')) {
            // analyse_index
            if (rtrim($pathinfo, '/') === '/analyse') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_analyse_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'analyse_index');
                }

                return array (  '_controller' => 'SamaBundle\\Controller\\AnalyseController::indexAction',  '_route' => 'analyse_index',);
            }
            not_analyse_index:

            // analyse_new
            if ($pathinfo === '/analyse/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_analyse_new;
                }

                return array (  '_controller' => 'SamaBundle\\Controller\\AnalyseController::newAction',  '_route' => 'analyse_new',);
            }
            not_analyse_new:

            // analyse_show
            if (preg_match('#^/analyse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_analyse_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'analyse_show')), array (  '_controller' => 'SamaBundle\\Controller\\AnalyseController::showAction',));
            }
            not_analyse_show:

            // analyse_edit
            if (preg_match('#^/analyse/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_analyse_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'analyse_edit')), array (  '_controller' => 'SamaBundle\\Controller\\AnalyseController::editAction',));
            }
            not_analyse_edit:

            // analyse_delete
            if (preg_match('#^/analyse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_analyse_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'analyse_delete')), array (  '_controller' => 'SamaBundle\\Controller\\AnalyseController::deleteAction',));
            }
            not_analyse_delete:

        }

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

            // consultation_recherche
            if ($pathinfo === '/consultation/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_consultation_recherche;
                }

                return array (  '_controller' => 'SamaBundle\\Controller\\ConsultationController::rechercheAction',  '_route' => 'consultation_recherche',);
            }
            not_consultation_recherche:

        }

        // admin_page
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_page');
            }

            return array (  '_controller' => 'SamaBundle\\Controller\\DefaultController::adminPageAction',  '_route' => 'admin_page',);
        }

        // utilisateur_page
        if (rtrim($pathinfo, '/') === '/utilisateur') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'utilisateur_page');
            }

            return array (  '_controller' => 'SamaBundle\\Controller\\DefaultController::utilisateurPageAction',  '_route' => 'utilisateur_page',);
        }

        if (0 === strpos($pathinfo, '/med')) {
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

                // medecin_recherche
                if ($pathinfo === '/medecin/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_medecin_recherche;
                    }

                    return array (  '_controller' => 'SamaBundle\\Controller\\MedecinController::rechercheAction',  '_route' => 'medecin_recherche',);
                }
                not_medecin_recherche:

            }

            if (0 === strpos($pathinfo, '/medicament')) {
                // medicament_index
                if (rtrim($pathinfo, '/') === '/medicament') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_medicament_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'medicament_index');
                    }

                    return array (  '_controller' => 'SamaBundle\\Controller\\MedicamentController::indexAction',  '_route' => 'medicament_index',);
                }
                not_medicament_index:

                // medicament_new
                if ($pathinfo === '/medicament/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_medicament_new;
                    }

                    return array (  '_controller' => 'SamaBundle\\Controller\\MedicamentController::newAction',  '_route' => 'medicament_new',);
                }
                not_medicament_new:

                // medicament_show
                if (preg_match('#^/medicament/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_medicament_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'medicament_show')), array (  '_controller' => 'SamaBundle\\Controller\\MedicamentController::showAction',));
                }
                not_medicament_show:

                // medicament_edit
                if (preg_match('#^/medicament/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_medicament_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'medicament_edit')), array (  '_controller' => 'SamaBundle\\Controller\\MedicamentController::editAction',));
                }
                not_medicament_edit:

                // medicament_delete
                if (preg_match('#^/medicament/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_medicament_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'medicament_delete')), array (  '_controller' => 'SamaBundle\\Controller\\MedicamentController::deleteAction',));
                }
                not_medicament_delete:

            }

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

            // patient_recherche
            if ($pathinfo === '/patient/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_patient_recherche;
                }

                return array (  '_controller' => 'SamaBundle\\Controller\\PatientController::rechercheAction',  '_route' => 'patient_recherche',);
            }
            not_patient_recherche:

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

            // rendezvous_recherche
            if ($pathinfo === '/rendezvous/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_rendezvous_recherche;
                }

                return array (  '_controller' => 'SamaBundle\\Controller\\RendezvousController::rechercheAction',  '_route' => 'rendezvous_recherche',);
            }
            not_rendezvous_recherche:

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

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
