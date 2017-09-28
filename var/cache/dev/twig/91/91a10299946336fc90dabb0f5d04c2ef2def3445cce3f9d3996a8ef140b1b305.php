<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_4e0262db3b0841dc64285563fdbb61dac1c1ad98f37610ce8f2b745e06e29f75 extends Twig_Template
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
        $__internal_ed3fdcbc119902370bc950446cea91b1c7354f3345446ad0be4089e96f6b3f43 = $this->env->getExtension("native_profiler");
        $__internal_ed3fdcbc119902370bc950446cea91b1c7354f3345446ad0be4089e96f6b3f43->enter($__internal_ed3fdcbc119902370bc950446cea91b1c7354f3345446ad0be4089e96f6b3f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ed3fdcbc119902370bc950446cea91b1c7354f3345446ad0be4089e96f6b3f43->leave($__internal_ed3fdcbc119902370bc950446cea91b1c7354f3345446ad0be4089e96f6b3f43_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
