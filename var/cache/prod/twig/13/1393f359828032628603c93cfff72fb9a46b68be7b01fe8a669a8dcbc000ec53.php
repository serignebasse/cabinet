<?php

/* patient/index.html.twig */
class __TwigTemplate_d600e29b4e2e90ee1625d8e0f0d63418ce6e72b051f260bfbe1632ef5a575792 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "patient/index.html.twig", 1);
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
        $__internal_6dc1fc9d4bfd72ef599b47c97aca9390490154cd8d799ddba2cadb64d687233b = $this->env->getExtension("native_profiler");
        $__internal_6dc1fc9d4bfd72ef599b47c97aca9390490154cd8d799ddba2cadb64d687233b->enter($__internal_6dc1fc9d4bfd72ef599b47c97aca9390490154cd8d799ddba2cadb64d687233b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "patient/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dc1fc9d4bfd72ef599b47c97aca9390490154cd8d799ddba2cadb64d687233b->leave($__internal_6dc1fc9d4bfd72ef599b47c97aca9390490154cd8d799ddba2cadb64d687233b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8dfbe4bc86f51dfeaa79cfe28a859895ae7070c40779372379c97b11a6fef40 = $this->env->getExtension("native_profiler");
        $__internal_f8dfbe4bc86f51dfeaa79cfe28a859895ae7070c40779372379c97b11a6fef40->enter($__internal_f8dfbe4bc86f51dfeaa79cfe28a859895ae7070c40779372379c97b11a6fef40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <h1>Liste des patients </h1>

    <table class=\"table table-sm table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Sexe</th>
                <th>Date de naissance</th>
                <th>Addresse</th>
                <th>Télèphone</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["patients"]) ? $context["patients"] : $this->getContext($context, "patients")));
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patient_show", array("id" => $this->getAttribute($context["patient"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "sexe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            if ($this->getAttribute($context["patient"], "datenaissance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["patient"], "datenaissance", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "addresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "age", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                            <a class=\"btn btn-secondary btn-sm\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patient_show", array("id" => $this->getAttribute($context["patient"], "id", array()))), "html", null, true);
            // line 36
            echo "\" role=\"button\">Voir</a>

                            <a class=\"btn btn-success btn-sm\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patient_edit", array("id" => $this->getAttribute($context["patient"], "id", array()))), "html", null, true);
            // line 39
            echo "\" role=\"button\">Modifier</a>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>

    <ul>
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("patient_new");
        echo "\"  role=\"button\">Ajouter un patient</a>
    </ul>
</div>
";
        
        $__internal_f8dfbe4bc86f51dfeaa79cfe28a859895ae7070c40779372379c97b11a6fef40->leave($__internal_f8dfbe4bc86f51dfeaa79cfe28a859895ae7070c40779372379c97b11a6fef40_prof);

    }

    public function getTemplateName()
    {
        return "patient/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 48,  127 => 44,  117 => 39,  115 => 38,  111 => 36,  109 => 35,  103 => 32,  99 => 31,  95 => 30,  89 => 29,  85 => 28,  81 => 27,  77 => 26,  71 => 25,  68 => 24,  64 => 23,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/*     <h1>Liste des patients </h1>*/
/* */
/*     <table class="table table-sm table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Prenom</th>*/
/*                 <th>Sexe</th>*/
/*                 <th>Date de naissance</th>*/
/*                 <th>Addresse</th>*/
/*                 <th>Télèphone</th>*/
/*                 <th>Age</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for patient in patients %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('patient_show', { 'id': patient.id }) }}">{{ patient.id }}</a></td>*/
/*                 <td>{{ patient.nom }}</td>*/
/*                 <td>{{ patient.prenom }}</td>*/
/*                 <td>{{ patient.sexe }}</td>*/
/*                 <td>{% if patient.datenaissance %}{{ patient.datenaissance|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ patient.addresse }}</td>*/
/*                 <td>{{ patient.telephone }}</td>*/
/*                 <td>{{ patient.age }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                             <a class="btn btn-secondary btn-sm" href="{{ path('patient_show', { 'id': patient.id*/
/*                             })}}" role="button">Voir</a>*/
/* */
/*                             <a class="btn btn-success btn-sm" href="{{ path('patient_edit', { 'id': patient.id*/
/*                             }) }}" role="button">Modifier</a>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*             <a class="btn btn-success btn-sm" href="{{ path('patient_new') }}"  role="button">Ajouter un patient</a>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
