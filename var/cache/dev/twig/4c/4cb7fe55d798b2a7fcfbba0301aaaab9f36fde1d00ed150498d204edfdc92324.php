<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_32e72e64b079a426f8b629134ed8b7f541f8278d33d577ef2de10b3f687b2b50 extends Twig_Template
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
        $__internal_c71eb77b8bb4b8e00a73f574bf97c3a29fb96a07880872e69e5ed7c813a17a99 = $this->env->getExtension("native_profiler");
        $__internal_c71eb77b8bb4b8e00a73f574bf97c3a29fb96a07880872e69e5ed7c813a17a99->enter($__internal_c71eb77b8bb4b8e00a73f574bf97c3a29fb96a07880872e69e5ed7c813a17a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c71eb77b8bb4b8e00a73f574bf97c3a29fb96a07880872e69e5ed7c813a17a99->leave($__internal_c71eb77b8bb4b8e00a73f574bf97c3a29fb96a07880872e69e5ed7c813a17a99_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
