<?php

/* @Sama/Default/index.html.twig */
class __TwigTemplate_c55a3fc5426b6e2ca4ad81873a6a06ced6e30ff2db04bdf9313ed844f17a2833 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Sama/Default/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25e5cb7133b8e9c080551553bbc292dbe3aafdcb09100f171e600d80bdb3c25b = $this->env->getExtension("native_profiler");
        $__internal_25e5cb7133b8e9c080551553bbc292dbe3aafdcb09100f171e600d80bdb3c25b->enter($__internal_25e5cb7133b8e9c080551553bbc292dbe3aafdcb09100f171e600d80bdb3c25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Sama/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25e5cb7133b8e9c080551553bbc292dbe3aafdcb09100f171e600d80bdb3c25b->leave($__internal_25e5cb7133b8e9c080551553bbc292dbe3aafdcb09100f171e600d80bdb3c25b_prof);

    }

    public function getTemplateName()
    {
        return "@Sama/Default/index.html.twig";
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
