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
        $__internal_66e04498c4d55bd2e2c00afe1ea6173c3d69beda9e14362235228c521405848f = $this->env->getExtension("native_profiler");
        $__internal_66e04498c4d55bd2e2c00afe1ea6173c3d69beda9e14362235228c521405848f->enter($__internal_66e04498c4d55bd2e2c00afe1ea6173c3d69beda9e14362235228c521405848f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_66e04498c4d55bd2e2c00afe1ea6173c3d69beda9e14362235228c521405848f->leave($__internal_66e04498c4d55bd2e2c00afe1ea6173c3d69beda9e14362235228c521405848f_prof);

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
