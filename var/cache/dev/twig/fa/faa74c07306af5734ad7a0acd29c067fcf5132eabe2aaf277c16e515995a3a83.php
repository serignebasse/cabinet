<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5df38b9460f857a65388403dc9975aeb36cf390ac08bf6977e69578247c22c1c extends Twig_Template
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
        $__internal_0d77917d52b3b83aaa9eaa9bf1874cdc90f7e61b9bbbfca8b97c156bf9350f37 = $this->env->getExtension("native_profiler");
        $__internal_0d77917d52b3b83aaa9eaa9bf1874cdc90f7e61b9bbbfca8b97c156bf9350f37->enter($__internal_0d77917d52b3b83aaa9eaa9bf1874cdc90f7e61b9bbbfca8b97c156bf9350f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_0d77917d52b3b83aaa9eaa9bf1874cdc90f7e61b9bbbfca8b97c156bf9350f37->leave($__internal_0d77917d52b3b83aaa9eaa9bf1874cdc90f7e61b9bbbfca8b97c156bf9350f37_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
