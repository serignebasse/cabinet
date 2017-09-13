<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_52a3cd033a645ad5386217a6b702be83cad1d30852ff86e5959317aace7caeca extends Twig_Template
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
        $__internal_3220fbbf418c13bbeb3b50d9e6dcc4c471a994bf94fe10c359afb37fbbb4bffc = $this->env->getExtension("native_profiler");
        $__internal_3220fbbf418c13bbeb3b50d9e6dcc4c471a994bf94fe10c359afb37fbbb4bffc->enter($__internal_3220fbbf418c13bbeb3b50d9e6dcc4c471a994bf94fe10c359afb37fbbb4bffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_3220fbbf418c13bbeb3b50d9e6dcc4c471a994bf94fe10c359afb37fbbb4bffc->leave($__internal_3220fbbf418c13bbeb3b50d9e6dcc4c471a994bf94fe10c359afb37fbbb4bffc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
