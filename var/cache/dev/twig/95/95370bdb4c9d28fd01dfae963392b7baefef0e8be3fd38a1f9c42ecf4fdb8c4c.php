<?php

/* ::utilisateur.html.twig */
class __TwigTemplate_29e82f11073e58916c284c4f494ba168f1e0beb335e264d754fd7cf076569155 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basse.html.twig", "::utilisateur.html.twig", 1);
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
        $__internal_8ae0a95fc80a4c5e00302a67befbb36bd3432941ad2f2e0609ea969f9520a2b5 = $this->env->getExtension("native_profiler");
        $__internal_8ae0a95fc80a4c5e00302a67befbb36bd3432941ad2f2e0609ea969f9520a2b5->enter($__internal_8ae0a95fc80a4c5e00302a67befbb36bd3432941ad2f2e0609ea969f9520a2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::utilisateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ae0a95fc80a4c5e00302a67befbb36bd3432941ad2f2e0609ea969f9520a2b5->leave($__internal_8ae0a95fc80a4c5e00302a67befbb36bd3432941ad2f2e0609ea969f9520a2b5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_befedd23bcdabd1c8059f275505b032523490aa728d693dd1fcf3127278aab30 = $this->env->getExtension("native_profiler");
        $__internal_befedd23bcdabd1c8059f275505b032523490aa728d693dd1fcf3127278aab30->enter($__internal_befedd23bcdabd1c8059f275505b032523490aa728d693dd1fcf3127278aab30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_befedd23bcdabd1c8059f275505b032523490aa728d693dd1fcf3127278aab30->leave($__internal_befedd23bcdabd1c8059f275505b032523490aa728d693dd1fcf3127278aab30_prof);

    }

    public function getTemplateName()
    {
        return "::utilisateur.html.twig";
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
