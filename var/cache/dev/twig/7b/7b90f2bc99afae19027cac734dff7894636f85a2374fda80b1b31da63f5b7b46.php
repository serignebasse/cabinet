<?php

/* rendezvous/edit.html.twig */
class __TwigTemplate_3a2517bef5eeb86f84d286fd5a8ca7c2644ccf3cd504dc25c9a2faa02d97bf76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rendezvous/edit.html.twig", 1);
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
        $__internal_0c5fc1c9dbae8050e56ec99c77b227c37b76358a79426d4124aaf572e77ce04a = $this->env->getExtension("native_profiler");
        $__internal_0c5fc1c9dbae8050e56ec99c77b227c37b76358a79426d4124aaf572e77ce04a->enter($__internal_0c5fc1c9dbae8050e56ec99c77b227c37b76358a79426d4124aaf572e77ce04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rendezvous/edit.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c5fc1c9dbae8050e56ec99c77b227c37b76358a79426d4124aaf572e77ce04a->leave($__internal_0c5fc1c9dbae8050e56ec99c77b227c37b76358a79426d4124aaf572e77ce04a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4a77c2c57fd4c75c5856741731f5c033c8e9610bf0ce305d45363bdd98da105 = $this->env->getExtension("native_profiler");
        $__internal_b4a77c2c57fd4c75c5856741731f5c033c8e9610bf0ce305d45363bdd98da105->enter($__internal_b4a77c2c57fd4c75c5856741731f5c033c8e9610bf0ce305d45363bdd98da105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"content-wrapper col-lg-5\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Modifier Rendez-vous</h1>

    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
    <ul>
        <input  class=\"btn btn-success btn-sm\" type=\"submit\" value=\"Modifier\" />
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        <a class=\"btn btn-success btn-sm\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("rendezvous_index");
        echo "\" role=\"button\">Retour</a>
    </ul>
    <ul>
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-outline-danger btn-sm\" type=\"submit\" value=\"Supprimer\">
            ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

    </ul>
    </div>
";
        
        $__internal_b4a77c2c57fd4c75c5856741731f5c033c8e9610bf0ce305d45363bdd98da105->leave($__internal_b4a77c2c57fd4c75c5856741731f5c033c8e9610bf0ce305d45363bdd98da105_prof);

    }

    public function getTemplateName()
    {
        return "rendezvous/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  73 => 18,  67 => 15,  63 => 14,  57 => 11,  53 => 10,  46 => 6,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme edit_form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper col-lg-5">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Modifier Rendez-vous</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*     <ul>*/
/*         <input  class="btn btn-success btn-sm" type="submit" value="Modifier" />*/
/*     {{ form_end(edit_form) }}*/
/*         <a class="btn btn-success btn-sm" href="{{ path('rendezvous_index') }}" role="button">Retour</a>*/
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
