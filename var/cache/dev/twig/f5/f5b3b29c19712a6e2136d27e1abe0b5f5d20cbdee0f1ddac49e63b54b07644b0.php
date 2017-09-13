<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1f24a876270063e9598398c41e9f7b07f55e4fdffc6b173fde4021567b5e819a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_6d2257fd0bb07abb9f3f2e5dcc3f881ca577d216856936ce4570b7c88cd38fbd = $this->env->getExtension("native_profiler");
        $__internal_6d2257fd0bb07abb9f3f2e5dcc3f881ca577d216856936ce4570b7c88cd38fbd->enter($__internal_6d2257fd0bb07abb9f3f2e5dcc3f881ca577d216856936ce4570b7c88cd38fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d2257fd0bb07abb9f3f2e5dcc3f881ca577d216856936ce4570b7c88cd38fbd->leave($__internal_6d2257fd0bb07abb9f3f2e5dcc3f881ca577d216856936ce4570b7c88cd38fbd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec1cde5acf1066cf8066277d2c277809cf093d576bc9ebb4bcd2c4c5838fd56e = $this->env->getExtension("native_profiler");
        $__internal_ec1cde5acf1066cf8066277d2c277809cf093d576bc9ebb4bcd2c4c5838fd56e->enter($__internal_ec1cde5acf1066cf8066277d2c277809cf093d576bc9ebb4bcd2c4c5838fd56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ec1cde5acf1066cf8066277d2c277809cf093d576bc9ebb4bcd2c4c5838fd56e->leave($__internal_ec1cde5acf1066cf8066277d2c277809cf093d576bc9ebb4bcd2c4c5838fd56e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e00339cf037f92d69810129f3c0e530125510fe242f30fad7a0c1be38d27621 = $this->env->getExtension("native_profiler");
        $__internal_8e00339cf037f92d69810129f3c0e530125510fe242f30fad7a0c1be38d27621->enter($__internal_8e00339cf037f92d69810129f3c0e530125510fe242f30fad7a0c1be38d27621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8e00339cf037f92d69810129f3c0e530125510fe242f30fad7a0c1be38d27621->leave($__internal_8e00339cf037f92d69810129f3c0e530125510fe242f30fad7a0c1be38d27621_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_84ad357015edddb40a3ef00a9d3a29ee4a620fb24f9b687ad758bc13ef44ef77 = $this->env->getExtension("native_profiler");
        $__internal_84ad357015edddb40a3ef00a9d3a29ee4a620fb24f9b687ad758bc13ef44ef77->enter($__internal_84ad357015edddb40a3ef00a9d3a29ee4a620fb24f9b687ad758bc13ef44ef77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_84ad357015edddb40a3ef00a9d3a29ee4a620fb24f9b687ad758bc13ef44ef77->leave($__internal_84ad357015edddb40a3ef00a9d3a29ee4a620fb24f9b687ad758bc13ef44ef77_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
