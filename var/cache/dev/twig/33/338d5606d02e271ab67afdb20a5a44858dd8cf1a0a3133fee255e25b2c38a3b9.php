<?php

/* :ordonnance:edit.html.twig */
class __TwigTemplate_8903a9fafa3e0bb2a32c14ad19885649b74ea128e9ec5a434adb23edf42704cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":ordonnance:edit.html.twig", 1);
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
        $__internal_a8b6539cf722b8ec5792bf279a48673d8ca962c6f02a1746da41f40e1ae7c039 = $this->env->getExtension("native_profiler");
        $__internal_a8b6539cf722b8ec5792bf279a48673d8ca962c6f02a1746da41f40e1ae7c039->enter($__internal_a8b6539cf722b8ec5792bf279a48673d8ca962c6f02a1746da41f40e1ae7c039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ordonnance:edit.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8b6539cf722b8ec5792bf279a48673d8ca962c6f02a1746da41f40e1ae7c039->leave($__internal_a8b6539cf722b8ec5792bf279a48673d8ca962c6f02a1746da41f40e1ae7c039_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a74a2cb31317f1b834de437858730944ed24ce158a43f83de1b0716d8870f316 = $this->env->getExtension("native_profiler");
        $__internal_a74a2cb31317f1b834de437858730944ed24ce158a43f83de1b0716d8870f316->enter($__internal_a74a2cb31317f1b834de437858730944ed24ce158a43f83de1b0716d8870f316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"content-wrapper\">
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <h1>Modifier Ordonnance</h1>

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
        echo $this->env->getExtension('routing')->getPath("ordonnance_index");
        echo "\" role=\"button\">Retour</a>
        </ul>
        <ul>
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-outline-danger btn-sm\" type=\"submit\" value=\"Supprimer\">
            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

    </ul>
    </div>
";
        
        $__internal_a74a2cb31317f1b834de437858730944ed24ce158a43f83de1b0716d8870f316->leave($__internal_a74a2cb31317f1b834de437858730944ed24ce158a43f83de1b0716d8870f316_prof);

    }

    public function getTemplateName()
    {
        return ":ordonnance:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  72 => 17,  66 => 14,  62 => 13,  56 => 10,  52 => 9,  46 => 6,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme edit_form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="content-wrapper">*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/*     <h1>Modifier Ordonnance</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <ul>*/
/*         <input class="btn btn-success btn-sm" type="submit" value="Modifier" />*/
/*     {{ form_end(edit_form) }}*/
/*             <a class="btn btn-success btn-sm" href="{{ path('ordonnance_index') }}" role="button">Retour</a>*/
/*         </ul>*/
/*         <ul>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input class="btn btn-outline-danger btn-sm" type="submit" value="Supprimer">*/
/*             {{ form_end(delete_form) }}*/
/* */
/*     </ul>*/
/*     </div>*/
/* {% endblock %}*/
/* */
