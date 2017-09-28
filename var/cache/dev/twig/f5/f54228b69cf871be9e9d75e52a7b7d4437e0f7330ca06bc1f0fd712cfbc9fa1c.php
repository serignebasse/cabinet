<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4abc638a5b713b06f1ef9d502607d9423af5649a12c680849b9fbd01b657098c extends Twig_Template
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
        $__internal_8c416a01674da819d8ca50696ad0d59c6839a37ae9baf05c2f9acdb5a960ea68 = $this->env->getExtension("native_profiler");
        $__internal_8c416a01674da819d8ca50696ad0d59c6839a37ae9baf05c2f9acdb5a960ea68->enter($__internal_8c416a01674da819d8ca50696ad0d59c6839a37ae9baf05c2f9acdb5a960ea68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8c416a01674da819d8ca50696ad0d59c6839a37ae9baf05c2f9acdb5a960ea68->leave($__internal_8c416a01674da819d8ca50696ad0d59c6839a37ae9baf05c2f9acdb5a960ea68_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
