<?php

/* patient/new.html.twig */
class __TwigTemplate_838fefffc0bce6bf78a10f56b9dbc024350616e55c325545db206c807ed7221e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "patient/new.html.twig", 1);
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
        $__internal_6e25cf44cf630f9e74ec524ae2e138523f1749b0ba390ca253a21dc7bb7c06d0 = $this->env->getExtension("native_profiler");
        $__internal_6e25cf44cf630f9e74ec524ae2e138523f1749b0ba390ca253a21dc7bb7c06d0->enter($__internal_6e25cf44cf630f9e74ec524ae2e138523f1749b0ba390ca253a21dc7bb7c06d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "patient/new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e25cf44cf630f9e74ec524ae2e138523f1749b0ba390ca253a21dc7bb7c06d0->leave($__internal_6e25cf44cf630f9e74ec524ae2e138523f1749b0ba390ca253a21dc7bb7c06d0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd37195a23fa75ea8ddec708f6bc889a525921d654b1693f578faadc5e7d5755 = $this->env->getExtension("native_profiler");
        $__internal_bd37195a23fa75ea8ddec708f6bc889a525921d654b1693f578faadc5e7d5755->enter($__internal_bd37195a23fa75ea8ddec708f6bc889a525921d654b1693f578faadc5e7d5755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Fiche Patient </h1>

    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

        <input type=\"submit\" value=\"Valider\" />
    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("patient_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_bd37195a23fa75ea8ddec708f6bc889a525921d654b1693f578faadc5e7d5755->leave($__internal_bd37195a23fa75ea8ddec708f6bc889a525921d654b1693f578faadc5e7d5755_prof);

    }

    public function getTemplateName()
    {
        return "patient/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  64 => 15,  58 => 12,  53 => 10,  46 => 6,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Fiche Patient </h1>*/
/* */
/*     {{ form_start(form) }}*/
/* */
/*     {{ form_widget(form)}}*/
/* */
/*         <input type="submit" value="Valider" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('patient_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
