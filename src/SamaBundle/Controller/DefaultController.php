<?php

namespace SamaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('homepage.html.twig');
    }

    /**
     * @Route("/admin/", name="admin_page")
     */

    public function adminPageAction(){

        return $this->render('admin.html.twig');
    }

    /**
     * @Route("/utilisateur/", name="utilisateur_page")
     */

    public function utilisateurPageAction(){

        return $this->render('utilisateur.html.twig');
    }


    /**
     * @Route("/login_ok/", name="login_ok")
     */

    public function showInfoUserAction(){

        return $this->render('login_success.html.twig');
    }
}
