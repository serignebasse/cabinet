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
        $__internal_733d9ce2f0a15b2d836250b69bbbbe651f20bf470e38c7ebb8dd5d872ea12b6e = $this->env->getExtension("native_profiler");
        $__internal_733d9ce2f0a15b2d836250b69bbbbe651f20bf470e38c7ebb8dd5d872ea12b6e->enter($__internal_733d9ce2f0a15b2d836250b69bbbbe651f20bf470e38c7ebb8dd5d872ea12b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_733d9ce2f0a15b2d836250b69bbbbe651f20bf470e38c7ebb8dd5d872ea12b6e->leave($__internal_733d9ce2f0a15b2d836250b69bbbbe651f20bf470e38c7ebb8dd5d872ea12b6e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ce0b5bd5b8e5f378dbbe1b4b157095d61a0907b9a6632531620473750ef82587 = $this->env->getExtension("native_profiler");
        $__internal_ce0b5bd5b8e5f378dbbe1b4b157095d61a0907b9a6632531620473750ef82587->enter($__internal_ce0b5bd5b8e5f378dbbe1b4b157095d61a0907b9a6632531620473750ef82587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ce0b5bd5b8e5f378dbbe1b4b157095d61a0907b9a6632531620473750ef82587->leave($__internal_ce0b5bd5b8e5f378dbbe1b4b157095d61a0907b9a6632531620473750ef82587_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_89d5e461523f3f27de79cba69e126b895d976bcc6ab27dadc3e70b3ccacc1688 = $this->env->getExtension("native_profiler");
        $__internal_89d5e461523f3f27de79cba69e126b895d976bcc6ab27dadc3e70b3ccacc1688->enter($__internal_89d5e461523f3f27de79cba69e126b895d976bcc6ab27dadc3e70b3ccacc1688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_89d5e461523f3f27de79cba69e126b895d976bcc6ab27dadc3e70b3ccacc1688->leave($__internal_89d5e461523f3f27de79cba69e126b895d976bcc6ab27dadc3e70b3ccacc1688_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb2174e7e3d6b6d13a9066a0d1e674caa7019146cf705dd067d4be8643c0812c = $this->env->getExtension("native_profiler");
        $__internal_fb2174e7e3d6b6d13a9066a0d1e674caa7019146cf705dd067d4be8643c0812c->enter($__internal_fb2174e7e3d6b6d13a9066a0d1e674caa7019146cf705dd067d4be8643c0812c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fb2174e7e3d6b6d13a9066a0d1e674caa7019146cf705dd067d4be8643c0812c->leave($__internal_fb2174e7e3d6b6d13a9066a0d1e674caa7019146cf705dd067d4be8643c0812c_prof);

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
