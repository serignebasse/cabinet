<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1e467d16bd1a4b4782a8648f5be7d2a9faf5c6c746a8da0e676ef029215062be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_198c596431b66508527fda69b0b29aea0e9dd825a7cb44abb0e06c3959d430b9 = $this->env->getExtension("native_profiler");
        $__internal_198c596431b66508527fda69b0b29aea0e9dd825a7cb44abb0e06c3959d430b9->enter($__internal_198c596431b66508527fda69b0b29aea0e9dd825a7cb44abb0e06c3959d430b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_198c596431b66508527fda69b0b29aea0e9dd825a7cb44abb0e06c3959d430b9->leave($__internal_198c596431b66508527fda69b0b29aea0e9dd825a7cb44abb0e06c3959d430b9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f953ba8bab90ee5646a73cb9120e0423c643866a8f4f6839962e285072536339 = $this->env->getExtension("native_profiler");
        $__internal_f953ba8bab90ee5646a73cb9120e0423c643866a8f4f6839962e285072536339->enter($__internal_f953ba8bab90ee5646a73cb9120e0423c643866a8f4f6839962e285072536339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f953ba8bab90ee5646a73cb9120e0423c643866a8f4f6839962e285072536339->leave($__internal_f953ba8bab90ee5646a73cb9120e0423c643866a8f4f6839962e285072536339_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c7235a33689efc83bed61b6ae0ede2a07933eb5ef025dbe301358081f773134 = $this->env->getExtension("native_profiler");
        $__internal_0c7235a33689efc83bed61b6ae0ede2a07933eb5ef025dbe301358081f773134->enter($__internal_0c7235a33689efc83bed61b6ae0ede2a07933eb5ef025dbe301358081f773134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0c7235a33689efc83bed61b6ae0ede2a07933eb5ef025dbe301358081f773134->leave($__internal_0c7235a33689efc83bed61b6ae0ede2a07933eb5ef025dbe301358081f773134_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_23bb02a03c95d730ca2c1e3775eef870fb181d04f39f47037e1426bcf1b6af57 = $this->env->getExtension("native_profiler");
        $__internal_23bb02a03c95d730ca2c1e3775eef870fb181d04f39f47037e1426bcf1b6af57->enter($__internal_23bb02a03c95d730ca2c1e3775eef870fb181d04f39f47037e1426bcf1b6af57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_23bb02a03c95d730ca2c1e3775eef870fb181d04f39f47037e1426bcf1b6af57->leave($__internal_23bb02a03c95d730ca2c1e3775eef870fb181d04f39f47037e1426bcf1b6af57_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
