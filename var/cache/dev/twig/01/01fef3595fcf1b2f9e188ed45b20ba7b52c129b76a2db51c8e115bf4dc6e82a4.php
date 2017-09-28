<?php

/* medecin/edit.html.twig */
class __TwigTemplate_f2a73e2cf2e5a48d600aebaf437b2fdc6e9fbfbd2d81b9b8538f5e37e03bb13e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "medecin/edit.html.twig", 1);
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
        $__internal_ffae74762c7a76d15c4e718504dd04370e77d4ede4d392528944cf6398268f7c = $this->env->getExtension("native_profiler");
        $__internal_ffae74762c7a76d15c4e718504dd04370e77d4ede4d392528944cf6398268f7c->enter($__internal_ffae74762c7a76d15c4e718504dd04370e77d4ede4d392528944cf6398268f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "medecin/edit.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffae74762c7a76d15c4e718504dd04370e77d4ede4d392528944cf6398268f7c->leave($__internal_ffae74762c7a76d15c4e718504dd04370e77d4ede4d392528944cf6398268f7c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6ba236bc6953d06fce4698f88f936b5542c2decb74a6760f8a0e119d48787be = $this->env->getExtension("native_profiler");
        $__internal_c6ba236bc6953d06fce4698f88f936b5542c2decb74a6760f8a0e119d48787be->enter($__internal_c6ba236bc6953d06fce4698f88f936b5542c2decb74a6760f8a0e119d48787be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c6ba236bc6953d06fce4698f88f936b5542c2decb74a6760f8a0e119d48787be->leave($__internal_c6ba236bc6953d06fce4698f88f936b5542c2decb74a6760f8a0e119d48787be_prof);

    }

    public function getTemplateName()
    {
        return "medecin/edit.html.twig";
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
