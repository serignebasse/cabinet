<?php

/* medecin/edit.html.twig */
class __TwigTemplate_b9cf0f619214c1f6ef9075ed83d5097f90ca33e7f7482cc56ac5d402ee0035cc extends Twig_Template
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
        $__internal_c6afedcc6ec257adf3a7ed868a8ba6c7cce455898205088e3c2015a2a5164600 = $this->env->getExtension("native_profiler");
        $__internal_c6afedcc6ec257adf3a7ed868a8ba6c7cce455898205088e3c2015a2a5164600->enter($__internal_c6afedcc6ec257adf3a7ed868a8ba6c7cce455898205088e3c2015a2a5164600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "medecin/edit.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6afedcc6ec257adf3a7ed868a8ba6c7cce455898205088e3c2015a2a5164600->leave($__internal_c6afedcc6ec257adf3a7ed868a8ba6c7cce455898205088e3c2015a2a5164600_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b3a2fa7dc150251a7267474c45f9d7228b41a227ccd5072c0c8645cc9e06e71 = $this->env->getExtension("native_profiler");
        $__internal_5b3a2fa7dc150251a7267474c45f9d7228b41a227ccd5072c0c8645cc9e06e71->enter($__internal_5b3a2fa7dc150251a7267474c45f9d7228b41a227ccd5072c0c8645cc9e06e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"content-wrapper\">
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
        
        $__internal_5b3a2fa7dc150251a7267474c45f9d7228b41a227ccd5072c0c8645cc9e06e71->leave($__internal_5b3a2fa7dc150251a7267474c45f9d7228b41a227ccd5072c0c8645cc9e06e71_prof);

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
/*     <div class="content-wrapper">*/
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
