<?php

/* :consultation:edit.html.twig */
class __TwigTemplate_acf1b5bb745bce089d0126fa817ac868c6a89c25a2aa6d9e9a6cdf6840d021cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":consultation:edit.html.twig", 1);
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
        $__internal_e6ee04b277f38a687a822275bc5c8ca9735ec5c0ea8cfbc00fefe88d5c0fa437 = $this->env->getExtension("native_profiler");
        $__internal_e6ee04b277f38a687a822275bc5c8ca9735ec5c0ea8cfbc00fefe88d5c0fa437->enter($__internal_e6ee04b277f38a687a822275bc5c8ca9735ec5c0ea8cfbc00fefe88d5c0fa437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":consultation:edit.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6ee04b277f38a687a822275bc5c8ca9735ec5c0ea8cfbc00fefe88d5c0fa437->leave($__internal_e6ee04b277f38a687a822275bc5c8ca9735ec5c0ea8cfbc00fefe88d5c0fa437_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe4eec9c60cafd01b82decbb6a23b9bf25c21c4bf3c5edc5e4cc860fe80f2b46 = $this->env->getExtension("native_profiler");
        $__internal_fe4eec9c60cafd01b82decbb6a23b9bf25c21c4bf3c5edc5e4cc860fe80f2b46->enter($__internal_fe4eec9c60cafd01b82decbb6a23b9bf25c21c4bf3c5edc5e4cc860fe80f2b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"content-wrapper col-lg-5\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Modifier consultation </h1>

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
        // line 15
        echo $this->env->getExtension('routing')->getPath("consultation_index");
        // line 16
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
        
        $__internal_fe4eec9c60cafd01b82decbb6a23b9bf25c21c4bf3c5edc5e4cc860fe80f2b46->leave($__internal_fe4eec9c60cafd01b82decbb6a23b9bf25c21c4bf3c5edc5e4cc860fe80f2b46_prof);

    }

    public function getTemplateName()
    {
        return ":consultation:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 21,  74 => 19,  69 => 16,  67 => 15,  63 => 14,  57 => 11,  53 => 10,  46 => 6,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme edit_form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper col-lg-5">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Modifier consultation </h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*     <ul>*/
/*         <input class="btn btn-success btn-sm" type="submit" value="Modifier" />*/
/*     {{ form_end(edit_form) }}*/
/*             <a class="btn btn-success btn-sm" href="{{ path('consultation_index')*/
/*             }}" role="button">Retour</a>*/
/*     </ul>*/
/*     <ul>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input class="btn btn-outline-danger btn-sm" type="submit" value="Supprimer">*/
/*             {{ form_end(delete_form) }}*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
