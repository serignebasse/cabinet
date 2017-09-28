<?php

/* :patient:edit.html.twig */
class __TwigTemplate_08b85b329430ca99c7eb835335eade2d13618ff9f27ceb3679607dd6b898b6f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":patient:edit.html.twig", 1);
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
        $__internal_2829e56ec858c33496539a9ce2c88a403eddb09e331a8bc37fa60d61aadd45bd = $this->env->getExtension("native_profiler");
        $__internal_2829e56ec858c33496539a9ce2c88a403eddb09e331a8bc37fa60d61aadd45bd->enter($__internal_2829e56ec858c33496539a9ce2c88a403eddb09e331a8bc37fa60d61aadd45bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":patient:edit.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2829e56ec858c33496539a9ce2c88a403eddb09e331a8bc37fa60d61aadd45bd->leave($__internal_2829e56ec858c33496539a9ce2c88a403eddb09e331a8bc37fa60d61aadd45bd_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cec550c2349a24de1686542cb8b3e0f849963f0a858abaebd94534e593893b1 = $this->env->getExtension("native_profiler");
        $__internal_3cec550c2349a24de1686542cb8b3e0f849963f0a858abaebd94534e593893b1->enter($__internal_3cec550c2349a24de1686542cb8b3e0f849963f0a858abaebd94534e593893b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3cec550c2349a24de1686542cb8b3e0f849963f0a858abaebd94534e593893b1->leave($__internal_3cec550c2349a24de1686542cb8b3e0f849963f0a858abaebd94534e593893b1_prof);

    }

    public function getTemplateName()
    {
        return ":patient:edit.html.twig";
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
