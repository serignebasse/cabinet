<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_3713918bc589fef5494343c1c97a0ef459820c35df6a47a00515d90e1dccb122 extends Twig_Template
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
        $__internal_8c807ecf8a297167da27551dbfdf66d3f7966259fe58bc5463da79d7be99a44e = $this->env->getExtension("native_profiler");
        $__internal_8c807ecf8a297167da27551dbfdf66d3f7966259fe58bc5463da79d7be99a44e->enter($__internal_8c807ecf8a297167da27551dbfdf66d3f7966259fe58bc5463da79d7be99a44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8c807ecf8a297167da27551dbfdf66d3f7966259fe58bc5463da79d7be99a44e->leave($__internal_8c807ecf8a297167da27551dbfdf66d3f7966259fe58bc5463da79d7be99a44e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
