<?php

/* analyse/edit.html.twig */
class __TwigTemplate_c82644f73c20ca1657abd144b8357e39919900ad8688bdc7bb7235b00f7c81f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "analyse/edit.html.twig", 1);
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
        $__internal_27422db5cde71cdc1d0e1cb38de1e8674ceca6aa307b9a3af909ea87967978c7 = $this->env->getExtension("native_profiler");
        $__internal_27422db5cde71cdc1d0e1cb38de1e8674ceca6aa307b9a3af909ea87967978c7->enter($__internal_27422db5cde71cdc1d0e1cb38de1e8674ceca6aa307b9a3af909ea87967978c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "analyse/edit.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27422db5cde71cdc1d0e1cb38de1e8674ceca6aa307b9a3af909ea87967978c7->leave($__internal_27422db5cde71cdc1d0e1cb38de1e8674ceca6aa307b9a3af909ea87967978c7_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6417f81c7c0e48cd6e98cdc7dc45ddc5118cdedc6d7be2afea57837b012f4c79 = $this->env->getExtension("native_profiler");
        $__internal_6417f81c7c0e48cd6e98cdc7dc45ddc5118cdedc6d7be2afea57837b012f4c79->enter($__internal_6417f81c7c0e48cd6e98cdc7dc45ddc5118cdedc6d7be2afea57837b012f4c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Modifier Analyse</h1>

    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
    <ul>
        <input class=\"btn btn-success btn-sm\" type=\"submit\" value=\"Modifier\" />
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("analyse_index");
        echo "\" role=\"button\">Retour</a>
    </ul>
    <ul>
            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-outline-danger btn-sm\" type=\"submit\" value=\"Supprimer\">
            ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

    </ul>
    </div>
";
        
        $__internal_6417f81c7c0e48cd6e98cdc7dc45ddc5118cdedc6d7be2afea57837b012f4c79->leave($__internal_6417f81c7c0e48cd6e98cdc7dc45ddc5118cdedc6d7be2afea57837b012f4c79_prof);

    }

    public function getTemplateName()
    {
        return "analyse/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 21,  74 => 19,  68 => 16,  63 => 14,  57 => 11,  53 => 10,  46 => 6,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme edit_form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Modifier Analyse</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*     <ul>*/
/*         <input class="btn btn-success btn-sm" type="submit" value="Modifier" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*             <a class="btn btn-success btn-sm" href="{{ path('analyse_index') }}" role="button">Retour</a>*/
/*     </ul>*/
/*     <ul>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input class="btn btn-outline-danger btn-sm" type="submit" value="Supprimer">*/
/*             {{ form_end(delete_form) }}*/
/* */
/*     </ul>*/
/*     </div>*/
/* {% endblock %}*/
/* */
