<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_0c5e7ab9656a36f03d7e5ea5f0bb88b6115287bbeae9fa76873e5f72f326f5ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb3442c0ae8ad585fa7581e6be06dc7e3fc85eecbef52919be6863aa40185be0 = $this->env->getExtension("native_profiler");
        $__internal_fb3442c0ae8ad585fa7581e6be06dc7e3fc85eecbef52919be6863aa40185be0->enter($__internal_fb3442c0ae8ad585fa7581e6be06dc7e3fc85eecbef52919be6863aa40185be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fb3442c0ae8ad585fa7581e6be06dc7e3fc85eecbef52919be6863aa40185be0->leave($__internal_fb3442c0ae8ad585fa7581e6be06dc7e3fc85eecbef52919be6863aa40185be0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
