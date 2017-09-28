<?php

/* login_success.html.twig */
class __TwigTemplate_a3169db519d21cba403ca04b6b9885eb5a8b1dc3b36814aa96d884d988311d68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basse.html.twig", "login_success.html.twig", 1);
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
        $__internal_39d331b8cfdd0641b3dc413b0949b51d63e13c9eeb2b1251f8ae6ba360000bf1 = $this->env->getExtension("native_profiler");
        $__internal_39d331b8cfdd0641b3dc413b0949b51d63e13c9eeb2b1251f8ae6ba360000bf1->enter($__internal_39d331b8cfdd0641b3dc413b0949b51d63e13c9eeb2b1251f8ae6ba360000bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39d331b8cfdd0641b3dc413b0949b51d63e13c9eeb2b1251f8ae6ba360000bf1->leave($__internal_39d331b8cfdd0641b3dc413b0949b51d63e13c9eeb2b1251f8ae6ba360000bf1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7705a2f4b13c15b71e006ce5cb8a0312fe0e0ed7e6077281996171fd8f29628 = $this->env->getExtension("native_profiler");
        $__internal_c7705a2f4b13c15b71e006ce5cb8a0312fe0e0ed7e6077281996171fd8f29628->enter($__internal_c7705a2f4b13c15b71e006ce5cb8a0312fe0e0ed7e6077281996171fd8f29628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c7705a2f4b13c15b71e006ce5cb8a0312fe0e0ed7e6077281996171fd8f29628->leave($__internal_c7705a2f4b13c15b71e006ce5cb8a0312fe0e0ed7e6077281996171fd8f29628_prof);

    }

    public function getTemplateName()
    {
        return "login_success.html.twig";
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
