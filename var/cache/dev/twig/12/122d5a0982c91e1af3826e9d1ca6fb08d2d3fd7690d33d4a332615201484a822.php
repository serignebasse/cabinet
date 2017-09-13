<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_fa0e8eb4b5f2d4215557d6cec14fc0a11c595a2a81f150447a97487288d34f1c extends Twig_Template
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
        $__internal_bb8efa3b913ddddba9d8d86fbda1f81214d604a112429c709be772cc0deca800 = $this->env->getExtension("native_profiler");
        $__internal_bb8efa3b913ddddba9d8d86fbda1f81214d604a112429c709be772cc0deca800->enter($__internal_bb8efa3b913ddddba9d8d86fbda1f81214d604a112429c709be772cc0deca800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_bb8efa3b913ddddba9d8d86fbda1f81214d604a112429c709be772cc0deca800->leave($__internal_bb8efa3b913ddddba9d8d86fbda1f81214d604a112429c709be772cc0deca800_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
