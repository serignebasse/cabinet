<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'consultation_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\ConsultationController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/consultation/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'consultation_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\ConsultationController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/consultation/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'consultation_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\ConsultationController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/consultation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'consultation_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\ConsultationController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/consultation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'consultation_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\ConsultationController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/consultation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sama_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'medecin_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\MedecinController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/medecin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'medecin_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\MedecinController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/medecin/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'medecin_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\MedecinController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/medecin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'medecin_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\MedecinController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/medecin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'medecin_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\MedecinController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/medecin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ordonnance_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\OrdonnanceController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ordonnance/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ordonnance_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\OrdonnanceController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ordonnance/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ordonnance_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\OrdonnanceController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ordonnance',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ordonnance_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\OrdonnanceController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/ordonnance',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ordonnance_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\OrdonnanceController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ordonnance',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'patient_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\PatientController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/patient/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'patient_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\PatientController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/patient/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'patient_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\PatientController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/patient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'patient_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\PatientController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/patient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'patient_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\PatientController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/patient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rendezvous_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\RendezvousController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rendezvous/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rendezvous_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\RendezvousController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rendezvous/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rendezvous_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\RendezvousController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/rendezvous',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rendezvous_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\RendezvousController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/rendezvous',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rendezvous_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\RendezvousController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/rendezvous',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'secretaire_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\SecretaireController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/secretaire/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'secretaire_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\SecretaireController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/secretaire/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'secretaire_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\SecretaireController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/secretaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'secretaire_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\SecretaireController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/secretaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'secretaire_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SamaBundle\\Controller\\SecretaireController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/secretaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
