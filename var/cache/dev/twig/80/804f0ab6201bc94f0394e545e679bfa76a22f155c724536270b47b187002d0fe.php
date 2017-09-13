<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_6f9ba907ffb16f18b50fd2734698a400e4f674c40d8ac8dec6d4b1a0613f8e6d extends Twig_Template
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
        $__internal_eb85ef30b56d36094fe535ea909cb68baa833b350b4b9bff090796b5075dca0c = $this->env->getExtension("native_profiler");
        $__internal_eb85ef30b56d36094fe535ea909cb68baa833b350b4b9bff090796b5075dca0c->enter($__internal_eb85ef30b56d36094fe535ea909cb68baa833b350b4b9bff090796b5075dca0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_eb85ef30b56d36094fe535ea909cb68baa833b350b4b9bff090796b5075dca0c->leave($__internal_eb85ef30b56d36094fe535ea909cb68baa833b350b4b9bff090796b5075dca0c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
