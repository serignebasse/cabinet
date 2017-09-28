<?php

/* analyse/show.html.twig */
class __TwigTemplate_ed95ba6b1b9a4b518d1fc35cf68785f5167fda02689a9354922dea5f9ceec549 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "analyse/show.html.twig", 1);
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
        $__internal_c6db239c46feda61ccd239cd9ceedf8dd2ff51b21b5a26e35a173bc20c48b042 = $this->env->getExtension("native_profiler");
        $__internal_c6db239c46feda61ccd239cd9ceedf8dd2ff51b21b5a26e35a173bc20c48b042->enter($__internal_c6db239c46feda61ccd239cd9ceedf8dd2ff51b21b5a26e35a173bc20c48b042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "analyse/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6db239c46feda61ccd239cd9ceedf8dd2ff51b21b5a26e35a173bc20c48b042->leave($__internal_c6db239c46feda61ccd239cd9ceedf8dd2ff51b21b5a26e35a173bc20c48b042_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6873dc6ebbbb274594851a2e450953a28c848c56decc59a2b7100733a77f844 = $this->env->getExtension("native_profiler");
        $__internal_e6873dc6ebbbb274594851a2e450953a28c848c56decc59a2b7100733a77f844->enter($__internal_e6873dc6ebbbb274594851a2e450953a28c848c56decc59a2b7100733a77f844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Analyse</h1>

    <table class=\"table table-responsive table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["analyse"]) ? $context["analyse"] : $this->getContext($context, "analyse")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["analyse"]) ? $context["analyse"] : $this->getContext($context, "analyse")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["analyse"]) ? $context["analyse"] : $this->getContext($context, "analyse")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Resultat</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["analyse"]) ? $context["analyse"] : $this->getContext($context, "analyse")), "resultat", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("analyse_index");
        echo "\" role=\"button\">Retour</a>
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("analyse_edit", array("id" => $this->getAttribute((isset($context["analyse"]) ? $context["analyse"] : $this->getContext($context, "analyse")), "id", array()))), "html", null, true);
        // line 33
        echo "\" role=\"button\">Modifier</a>
    </ul>
    <ul>
            ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-outline-danger btn-sm\" type=\"submit\" value=\"Supprimer\">
            ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </ul>
    </div>
";
        
        $__internal_e6873dc6ebbbb274594851a2e450953a28c848c56decc59a2b7100733a77f844->leave($__internal_e6873dc6ebbbb274594851a2e450953a28c848c56decc59a2b7100733a77f844_prof);

    }

    public function getTemplateName()
    {
        return "analyse/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 38,  95 => 36,  90 => 33,  88 => 32,  84 => 31,  75 => 25,  68 => 21,  61 => 17,  54 => 13,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Analyse</h1>*/
/* */
/*     <table class="table table-responsive table-hover">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ analyse.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ analyse.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Type</th>*/
/*                 <td>{{ analyse.type }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Resultat</th>*/
/*                 <td>{{ analyse.resultat }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*             <a class="btn btn-success btn-sm" href="{{ path('analyse_index') }}" role="button">Retour</a>*/
/*             <a class="btn btn-success btn-sm" href="{{ path('analyse_edit', { 'id': analyse.id })*/
/*             }}" role="button">Modifier</a>*/
/*     </ul>*/
/*     <ul>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input class="btn btn-outline-danger btn-sm" type="submit" value="Supprimer">*/
/*             {{ form_end(delete_form) }}*/
/*     </ul>*/
/*     </div>*/
/* {% endblock %}*/
/* */
