<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_00329dce159488a38ea9ad9a6a5cf7ea3b9764fc6bda5eba10dcafe880021fe3 extends Twig_Template
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
        $__internal_c903af25d7882156600290387078c0a06a7e9b9e1d91b30456cf7471f6c128a5 = $this->env->getExtension("native_profiler");
        $__internal_c903af25d7882156600290387078c0a06a7e9b9e1d91b30456cf7471f6c128a5->enter($__internal_c903af25d7882156600290387078c0a06a7e9b9e1d91b30456cf7471f6c128a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c903af25d7882156600290387078c0a06a7e9b9e1d91b30456cf7471f6c128a5->leave($__internal_c903af25d7882156600290387078c0a06a7e9b9e1d91b30456cf7471f6c128a5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
