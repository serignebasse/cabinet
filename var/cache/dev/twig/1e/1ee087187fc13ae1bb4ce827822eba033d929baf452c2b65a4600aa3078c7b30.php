<?php

/* homepage.html.twig */
class __TwigTemplate_d03fe5e32fc8937e34fd8d142cf69a4bf1bc2493f407a3153728b8bf631c2342 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basse.html.twig", "homepage.html.twig", 1);
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
        $__internal_dda9f86c0340d742ab107afdebd3e9653ae6651954080c542702a42725fcd192 = $this->env->getExtension("native_profiler");
        $__internal_dda9f86c0340d742ab107afdebd3e9653ae6651954080c542702a42725fcd192->enter($__internal_dda9f86c0340d742ab107afdebd3e9653ae6651954080c542702a42725fcd192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dda9f86c0340d742ab107afdebd3e9653ae6651954080c542702a42725fcd192->leave($__internal_dda9f86c0340d742ab107afdebd3e9653ae6651954080c542702a42725fcd192_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b99b8bf08d4cbc4d2881d5f655dd8cbe40768a35fa8b152374c1d8cc09a4392 = $this->env->getExtension("native_profiler");
        $__internal_2b99b8bf08d4cbc4d2881d5f655dd8cbe40768a35fa8b152374c1d8cc09a4392->enter($__internal_2b99b8bf08d4cbc4d2881d5f655dd8cbe40768a35fa8b152374c1d8cc09a4392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"content-wrapper\">
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <h1> Page d'accueil</h1>

        <p><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"> Se connecter</a></p>

    </div>
";
        
        $__internal_2b99b8bf08d4cbc4d2881d5f655dd8cbe40768a35fa8b152374c1d8cc09a4392->leave($__internal_2b99b8bf08d4cbc4d2881d5f655dd8cbe40768a35fa8b152374c1d8cc09a4392_prof);

    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
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
/*         <h1> Page d'accueil</h1>*/
/* */
/*         <p><a href="{{ path('fos_user_security_login') }}"> Se connecter</a></p>*/
/* */
/*     </div>*/
/* {% endblock %}*/
