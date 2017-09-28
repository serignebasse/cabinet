<?php
/**
 * Created by PhpStorm.
 * User: Serigne BASSE
 * Date: 28/09/2017
 * Time: 13:12
 */

namespace AppBundle\EventListener;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;


class RegistrationListener implements EventSubscriberInterface

{
     public static function getSubscribedEvents()
     {
         return array(
             FOSUserEvents::REGISTRATION_SUCCESS=>'onRegistrationSuccess'
         );
     }

     public function onRegistrationSuccess(FormEvent $event){
         $role=array('ROLE_BIDON');
         $user=$event->getForm()->getData();
         $user->setRoles($role);
     }
}