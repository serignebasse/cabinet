<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_171ce06087b37654198c4659e35eb216e3042a4be7e151b9f8225dcf6ef47335 extends Twig_Template
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
        $__internal_2c6bb95526bdd1482a3eb9f78c0d775f2b7080799e9812c11fad1af6daa46aa9 = $this->env->getExtension("native_profiler");
        $__internal_2c6bb95526bdd1482a3eb9f78c0d775f2b7080799e9812c11fad1af6daa46aa9->enter($__internal_2c6bb95526bdd1482a3eb9f78c0d775f2b7080799e9812c11fad1af6daa46aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2c6bb95526bdd1482a3eb9f78c0d775f2b7080799e9812c11fad1af6daa46aa9->leave($__internal_2c6bb95526bdd1482a3eb9f78c0d775f2b7080799e9812c11fad1af6daa46aa9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
