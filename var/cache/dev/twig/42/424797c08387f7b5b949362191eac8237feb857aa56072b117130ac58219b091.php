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
        $__internal_56a1b01470c8a6cc949ed76d41dd328a479b7b5bfdd8cae041d0333d4997fb65 = $this->env->getExtension("native_profiler");
        $__internal_56a1b01470c8a6cc949ed76d41dd328a479b7b5bfdd8cae041d0333d4997fb65->enter($__internal_56a1b01470c8a6cc949ed76d41dd328a479b7b5bfdd8cae041d0333d4997fb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56a1b01470c8a6cc949ed76d41dd328a479b7b5bfdd8cae041d0333d4997fb65->leave($__internal_56a1b01470c8a6cc949ed76d41dd328a479b7b5bfdd8cae041d0333d4997fb65_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bbf3a2a6206539aac773799cc14b730c79fb8e9643f796826703b367c17dfc5e = $this->env->getExtension("native_profiler");
        $__internal_bbf3a2a6206539aac773799cc14b730c79fb8e9643f796826703b367c17dfc5e->enter($__internal_bbf3a2a6206539aac773799cc14b730c79fb8e9643f796826703b367c17dfc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bbf3a2a6206539aac773799cc14b730c79fb8e9643f796826703b367c17dfc5e->leave($__internal_bbf3a2a6206539aac773799cc14b730c79fb8e9643f796826703b367c17dfc5e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5572983be412cad873ae5f1b91815871da4888508349afa38a77ed79b5892c1e = $this->env->getExtension("native_profiler");
        $__internal_5572983be412cad873ae5f1b91815871da4888508349afa38a77ed79b5892c1e->enter($__internal_5572983be412cad873ae5f1b91815871da4888508349afa38a77ed79b5892c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5572983be412cad873ae5f1b91815871da4888508349afa38a77ed79b5892c1e->leave($__internal_5572983be412cad873ae5f1b91815871da4888508349afa38a77ed79b5892c1e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_21dbe8f3f6edd01081f5f55b14c4c9178f6696483ede1884219abc7148bbb43e = $this->env->getExtension("native_profiler");
        $__internal_21dbe8f3f6edd01081f5f55b14c4c9178f6696483ede1884219abc7148bbb43e->enter($__internal_21dbe8f3f6edd01081f5f55b14c4c9178f6696483ede1884219abc7148bbb43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_21dbe8f3f6edd01081f5f55b14c4c9178f6696483ede1884219abc7148bbb43e->leave($__internal_21dbe8f3f6edd01081f5f55b14c4c9178f6696483ede1884219abc7148bbb43e_prof);

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
