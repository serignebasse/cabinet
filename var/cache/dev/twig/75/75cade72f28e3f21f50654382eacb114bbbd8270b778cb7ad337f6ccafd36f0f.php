<?php

/* :analyse:new.html.twig */
class __TwigTemplate_26debca07a7cf9c101992ca2658a22e6c38e6087d42ec56e84c672f3e6f4eb7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":analyse:new.html.twig", 1);
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
        $__internal_9afc1b7c8cd9ccfb404125e0b60e63dba2fb70d985fbdbbd6ccc33b24599669c = $this->env->getExtension("native_profiler");
        $__internal_9afc1b7c8cd9ccfb404125e0b60e63dba2fb70d985fbdbbd6ccc33b24599669c->enter($__internal_9afc1b7c8cd9ccfb404125e0b60e63dba2fb70d985fbdbbd6ccc33b24599669c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":analyse:new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9afc1b7c8cd9ccfb404125e0b60e63dba2fb70d985fbdbbd6ccc33b24599669c->leave($__internal_9afc1b7c8cd9ccfb404125e0b60e63dba2fb70d985fbdbbd6ccc33b24599669c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b86acea07cadfd3b76757ac54c253e911ca7c435f5b212d56a65f8179cbae74 = $this->env->getExtension("native_profiler");
        $__internal_2b86acea07cadfd3b76757ac54c253e911ca7c435f5b212d56a65f8179cbae74->enter($__internal_2b86acea07cadfd3b76757ac54c253e911ca7c435f5b212d56a65f8179cbae74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"content-wrapper col-lg-3\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Fiche analyse</h1>

    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <ul>
    <input class=\"btn btn-success btn-sm\" type=\"submit\" value=\"Valider\" />
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("analyse_index");
        echo "\" role=\"button\">Retour</a>
    </ul>
</div>
";
        
        $__internal_2b86acea07cadfd3b76757ac54c253e911ca7c435f5b212d56a65f8179cbae74->leave($__internal_2b86acea07cadfd3b76757ac54c253e911ca7c435f5b212d56a65f8179cbae74_prof);

    }

    public function getTemplateName()
    {
        return ":analyse:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  63 => 14,  57 => 11,  53 => 10,  46 => 6,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper col-lg-3">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Fiche analyse</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*     <ul>*/
/*     <input class="btn btn-success btn-sm" type="submit" value="Valider" />*/
/*     {{ form_end(form) }}*/
/*             <a class="btn btn-success btn-sm" href="{{ path('analyse_index') }}" role="button">Retour</a>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
