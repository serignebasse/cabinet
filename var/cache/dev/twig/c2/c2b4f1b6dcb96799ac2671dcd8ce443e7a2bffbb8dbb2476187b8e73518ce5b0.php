<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_7560ba131e57ae9597d6decc6df9c5995f6fb49f0e5bfab277a530516e5ad155 extends Twig_Template
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
        $__internal_4b01f6ae5cc1dc62136a4903f8ac0cc42f331ee09d258a7d6416c31bb502979d = $this->env->getExtension("native_profiler");
        $__internal_4b01f6ae5cc1dc62136a4903f8ac0cc42f331ee09d258a7d6416c31bb502979d->enter($__internal_4b01f6ae5cc1dc62136a4903f8ac0cc42f331ee09d258a7d6416c31bb502979d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4b01f6ae5cc1dc62136a4903f8ac0cc42f331ee09d258a7d6416c31bb502979d->leave($__internal_4b01f6ae5cc1dc62136a4903f8ac0cc42f331ee09d258a7d6416c31bb502979d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
