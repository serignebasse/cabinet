<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_f35d736faf104202b7993884a9b86d2176f2cda9016e4cffe1cd2bc89fc9d14d extends Twig_Template
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
        $__internal_5b5e4d4c29b8e6206a5b8c53229f031aec97758425645bb6f1f68d569a61bfe8 = $this->env->getExtension("native_profiler");
        $__internal_5b5e4d4c29b8e6206a5b8c53229f031aec97758425645bb6f1f68d569a61bfe8->enter($__internal_5b5e4d4c29b8e6206a5b8c53229f031aec97758425645bb6f1f68d569a61bfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5b5e4d4c29b8e6206a5b8c53229f031aec97758425645bb6f1f68d569a61bfe8->leave($__internal_5b5e4d4c29b8e6206a5b8c53229f031aec97758425645bb6f1f68d569a61bfe8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
