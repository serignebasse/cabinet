<?php

/* :secretaire:edit.html.twig */
class __TwigTemplate_32c8a2c35d9d90d9551b11cab43c9884bcf653bb3847f09e0ac645725e85b584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":secretaire:edit.html.twig", 1);
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
        $__internal_4d0e3ece7a45f441d98e66133c1910ea5190eaa0b9a555ee532c9238eaf2da14 = $this->env->getExtension("native_profiler");
        $__internal_4d0e3ece7a45f441d98e66133c1910ea5190eaa0b9a555ee532c9238eaf2da14->enter($__internal_4d0e3ece7a45f441d98e66133c1910ea5190eaa0b9a555ee532c9238eaf2da14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":secretaire:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d0e3ece7a45f441d98e66133c1910ea5190eaa0b9a555ee532c9238eaf2da14->leave($__internal_4d0e3ece7a45f441d98e66133c1910ea5190eaa0b9a555ee532c9238eaf2da14_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e92e52d0f38e66a8771217e1704320b8571455efaa7248b7dffc9cbb50804d16 = $this->env->getExtension("native_profiler");
        $__internal_e92e52d0f38e66a8771217e1704320b8571455efaa7248b7dffc9cbb50804d16->enter($__internal_e92e52d0f38e66a8771217e1704320b8571455efaa7248b7dffc9cbb50804d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper col-lg-4\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Modifier Secretaire</h1>
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
        echo $this->env->getExtension('routing')->getPath("secretaire_index");
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
        
        $__internal_e92e52d0f38e66a8771217e1704320b8571455efaa7248b7dffc9cbb50804d16->leave($__internal_e92e52d0f38e66a8771217e1704320b8571455efaa7248b7dffc9cbb50804d16_prof);

    }

    public function getTemplateName()
    {
        return ":secretaire:edit.html.twig";
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
/* <div class="content-wrapper col-lg-4">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Modifier Secretaire</h1>*/
/*         {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*     <ul>*/
/*         <input class="btn btn-success btn-sm" type="submit" value="Modifier" />*/
/*         {{ form_end(edit_form) }}*/
/*         <a class="btn btn-success btn-sm" href="{{ path('secretaire_index') }}" role="button">Retour</a>*/
/*     </ul>*/
/*     <ul>*/
/*         {{ form_start(delete_form) }}*/
/*                 <input class="btn btn-outline-danger btn-sm" type="submit" value="Supprimer">*/
/*         {{ form_end(delete_form) }}*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
