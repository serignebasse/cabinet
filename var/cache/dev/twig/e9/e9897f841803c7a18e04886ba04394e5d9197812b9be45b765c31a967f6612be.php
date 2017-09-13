<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_b18065121aa09415c4b49078e5b509b0d306a2ee5f8b413e184b0e5117d4b85c extends Twig_Template
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
        $__internal_14079ed63f40834bfed3cf577c43d189dad36213ada2729c0f0522cc96aa695d = $this->env->getExtension("native_profiler");
        $__internal_14079ed63f40834bfed3cf577c43d189dad36213ada2729c0f0522cc96aa695d->enter($__internal_14079ed63f40834bfed3cf577c43d189dad36213ada2729c0f0522cc96aa695d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_14079ed63f40834bfed3cf577c43d189dad36213ada2729c0f0522cc96aa695d->leave($__internal_14079ed63f40834bfed3cf577c43d189dad36213ada2729c0f0522cc96aa695d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
