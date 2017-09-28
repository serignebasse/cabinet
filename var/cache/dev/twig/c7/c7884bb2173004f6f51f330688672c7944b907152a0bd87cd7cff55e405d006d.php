<?php

/* patient/edit.html.twig */
class __TwigTemplate_28c6a3c7bdec7190e8347d2181ef456f7926195d22bd9f19c169780314fb3c29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "patient/edit.html.twig", 1);
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
        $__internal_211904cb422502397b365251acd0f543ac05dc1a0c8ef5f256e1a119e55a7469 = $this->env->getExtension("native_profiler");
        $__internal_211904cb422502397b365251acd0f543ac05dc1a0c8ef5f256e1a119e55a7469->enter($__internal_211904cb422502397b365251acd0f543ac05dc1a0c8ef5f256e1a119e55a7469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "patient/edit.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_211904cb422502397b365251acd0f543ac05dc1a0c8ef5f256e1a119e55a7469->leave($__internal_211904cb422502397b365251acd0f543ac05dc1a0c8ef5f256e1a119e55a7469_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9b1e6b1a1cb8ec535a3ccdfd68d0bcb21e535cdabe2c463bac2de07f617a59d = $this->env->getExtension("native_profiler");
        $__internal_c9b1e6b1a1cb8ec535a3ccdfd68d0bcb21e535cdabe2c463bac2de07f617a59d->enter($__internal_c9b1e6b1a1cb8ec535a3ccdfd68d0bcb21e535cdabe2c463bac2de07f617a59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"content-wrapper col-lg-4\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Modifier Patient </h1>
        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
    <ul>
        <input class=\"btn btn-success btn-sm\" type=\"submit\" value=\"Modifier\" />
        ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        <a class=\"btn btn-success btn-sm\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("patient_index");
        // line 15
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
        
        $__internal_c9b1e6b1a1cb8ec535a3ccdfd68d0bcb21e535cdabe2c463bac2de07f617a59d->leave($__internal_c9b1e6b1a1cb8ec535a3ccdfd68d0bcb21e535cdabe2c463bac2de07f617a59d_prof);

    }

    public function getTemplateName()
    {
        return "patient/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  73 => 18,  68 => 15,  66 => 14,  62 => 13,  56 => 10,  52 => 9,  46 => 6,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme edit_form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper col-lg-4">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Modifier Patient </h1>*/
/*         {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*     <ul>*/
/*         <input class="btn btn-success btn-sm" type="submit" value="Modifier" />*/
/*         {{ form_end(edit_form) }}*/
/*         <a class="btn btn-success btn-sm" href="{{ path('patient_index')*/
/*         }}" role="button">Retour</a>*/
/*     </ul>*/
/*     <ul>*/
/*         {{ form_start(delete_form) }}*/
/*              <input class="btn btn-outline-danger btn-sm" type="submit" value="Supprimer">*/
/*         {{ form_end(delete_form) }}*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
