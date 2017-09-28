<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_771925c0c22045dd832eed7465ed345e60a8068574f9c43ac99f96d7f24bef56 extends Twig_Template
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
        $__internal_e3573d60bfe9a3f8057d9500ab0191d12b82e13096a1f6f1b8c34b90bbb4b3a5 = $this->env->getExtension("native_profiler");
        $__internal_e3573d60bfe9a3f8057d9500ab0191d12b82e13096a1f6f1b8c34b90bbb4b3a5->enter($__internal_e3573d60bfe9a3f8057d9500ab0191d12b82e13096a1f6f1b8c34b90bbb4b3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e3573d60bfe9a3f8057d9500ab0191d12b82e13096a1f6f1b8c34b90bbb4b3a5->leave($__internal_e3573d60bfe9a3f8057d9500ab0191d12b82e13096a1f6f1b8c34b90bbb4b3a5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
