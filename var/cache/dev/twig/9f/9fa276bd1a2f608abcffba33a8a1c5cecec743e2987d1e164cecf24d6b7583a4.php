<?php

/* @Sama/Default/index.html.twig */
class __TwigTemplate_c55a3fc5426b6e2ca4ad81873a6a06ced6e30ff2db04bdf9313ed844f17a2833 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Sama/Default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bfaea9e65887e0c2082c705e36c5ef60421e05a15cc470c6bdb081ce26ac73e = $this->env->getExtension("native_profiler");
        $__internal_5bfaea9e65887e0c2082c705e36c5ef60421e05a15cc470c6bdb081ce26ac73e->enter($__internal_5bfaea9e65887e0c2082c705e36c5ef60421e05a15cc470c6bdb081ce26ac73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Sama/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bfaea9e65887e0c2082c705e36c5ef60421e05a15cc470c6bdb081ce26ac73e->leave($__internal_5bfaea9e65887e0c2082c705e36c5ef60421e05a15cc470c6bdb081ce26ac73e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_044e6edad9fd36ee5c8a1a70f31b25de015f9b4bd15555e44d5bcf3b43a1739d = $this->env->getExtension("native_profiler");
        $__internal_044e6edad9fd36ee5c8a1a70f31b25de015f9b4bd15555e44d5bcf3b43a1739d->enter($__internal_044e6edad9fd36ee5c8a1a70f31b25de015f9b4bd15555e44d5bcf3b43a1739d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"content-wrapper\">
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    </div>
";
        
        $__internal_044e6edad9fd36ee5c8a1a70f31b25de015f9b4bd15555e44d5bcf3b43a1739d->leave($__internal_044e6edad9fd36ee5c8a1a70f31b25de015f9b4bd15555e44d5bcf3b43a1739d_prof);

    }

    public function getTemplateName()
    {
        return "@Sama/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="content-wrapper">*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     </div>*/
/* {% endblock %}*/
