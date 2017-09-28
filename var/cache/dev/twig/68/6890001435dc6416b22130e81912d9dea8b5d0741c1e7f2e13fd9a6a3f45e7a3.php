<?php

/* :analyse:index.html.twig */
class __TwigTemplate_7435ab911a6546c5eb22fa5366129d9e2ce8102a74d9bc095bdbf44681c52a1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":analyse:index.html.twig", 1);
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
        $__internal_b4b82418399ff337554ebed92cb98c31fe03dc7e0dd7fb8da6f4aa128c51f9c6 = $this->env->getExtension("native_profiler");
        $__internal_b4b82418399ff337554ebed92cb98c31fe03dc7e0dd7fb8da6f4aa128c51f9c6->enter($__internal_b4b82418399ff337554ebed92cb98c31fe03dc7e0dd7fb8da6f4aa128c51f9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":analyse:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4b82418399ff337554ebed92cb98c31fe03dc7e0dd7fb8da6f4aa128c51f9c6->leave($__internal_b4b82418399ff337554ebed92cb98c31fe03dc7e0dd7fb8da6f4aa128c51f9c6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_15ee668b4dabe191fed2735e4891c66737834b3c2ba31be7f09c882ee47d2c15 = $this->env->getExtension("native_profiler");
        $__internal_15ee668b4dabe191fed2735e4891c66737834b3c2ba31be7f09c882ee47d2c15->enter($__internal_15ee668b4dabe191fed2735e4891c66737834b3c2ba31be7f09c882ee47d2c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Liste des analyses</h1>

    <table class=\"table table-sm table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Type</th>
                <th>Resultat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analyses"]) ? $context["analyses"] : $this->getContext($context, "analyses")));
        foreach ($context['_seq'] as $context["_key"] => $context["analyse"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("analyse_show", array("id" => $this->getAttribute($context["analyse"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["analyse"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["analyse"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["analyse"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["analyse"], "resultat", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                            <a class=\"btn btn-secondary btn-sm\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("analyse_show", array("id" => $this->getAttribute(            // line 29
$context["analyse"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">voir</a>

                            <a class=\"btn btn-success btn-sm\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("analyse_edit", array("id" => $this->getAttribute(            // line 32
$context["analyse"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">modifier</a>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analyse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("analyse_new");
        echo "\" role=\"button\">Ajouter analyse</a>
    </ul>
    </div>
";
        
        $__internal_15ee668b4dabe191fed2735e4891c66737834b3c2ba31be7f09c882ee47d2c15->leave($__internal_15ee668b4dabe191fed2735e4891c66737834b3c2ba31be7f09c882ee47d2c15_prof);

    }

    public function getTemplateName()
    {
        return ":analyse:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  106 => 37,  95 => 32,  94 => 31,  89 => 29,  88 => 28,  82 => 25,  78 => 24,  74 => 23,  68 => 22,  65 => 21,  61 => 20,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="content-wrapper">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Liste des analyses</h1>*/
/* */
/*     <table class="table table-sm table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Type</th>*/
/*                 <th>Resultat</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for analyse in analyses %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('analyse_show', { 'id': analyse.id }) }}">{{ analyse.id }}</a></td>*/
/*                 <td>{{ analyse.nom }}</td>*/
/*                 <td>{{ analyse.type }}</td>*/
/*                 <td>{{ analyse.resultat }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                             <a class="btn btn-secondary btn-sm" href="{{ path('analyse_show',*/
/*                             { 'id': analyse.id }) }}" role="button">voir</a>*/
/* */
/*                             <a class="btn btn-success btn-sm" href="{{ path('analyse_edit',*/
/*                             { 'id': analyse.id }) }}" role="button">modifier</a>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*             <a class="btn btn-success btn-sm" href="{{ path('analyse_new') }}" role="button">Ajouter analyse</a>*/
/*     </ul>*/
/*     </div>*/
/* {% endblock %}*/
/* */
