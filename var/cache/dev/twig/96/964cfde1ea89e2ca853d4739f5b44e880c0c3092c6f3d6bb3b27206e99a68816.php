<?php

/* :ordonnance:new.html.twig */
class __TwigTemplate_006ab11141a39703e1f05b9124bbe1b7c16c8065a0f1d766bcd10864e3566cb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":ordonnance:new.html.twig", 1);
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
        $__internal_117415f8f4108c5dee888a5f7272695e2047dad7d708a187e691d921118ee62d = $this->env->getExtension("native_profiler");
        $__internal_117415f8f4108c5dee888a5f7272695e2047dad7d708a187e691d921118ee62d->enter($__internal_117415f8f4108c5dee888a5f7272695e2047dad7d708a187e691d921118ee62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ordonnance:new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_117415f8f4108c5dee888a5f7272695e2047dad7d708a187e691d921118ee62d->leave($__internal_117415f8f4108c5dee888a5f7272695e2047dad7d708a187e691d921118ee62d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_20c53b8bcd1b88ec3d816894a3fc81657e1af004537b86b7f4c64097ab7b9dcc = $this->env->getExtension("native_profiler");
        $__internal_20c53b8bcd1b88ec3d816894a3fc81657e1af004537b86b7f4c64097ab7b9dcc->enter($__internal_20c53b8bcd1b88ec3d816894a3fc81657e1af004537b86b7f4c64097ab7b9dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <div class=\"content-wrapper col-lg-4\" >
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">



    <h1>Prescrire Ordonnance</h1>

    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <ul>
        <input class=\"btn btn-success btn-sm\" type=\"submit\" value=\"Valider\" />
    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("ordonnance_index");
        echo "\" role=\"button\">Retour</a>

    </ul>

</div>

";
        
        $__internal_20c53b8bcd1b88ec3d816894a3fc81657e1af004537b86b7f4c64097ab7b9dcc->leave($__internal_20c53b8bcd1b88ec3d816894a3fc81657e1af004537b86b7f4c64097ab7b9dcc_prof);

    }

    public function getTemplateName()
    {
        return ":ordonnance:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  66 => 17,  60 => 14,  56 => 13,  47 => 7,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="content-wrapper col-lg-4" >*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/* */
/* */
/*     <h1>Prescrire Ordonnance</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     <ul>*/
/*         <input class="btn btn-success btn-sm" type="submit" value="Valider" />*/
/*     {{ form_end(form) }}*/
/*             <a class="btn btn-success btn-sm" href="{{ path('ordonnance_index') }}" role="button">Retour</a>*/
/* */
/*     </ul>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
