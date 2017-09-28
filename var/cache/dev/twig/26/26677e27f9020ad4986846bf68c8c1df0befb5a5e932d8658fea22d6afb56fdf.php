<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ef5a75e75715d6728f59479bb22dd6d5c195738f63fadcfddfcf2554d903855c extends Twig_Template
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
        $__internal_aef3331a298cc416d023ca868bbb22648001b88987a9f7ac01a68629c0a6e104 = $this->env->getExtension("native_profiler");
        $__internal_aef3331a298cc416d023ca868bbb22648001b88987a9f7ac01a68629c0a6e104->enter($__internal_aef3331a298cc416d023ca868bbb22648001b88987a9f7ac01a68629c0a6e104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_aef3331a298cc416d023ca868bbb22648001b88987a9f7ac01a68629c0a6e104->leave($__internal_aef3331a298cc416d023ca868bbb22648001b88987a9f7ac01a68629c0a6e104_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
