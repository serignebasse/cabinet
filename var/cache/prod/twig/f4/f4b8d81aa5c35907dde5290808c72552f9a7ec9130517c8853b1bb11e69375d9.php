<?php

/* patient/edit.html.twig */
class __TwigTemplate_d1de0509461f7529ea2b59806abf1705d7ac2e2783cbbae52a15dd0f3936fc8e extends Twig_Template
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
        $__internal_7eee306e793785b3d54867aa0a09d3b03f58da1fff29c7dd453b3c2b873cd3fe = $this->env->getExtension("native_profiler");
        $__internal_7eee306e793785b3d54867aa0a09d3b03f58da1fff29c7dd453b3c2b873cd3fe->enter($__internal_7eee306e793785b3d54867aa0a09d3b03f58da1fff29c7dd453b3c2b873cd3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "patient/edit.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7eee306e793785b3d54867aa0a09d3b03f58da1fff29c7dd453b3c2b873cd3fe->leave($__internal_7eee306e793785b3d54867aa0a09d3b03f58da1fff29c7dd453b3c2b873cd3fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3ffe6c772948624cd63d73f75de239312d02493b1a15f6764c60098faaf8f34 = $this->env->getExtension("native_profiler");
        $__internal_c3ffe6c772948624cd63d73f75de239312d02493b1a15f6764c60098faaf8f34->enter($__internal_c3ffe6c772948624cd63d73f75de239312d02493b1a15f6764c60098faaf8f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <h1>Modifier Patient </h1>

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
        
        $__internal_c3ffe6c772948624cd63d73f75de239312d02493b1a15f6764c60098faaf8f34->leave($__internal_c3ffe6c772948624cd63d73f75de239312d02493b1a15f6764c60098faaf8f34_prof);

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
        return array (  80 => 21,  75 => 19,  69 => 15,  67 => 14,  63 => 13,  56 => 9,  52 => 8,  46 => 5,  43 => 4,  37 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme edit_form 'bootstrap_3_layout.html.twig' %}*/
/* {% block body %}*/
/* <div class="content-wrapper">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/*     <h1>Modifier Patient </h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*     <ul>*/
/* */
/*     <input class="btn btn-success btn-sm" type="submit" value="Modifier" />*/
/*     {{ form_end(edit_form) }}*/
/*             <a class="btn btn-success btn-sm" href="{{ path('patient_index')*/
/*             }}" role="button">Retour</a>*/
/* */
/*     </ul>*/
/*     <ul>*/
/*             {{ form_start(delete_form) }}*/
/*              <input class="btn btn-outline-danger btn-sm" type="submit" value="Supprimer">*/
/*             {{ form_end(delete_form) }}*/
/* */
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
