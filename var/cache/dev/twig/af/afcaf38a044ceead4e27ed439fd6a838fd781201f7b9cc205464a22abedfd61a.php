<?php

/* medicament/edit.html.twig */
class __TwigTemplate_2aecc2bba79e02920948122654e0e60e0c0bc652c7eeb2b5fc8d1994cbc1cf35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "medicament/edit.html.twig", 1);
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
        $__internal_0c02b9b3da35e08eae635758d919626bab1a683c1eb4b4c25965f16abe615628 = $this->env->getExtension("native_profiler");
        $__internal_0c02b9b3da35e08eae635758d919626bab1a683c1eb4b4c25965f16abe615628->enter($__internal_0c02b9b3da35e08eae635758d919626bab1a683c1eb4b4c25965f16abe615628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "medicament/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c02b9b3da35e08eae635758d919626bab1a683c1eb4b4c25965f16abe615628->leave($__internal_0c02b9b3da35e08eae635758d919626bab1a683c1eb4b4c25965f16abe615628_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd589385c303aea3decfbde6546e31ddb6ee2d0c8e1e4c279518825a38eec05b = $this->env->getExtension("native_profiler");
        $__internal_bd589385c303aea3decfbde6546e31ddb6ee2d0c8e1e4c279518825a38eec05b->enter($__internal_bd589385c303aea3decfbde6546e31ddb6ee2d0c8e1e4c279518825a38eec05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <h1>Modifier medicament</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
    <ul>
    <input class=\"btn btn-success btn-sm\" type=\"submit\" value=\"Modifier\" />
    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("medicament_index");
        echo "\" role=\"button\">Retour</a>
    </ul>
    <ul>
        ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-outline-danger btn-sm\" type=\"submit\" value=\"Supprimer\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </ul>
</div>
";
        
        $__internal_bd589385c303aea3decfbde6546e31ddb6ee2d0c8e1e4c279518825a38eec05b->leave($__internal_bd589385c303aea3decfbde6546e31ddb6ee2d0c8e1e4c279518825a38eec05b_prof);

    }

    public function getTemplateName()
    {
        return "medicament/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  69 => 16,  63 => 13,  59 => 12,  53 => 9,  49 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/*     <h1>Modifier medicament</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*     <ul>*/
/*     <input class="btn btn-success btn-sm" type="submit" value="Modifier" />*/
/*     {{ form_end(edit_form) }}*/
/*             <a class="btn btn-success btn-sm" href="{{ path('medicament_index') }}" role="button">Retour</a>*/
/*     </ul>*/
/*     <ul>*/
/*         {{ form_start(delete_form) }}*/
/*                 <input class="btn btn-outline-danger btn-sm" type="submit" value="Supprimer">*/
/*             {{ form_end(delete_form) }}*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
