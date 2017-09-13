<?php

/* SamaBundle:Default:index.html.twig */
class __TwigTemplate_62c70cd9fb248815864b0596693104964fc55c2e22da31b09b2e4c7bb24c3176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SamaBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c76cb89d6f9725d287c78a1856da14dfbd445ba163ff954096af1758135cb661 = $this->env->getExtension("native_profiler");
        $__internal_c76cb89d6f9725d287c78a1856da14dfbd445ba163ff954096af1758135cb661->enter($__internal_c76cb89d6f9725d287c78a1856da14dfbd445ba163ff954096af1758135cb661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SamaBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c76cb89d6f9725d287c78a1856da14dfbd445ba163ff954096af1758135cb661->leave($__internal_c76cb89d6f9725d287c78a1856da14dfbd445ba163ff954096af1758135cb661_prof);

    }

    public function getTemplateName()
    {
        return "SamaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
