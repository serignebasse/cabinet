<?php

/* ::login_success.html.twig */
class __TwigTemplate_381e957e1a183ff15a743159d421a47bc41124b26995dea49c26d1851f92c92a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basse.html.twig", "::login_success.html.twig", 1);
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
        $__internal_bd03497b2a02300e3f32451cf6d0b0925132cef0266d16f58caa7396b8924ce7 = $this->env->getExtension("native_profiler");
        $__internal_bd03497b2a02300e3f32451cf6d0b0925132cef0266d16f58caa7396b8924ce7->enter($__internal_bd03497b2a02300e3f32451cf6d0b0925132cef0266d16f58caa7396b8924ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::login_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd03497b2a02300e3f32451cf6d0b0925132cef0266d16f58caa7396b8924ce7->leave($__internal_bd03497b2a02300e3f32451cf6d0b0925132cef0266d16f58caa7396b8924ce7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b3ae0ac4f1338ffc07926364bcbfdc9afc055b07b9b03dce2c5529591b29f4a = $this->env->getExtension("native_profiler");
        $__internal_2b3ae0ac4f1338ffc07926364bcbfdc9afc055b07b9b03dce2c5529591b29f4a->enter($__internal_2b3ae0ac4f1338ffc07926364bcbfdc9afc055b07b9b03dce2c5529591b29f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"content-wrapper\">
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <p> Login et mot de passe correct</p>
        <p> Bonjour</p>

        <p><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("utilisateur_page");
        echo "\"></a></p>
        <p><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_page");
        echo "\"> </a></p>

    </div>
";
        
        $__internal_2b3ae0ac4f1338ffc07926364bcbfdc9afc055b07b9b03dce2c5529591b29f4a->leave($__internal_2b3ae0ac4f1338ffc07926364bcbfdc9afc055b07b9b03dce2c5529591b29f4a_prof);

    }

    public function getTemplateName()
    {
        return "::login_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  50 => 8,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'basse.html.twig' %}*/
/* {% block body %}*/
/*     <div class="content-wrapper">*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/*         <p> Login et mot de passe correct</p>*/
/*         <p> Bonjour</p>*/
/* */
/*         <p><a href="{{ path('utilisateur_page') }}"></a></p>*/
/*         <p><a href="{{ path('admin_page') }}"> </a></p>*/
/* */
/*     </div>*/
/* {% endblock %}*/
