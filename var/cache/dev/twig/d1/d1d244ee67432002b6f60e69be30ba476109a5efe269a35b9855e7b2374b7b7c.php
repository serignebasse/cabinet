<?php

/* patient/new.html.twig */
class __TwigTemplate_4d617fcb71b3c78ec3b65fb27be02ea6a714988500d7afb2cb13a9bbe7aeb973 extends Twig_Template
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
        $__internal_31a9b7bbb60ac909c83a69407c99e5930a0e4deed9c475abae7a9fbd0bef4b67 = $this->env->getExtension("native_profiler");
        $__internal_31a9b7bbb60ac909c83a69407c99e5930a0e4deed9c475abae7a9fbd0bef4b67->enter($__internal_31a9b7bbb60ac909c83a69407c99e5930a0e4deed9c475abae7a9fbd0bef4b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "patient/new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31a9b7bbb60ac909c83a69407c99e5930a0e4deed9c475abae7a9fbd0bef4b67->leave($__internal_31a9b7bbb60ac909c83a69407c99e5930a0e4deed9c475abae7a9fbd0bef4b67_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b55b7b77ff719c31c833a55e1c23afc524ef2bc3298704e8f86e9454e4fb298c = $this->env->getExtension("native_profiler");
        $__internal_b55b7b77ff719c31c833a55e1c23afc524ef2bc3298704e8f86e9454e4fb298c->enter($__internal_b55b7b77ff719c31c833a55e1c23afc524ef2bc3298704e8f86e9454e4fb298c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"content-wrapper col-lg-3\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Fiche Patient </h1>
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <ul>
        <input class=\"btn btn-success btn-sm\" type=\"submit\" value=\"Valider\" />
    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
         <a class=\"btn btn-success btn-sm\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("patient_index");
        // line 15
        echo "\" role=\"button\">Retour</a>

    </ul>
</div>
";
        
        $__internal_b55b7b77ff719c31c833a55e1c23afc524ef2bc3298704e8f86e9454e4fb298c->leave($__internal_b55b7b77ff719c31c833a55e1c23afc524ef2bc3298704e8f86e9454e4fb298c_prof);

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
        return array (  68 => 15,  66 => 14,  62 => 13,  56 => 10,  52 => 9,  46 => 6,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper col-lg-3">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Fiche Patient </h1>*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form)}}*/
/*     <ul>*/
/*         <input class="btn btn-success btn-sm" type="submit" value="Valider" />*/
/*     {{ form_end(form) }}*/
/*          <a class="btn btn-success btn-sm" href="{{ path('patient_index')*/
/*             }}" role="button">Retour</a>*/
/* */
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
