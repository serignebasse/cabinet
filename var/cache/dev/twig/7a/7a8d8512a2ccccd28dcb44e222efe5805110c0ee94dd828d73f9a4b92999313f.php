<?php

/* rendezvous/new.html.twig */
class __TwigTemplate_733518138b8f0dc546933c04fe948a390e2af88ff89288cb3f5556d138a90716 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rendezvous/new.html.twig", 1);
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
        $__internal_cc4733bfe7a12729b9ad5be4daa4dddc0354bea91571f08fb8edbbbba531acd8 = $this->env->getExtension("native_profiler");
        $__internal_cc4733bfe7a12729b9ad5be4daa4dddc0354bea91571f08fb8edbbbba531acd8->enter($__internal_cc4733bfe7a12729b9ad5be4daa4dddc0354bea91571f08fb8edbbbba531acd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rendezvous/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc4733bfe7a12729b9ad5be4daa4dddc0354bea91571f08fb8edbbbba531acd8->leave($__internal_cc4733bfe7a12729b9ad5be4daa4dddc0354bea91571f08fb8edbbbba531acd8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba6008437b35a9943dc55277d835fc1052edf47cda69cf008a1400080b1aa138 = $this->env->getExtension("native_profiler");
        $__internal_ba6008437b35a9943dc55277d835fc1052edf47cda69cf008a1400080b1aa138->enter($__internal_ba6008437b35a9943dc55277d835fc1052edf47cda69cf008a1400080b1aa138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"content-wrapper col-lg-5\">
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Programmer Rendez vous</h1>

    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <ul>
            <input  class=\"btn btn-success btn-sm\" type=\"submit\" value=\"Valider\" />
    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            <a  class=\"btn btn-success btn-sm\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("rendezvous_index");
        echo "\" role=\"button\">Retour</a>
    </ul>
    </div>
";
        
        $__internal_ba6008437b35a9943dc55277d835fc1052edf47cda69cf008a1400080b1aa138->leave($__internal_ba6008437b35a9943dc55277d835fc1052edf47cda69cf008a1400080b1aa138_prof);

    }

    public function getTemplateName()
    {
        return "rendezvous/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  60 => 13,  54 => 10,  50 => 9,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="content-wrapper col-lg-5">*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Programmer Rendez vous</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <ul>*/
/*             <input  class="btn btn-success btn-sm" type="submit" value="Valider" />*/
/*     {{ form_end(form) }}*/
/* */
/*             <a  class="btn btn-success btn-sm" href="{{ path('rendezvous_index') }}" role="button">Retour</a>*/
/*     </ul>*/
/*     </div>*/
/* {% endblock %}*/
/* */
