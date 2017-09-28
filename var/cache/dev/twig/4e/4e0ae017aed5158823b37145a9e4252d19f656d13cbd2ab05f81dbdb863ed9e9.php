<?php

/* :medecin:edit.html.twig */
class __TwigTemplate_ee8911a4d98d664e68e92f8ea1262feac1f68fe9bbcb9cfea26e2c03bdec4920 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":medecin:edit.html.twig", 1);
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
        $__internal_3c99cbdda720cfb6049c67620dfaf7022bbc579f221d9f1dc41d23999d1ad738 = $this->env->getExtension("native_profiler");
        $__internal_3c99cbdda720cfb6049c67620dfaf7022bbc579f221d9f1dc41d23999d1ad738->enter($__internal_3c99cbdda720cfb6049c67620dfaf7022bbc579f221d9f1dc41d23999d1ad738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":medecin:edit.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c99cbdda720cfb6049c67620dfaf7022bbc579f221d9f1dc41d23999d1ad738->leave($__internal_3c99cbdda720cfb6049c67620dfaf7022bbc579f221d9f1dc41d23999d1ad738_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1973e18b65c274c939200c37608e02aa20e41d1ddf6155fcdc3fe282438a6fb0 = $this->env->getExtension("native_profiler");
        $__internal_1973e18b65c274c939200c37608e02aa20e41d1ddf6155fcdc3fe282438a6fb0->enter($__internal_1973e18b65c274c939200c37608e02aa20e41d1ddf6155fcdc3fe282438a6fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"content-wrapper col-lg-4\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Modifier Medecin</h1>

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
        // line 18
        echo $this->env->getExtension('routing')->getPath("medecin_index");
        echo "\" role=\"button\">Retour</a>
    </ul>
        <ul>

        ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-outline-danger btn-sm\" type=\"submit\" value=\"Supprimer\">
            ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

    </ul>
    </div>
";
        
        $__internal_1973e18b65c274c939200c37608e02aa20e41d1ddf6155fcdc3fe282438a6fb0->leave($__internal_1973e18b65c274c939200c37608e02aa20e41d1ddf6155fcdc3fe282438a6fb0_prof);

    }

    public function getTemplateName()
    {
        return ":medecin:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  77 => 22,  70 => 18,  63 => 14,  57 => 11,  53 => 10,  46 => 6,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme edit_form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="content-wrapper col-lg-4">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Modifier Medecin</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <ul>*/
/*         <input  class="btn btn-success btn-sm" type="submit" value="Modifier" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/* */
/* */
/*             <a class="btn btn-success btn-sm" href="{{ path('medecin_index') }}" role="button">Retour</a>*/
/*     </ul>*/
/*         <ul>*/
/* */
/*         {{ form_start(delete_form) }}*/
/*                 <input class="btn btn-outline-danger btn-sm" type="submit" value="Supprimer">*/
/*             {{ form_end(delete_form) }}*/
/* */
/*     </ul>*/
/*     </div>*/
/* {% endblock %}*/
/* */
