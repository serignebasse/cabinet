<?php

/* SamaBundle:Default:ajouterPatient.html.twig */
class __TwigTemplate_5de426c00e90b796859293b2154ef77c9c9df7bbfc1555a018d0bd4347482e16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SamaBundle:Default:ajouterPatient.html.twig", 1);
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
        $__internal_83e5e7c2130e9d978659d78b1cc39fd7b59ddaf06205a4ccec76b4895859cc8d = $this->env->getExtension("native_profiler");
        $__internal_83e5e7c2130e9d978659d78b1cc39fd7b59ddaf06205a4ccec76b4895859cc8d->enter($__internal_83e5e7c2130e9d978659d78b1cc39fd7b59ddaf06205a4ccec76b4895859cc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SamaBundle:Default:ajouterPatient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83e5e7c2130e9d978659d78b1cc39fd7b59ddaf06205a4ccec76b4895859cc8d->leave($__internal_83e5e7c2130e9d978659d78b1cc39fd7b59ddaf06205a4ccec76b4895859cc8d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_83f527320180128233faea1a1109079fa3f40bbfb92ac92b194b904c2281514b = $this->env->getExtension("native_profiler");
        $__internal_83f527320180128233faea1a1109079fa3f40bbfb92ac92b194b904c2281514b->enter($__internal_83f527320180128233faea1a1109079fa3f40bbfb92ac92b194b904c2281514b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <button type=\"submit\">Valider </button>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_83f527320180128233faea1a1109079fa3f40bbfb92ac92b194b904c2281514b->leave($__internal_83f527320180128233faea1a1109079fa3f40bbfb92ac92b194b904c2281514b_prof);

    }

    public function getTemplateName()
    {
        return "SamaBundle:Default:ajouterPatient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     <button type="submit">Valider </button>*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
