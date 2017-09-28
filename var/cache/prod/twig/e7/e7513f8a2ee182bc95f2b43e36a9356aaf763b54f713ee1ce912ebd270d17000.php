<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_86262fbbac4c1882c5ec0ebba78aee9be85351db68af59eee7df76b2e6c2baae extends Twig_Template
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
        $__internal_f4ddcbe786feec792ac8196f3e4747273d97a2aab8395e8a107ec759a926ca72 = $this->env->getExtension("native_profiler");
        $__internal_f4ddcbe786feec792ac8196f3e4747273d97a2aab8395e8a107ec759a926ca72->enter($__internal_f4ddcbe786feec792ac8196f3e4747273d97a2aab8395e8a107ec759a926ca72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4ddcbe786feec792ac8196f3e4747273d97a2aab8395e8a107ec759a926ca72->leave($__internal_f4ddcbe786feec792ac8196f3e4747273d97a2aab8395e8a107ec759a926ca72_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_db79cd17e18a762cdbd4ec49808f8fe7da4a07655dfbf91e7ad19a87867ed267 = $this->env->getExtension("native_profiler");
        $__internal_db79cd17e18a762cdbd4ec49808f8fe7da4a07655dfbf91e7ad19a87867ed267->enter($__internal_db79cd17e18a762cdbd4ec49808f8fe7da4a07655dfbf91e7ad19a87867ed267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_db79cd17e18a762cdbd4ec49808f8fe7da4a07655dfbf91e7ad19a87867ed267->leave($__internal_db79cd17e18a762cdbd4ec49808f8fe7da4a07655dfbf91e7ad19a87867ed267_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1572a4b205980525517c3eed35475ced5486607dc620921f8290109b0e43132 = $this->env->getExtension("native_profiler");
        $__internal_d1572a4b205980525517c3eed35475ced5486607dc620921f8290109b0e43132->enter($__internal_d1572a4b205980525517c3eed35475ced5486607dc620921f8290109b0e43132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d1572a4b205980525517c3eed35475ced5486607dc620921f8290109b0e43132->leave($__internal_d1572a4b205980525517c3eed35475ced5486607dc620921f8290109b0e43132_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_690a57dcec3730414eb125e3fe985bb9e798545ddf9a64144a8e492738c83e58 = $this->env->getExtension("native_profiler");
        $__internal_690a57dcec3730414eb125e3fe985bb9e798545ddf9a64144a8e492738c83e58->enter($__internal_690a57dcec3730414eb125e3fe985bb9e798545ddf9a64144a8e492738c83e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_690a57dcec3730414eb125e3fe985bb9e798545ddf9a64144a8e492738c83e58->leave($__internal_690a57dcec3730414eb125e3fe985bb9e798545ddf9a64144a8e492738c83e58_prof);

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
