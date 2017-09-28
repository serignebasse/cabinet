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
        $__internal_96c54450454043036cf655b0144a4f6cb06612bffd1f7798e4951993f8bd7a6e = $this->env->getExtension("native_profiler");
        $__internal_96c54450454043036cf655b0144a4f6cb06612bffd1f7798e4951993f8bd7a6e->enter($__internal_96c54450454043036cf655b0144a4f6cb06612bffd1f7798e4951993f8bd7a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_96c54450454043036cf655b0144a4f6cb06612bffd1f7798e4951993f8bd7a6e->leave($__internal_96c54450454043036cf655b0144a4f6cb06612bffd1f7798e4951993f8bd7a6e_prof);

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
