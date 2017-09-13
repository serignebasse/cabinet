<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_b2f350d4a1f154cc42524f022d878ebb8f50e06d0787ce8e5d84219ce672d5eb extends Twig_Template
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
        $__internal_f1fce52613ff7536b0f5811d92983fb3f15e75c288cdc067f9472e0725106b66 = $this->env->getExtension("native_profiler");
        $__internal_f1fce52613ff7536b0f5811d92983fb3f15e75c288cdc067f9472e0725106b66->enter($__internal_f1fce52613ff7536b0f5811d92983fb3f15e75c288cdc067f9472e0725106b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f1fce52613ff7536b0f5811d92983fb3f15e75c288cdc067f9472e0725106b66->leave($__internal_f1fce52613ff7536b0f5811d92983fb3f15e75c288cdc067f9472e0725106b66_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
