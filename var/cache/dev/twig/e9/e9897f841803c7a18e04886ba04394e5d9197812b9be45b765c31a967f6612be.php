<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_b18065121aa09415c4b49078e5b509b0d306a2ee5f8b413e184b0e5117d4b85c extends Twig_Template
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
        $__internal_d57b6f49c960964aedacdcbbbe3b0ca613caf17d894ea4f0d055f16b24779363 = $this->env->getExtension("native_profiler");
        $__internal_d57b6f49c960964aedacdcbbbe3b0ca613caf17d894ea4f0d055f16b24779363->enter($__internal_d57b6f49c960964aedacdcbbbe3b0ca613caf17d894ea4f0d055f16b24779363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d57b6f49c960964aedacdcbbbe3b0ca613caf17d894ea4f0d055f16b24779363->leave($__internal_d57b6f49c960964aedacdcbbbe3b0ca613caf17d894ea4f0d055f16b24779363_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
