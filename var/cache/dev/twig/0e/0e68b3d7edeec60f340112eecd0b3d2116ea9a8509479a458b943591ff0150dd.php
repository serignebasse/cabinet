<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_73fcb3d75b8786b6ec2554ef278a35ec57a3a9c4e4b025cc50b26a9f38cc026d extends Twig_Template
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
        $__internal_4a13caef20a25079dd2ce7b6da47ac800862dd10202e1fb6777f7fa7ca9b52c1 = $this->env->getExtension("native_profiler");
        $__internal_4a13caef20a25079dd2ce7b6da47ac800862dd10202e1fb6777f7fa7ca9b52c1->enter($__internal_4a13caef20a25079dd2ce7b6da47ac800862dd10202e1fb6777f7fa7ca9b52c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4a13caef20a25079dd2ce7b6da47ac800862dd10202e1fb6777f7fa7ca9b52c1->leave($__internal_4a13caef20a25079dd2ce7b6da47ac800862dd10202e1fb6777f7fa7ca9b52c1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
