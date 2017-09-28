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
        $__internal_145e95945807721dd52417c4c957ae4f11cb5104de683c8e1cbaad657cdc7722 = $this->env->getExtension("native_profiler");
        $__internal_145e95945807721dd52417c4c957ae4f11cb5104de683c8e1cbaad657cdc7722->enter($__internal_145e95945807721dd52417c4c957ae4f11cb5104de683c8e1cbaad657cdc7722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_145e95945807721dd52417c4c957ae4f11cb5104de683c8e1cbaad657cdc7722->leave($__internal_145e95945807721dd52417c4c957ae4f11cb5104de683c8e1cbaad657cdc7722_prof);

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
