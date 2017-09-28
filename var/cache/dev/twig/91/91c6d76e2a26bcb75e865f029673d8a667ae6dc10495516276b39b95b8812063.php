<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_7e9b4705079117833936059e92744c6492f646fab44938ab5fcaa3943dd66a8f extends Twig_Template
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
        $__internal_9319f35cfde3bf036104927c328cefc8a24edba432ec5129d2b6c110bf35ebbd = $this->env->getExtension("native_profiler");
        $__internal_9319f35cfde3bf036104927c328cefc8a24edba432ec5129d2b6c110bf35ebbd->enter($__internal_9319f35cfde3bf036104927c328cefc8a24edba432ec5129d2b6c110bf35ebbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_9319f35cfde3bf036104927c328cefc8a24edba432ec5129d2b6c110bf35ebbd->leave($__internal_9319f35cfde3bf036104927c328cefc8a24edba432ec5129d2b6c110bf35ebbd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
