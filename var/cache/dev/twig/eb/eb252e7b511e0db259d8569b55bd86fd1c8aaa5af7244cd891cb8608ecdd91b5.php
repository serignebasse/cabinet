<?php

/* admin.html.twig */
class __TwigTemplate_2d2c6a999e853d41a76b0bade1c06efd37f8fbbab6969e552f16b84cf885bd7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basse.html.twig", "admin.html.twig", 1);
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
        $__internal_5385b50aba39cba0e42c37bdf8127fc8cee6779ed5bdf70ecc2d06a442517aab = $this->env->getExtension("native_profiler");
        $__internal_5385b50aba39cba0e42c37bdf8127fc8cee6779ed5bdf70ecc2d06a442517aab->enter($__internal_5385b50aba39cba0e42c37bdf8127fc8cee6779ed5bdf70ecc2d06a442517aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5385b50aba39cba0e42c37bdf8127fc8cee6779ed5bdf70ecc2d06a442517aab->leave($__internal_5385b50aba39cba0e42c37bdf8127fc8cee6779ed5bdf70ecc2d06a442517aab_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_92a587dc59b074ba2f8cba0836e0ef6037a02d8d5333e37398c288bf6853a390 = $this->env->getExtension("native_profiler");
        $__internal_92a587dc59b074ba2f8cba0836e0ef6037a02d8d5333e37398c288bf6853a390->enter($__internal_92a587dc59b074ba2f8cba0836e0ef6037a02d8d5333e37398c288bf6853a390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"content-wrapper\">
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <h1> Page Administrateur</h1>

        <p><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"> Se connecter</a></p>

    </div>
";
        
        $__internal_92a587dc59b074ba2f8cba0836e0ef6037a02d8d5333e37398c288bf6853a390->leave($__internal_92a587dc59b074ba2f8cba0836e0ef6037a02d8d5333e37398c288bf6853a390_prof);

    }

    public function getTemplateName()
    {
        return "admin.html.twig";
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
/*         <h1> Page Administrateur</h1>*/
/* */
/*         <p><a href="{{ path('fos_user_security_logout') }}"> Se connecter</a></p>*/
/* */
/*     </div>*/
/* {% endblock %}*/
