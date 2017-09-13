<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b96216d2d06f1b589fc224dd89d44f3f79be9c492e821cf56a4a57bd2d173787 extends Twig_Template
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
        $__internal_93a5c4dc4e4d9d33e0f3287a69e9d06835d741d93b6166e6aba4491ac1dfe44c = $this->env->getExtension("native_profiler");
        $__internal_93a5c4dc4e4d9d33e0f3287a69e9d06835d741d93b6166e6aba4491ac1dfe44c->enter($__internal_93a5c4dc4e4d9d33e0f3287a69e9d06835d741d93b6166e6aba4491ac1dfe44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_93a5c4dc4e4d9d33e0f3287a69e9d06835d741d93b6166e6aba4491ac1dfe44c->leave($__internal_93a5c4dc4e4d9d33e0f3287a69e9d06835d741d93b6166e6aba4491ac1dfe44c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
