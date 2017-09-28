<?php

/* utilisateur.html.twig */
class __TwigTemplate_771c56af4dd628d6fa6c0e3da391a33691d0e14592c95c94b3dcc2fa379a4965 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basse.html.twig", "utilisateur.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "basse.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6141e9c5178fb6cd21f05f3947cb1cd5fb09b9fcbe9b837957e07d6e5fa1d2de = $this->env->getExtension("native_profiler");
        $__internal_6141e9c5178fb6cd21f05f3947cb1cd5fb09b9fcbe9b837957e07d6e5fa1d2de->enter($__internal_6141e9c5178fb6cd21f05f3947cb1cd5fb09b9fcbe9b837957e07d6e5fa1d2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6141e9c5178fb6cd21f05f3947cb1cd5fb09b9fcbe9b837957e07d6e5fa1d2de->leave($__internal_6141e9c5178fb6cd21f05f3947cb1cd5fb09b9fcbe9b837957e07d6e5fa1d2de_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c003af0ca1ad0634587f1d72b455b34789ecbe72abb1f1df0a7b4679f9c5afb3 = $this->env->getExtension("native_profiler");
        $__internal_c003af0ca1ad0634587f1d72b455b34789ecbe72abb1f1df0a7b4679f9c5afb3->enter($__internal_c003af0ca1ad0634587f1d72b455b34789ecbe72abb1f1df0a7b4679f9c5afb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"content-wrapper\">
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <h1> Page Utilisateur</h1>

        <p><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"> Se déconnecter</a></p>

    </div>
";
        
        $__internal_c003af0ca1ad0634587f1d72b455b34789ecbe72abb1f1df0a7b4679f9c5afb3->leave($__internal_c003af0ca1ad0634587f1d72b455b34789ecbe72abb1f1df0a7b4679f9c5afb3_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'basse.html.twig' %}*/
/* {% block body %}*/
/*     <div class="content-wrapper">*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/*         <h1> Page Utilisateur</h1>*/
/* */
/*         <p><a href="{{ path('fos_user_security_logout') }}"> Se déconnecter</a></p>*/
/* */
/*     </div>*/
/* {% endblock %}*/
