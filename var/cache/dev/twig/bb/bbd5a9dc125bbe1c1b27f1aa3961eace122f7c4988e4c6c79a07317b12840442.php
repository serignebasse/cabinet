<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_77f376421b16ca0e2e79763720481bb112542d916fa6c172dbac53e4427ecaae extends Twig_Template
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
        $__internal_c4d434ef42dccf9f595f6059e9a8f6acf3532b0a84fffc964f0e107deef5bc81 = $this->env->getExtension("native_profiler");
        $__internal_c4d434ef42dccf9f595f6059e9a8f6acf3532b0a84fffc964f0e107deef5bc81->enter($__internal_c4d434ef42dccf9f595f6059e9a8f6acf3532b0a84fffc964f0e107deef5bc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_c4d434ef42dccf9f595f6059e9a8f6acf3532b0a84fffc964f0e107deef5bc81->leave($__internal_c4d434ef42dccf9f595f6059e9a8f6acf3532b0a84fffc964f0e107deef5bc81_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
