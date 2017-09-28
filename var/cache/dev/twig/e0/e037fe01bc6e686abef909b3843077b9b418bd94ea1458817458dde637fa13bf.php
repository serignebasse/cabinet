<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f75c28019be180bd807d42b14c5867d1ab9feff51a61dd10540e5e5dc48483bd extends Twig_Template
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
        $__internal_b25e87a9fae74216a0ca3ff65a3b80acb47aa5f4a79e49b27082c47f633b13cf = $this->env->getExtension("native_profiler");
        $__internal_b25e87a9fae74216a0ca3ff65a3b80acb47aa5f4a79e49b27082c47f633b13cf->enter($__internal_b25e87a9fae74216a0ca3ff65a3b80acb47aa5f4a79e49b27082c47f633b13cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b25e87a9fae74216a0ca3ff65a3b80acb47aa5f4a79e49b27082c47f633b13cf->leave($__internal_b25e87a9fae74216a0ca3ff65a3b80acb47aa5f4a79e49b27082c47f633b13cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
