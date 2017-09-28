<?php

/* consultation/show.html.twig */
class __TwigTemplate_0d2cd9e663371ba0b62799943ffa44508e16ba70b057784bca7deecea57983b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "consultation/show.html.twig", 1);
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
        $__internal_aed0a4c0f93f974158c0bd9154a8f8d6a5f4c6ababdb617d004abb63ab7d3a84 = $this->env->getExtension("native_profiler");
        $__internal_aed0a4c0f93f974158c0bd9154a8f8d6a5f4c6ababdb617d004abb63ab7d3a84->enter($__internal_aed0a4c0f93f974158c0bd9154a8f8d6a5f4c6ababdb617d004abb63ab7d3a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "consultation/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aed0a4c0f93f974158c0bd9154a8f8d6a5f4c6ababdb617d004abb63ab7d3a84->leave($__internal_aed0a4c0f93f974158c0bd9154a8f8d6a5f4c6ababdb617d004abb63ab7d3a84_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef00ad3d83293377286ab75508c6a30d8ded0610035313601dad69b5097014eb = $this->env->getExtension("native_profiler");
        $__internal_ef00ad3d83293377286ab75508c6a30d8ded0610035313601dad69b5097014eb->enter($__internal_ef00ad3d83293377286ab75508c6a30d8ded0610035313601dad69b5097014eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Consultation</h1>

    <table class=\"table table-responsive table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 17
        if ($this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Diagnostic</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "diagnostic", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Traitement</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "traitement", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Decision</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "decision", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>

            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("consultation_index");
        // line 37
        echo "\" role=\"button\">Retour</a>
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consultation_edit", array("id" => $this->getAttribute((isset($context["consultation"]) ? $context["consultation"] : $this->getContext($context, "consultation")), "id", array()))), "html", null, true);
        // line 39
        echo "\" role=\"button\">Modifier</a>
    </ul>
    <ul>
            ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-outline-danger btn-sm\" type=\"submit\" value=\"Supprimer\">
            ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </ul>
</div>
";
        
        $__internal_ef00ad3d83293377286ab75508c6a30d8ded0610035313601dad69b5097014eb->leave($__internal_ef00ad3d83293377286ab75508c6a30d8ded0610035313601dad69b5097014eb_prof);

    }

    public function getTemplateName()
    {
        return "consultation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 44,  106 => 42,  101 => 39,  99 => 38,  96 => 37,  94 => 36,  84 => 29,  77 => 25,  70 => 21,  61 => 17,  54 => 13,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Consultation</h1>*/
/* */
/*     <table class="table table-responsive table-hover">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ consultation.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Date</th>*/
/*                 <td>{% if consultation.date %}{{ consultation.date|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Diagnostic</th>*/
/*                 <td>{{ consultation.diagnostic }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Traitement</th>*/
/*                 <td>{{ consultation.traitement }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Decision</th>*/
/*                 <td>{{ consultation.decision }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/* */
/*             <a class="btn btn-success btn-sm" href="{{ path('consultation_index')*/
/*             }}" role="button">Retour</a>*/
/*             <a class="btn btn-success btn-sm" href="{{ path('consultation_edit', { 'id': consultation.id })*/
/*             }}" role="button">Modifier</a>*/
/*     </ul>*/
/*     <ul>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input class="btn btn-outline-danger btn-sm" type="submit" value="Supprimer">*/
/*             {{ form_end(delete_form) }}*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
