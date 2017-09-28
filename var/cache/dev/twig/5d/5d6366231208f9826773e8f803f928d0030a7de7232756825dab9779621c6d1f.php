<?php

/* :patient:index.html.twig */
class __TwigTemplate_be5f177e72a87527a8a24bbf0ff8ded1f0843d777b320bc7a374364f445fe86b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":patient:index.html.twig", 1);
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
        $__internal_a86c0eedbd0c76b525b1d6875740fafcd6a183535cc1a71340c34cda28932a9a = $this->env->getExtension("native_profiler");
        $__internal_a86c0eedbd0c76b525b1d6875740fafcd6a183535cc1a71340c34cda28932a9a->enter($__internal_a86c0eedbd0c76b525b1d6875740fafcd6a183535cc1a71340c34cda28932a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":patient:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a86c0eedbd0c76b525b1d6875740fafcd6a183535cc1a71340c34cda28932a9a->leave($__internal_a86c0eedbd0c76b525b1d6875740fafcd6a183535cc1a71340c34cda28932a9a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e339e2277ea77077571a2a35cdf71282ee59c5da49eb21c15df492734f6fdb66 = $this->env->getExtension("native_profiler");
        $__internal_e339e2277ea77077571a2a35cdf71282ee59c5da49eb21c15df492734f6fdb66->enter($__internal_e339e2277ea77077571a2a35cdf71282ee59c5da49eb21c15df492734f6fdb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <nav class=\"navbar navbar-expand-lg \">
    <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item\">
            <form class=\"form-inline my-2 my-lg-0 mr-lg-2\" method=\"post\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("patient_recherche");
        echo "\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"nom,prénom,téléphone...\" name=\"mot\">
                    <span class=\"input-group-btn\">
                  <button class=\"btn btn-success\" type=\"button\">
                    <i class=\"fa fa-search\"></i>
                  </button>
                </span>
                </div>
            </form>
        </li>
    </ul>
    </nav>

<div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
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
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["patients"]) ? $context["patients"] : $this->getContext($context, "patients")));
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            // line 41
            echo "            <tr>
                <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patient_show", array("id" => $this->getAttribute($context["patient"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "sexe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            if ($this->getAttribute($context["patient"], "datenaissance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["patient"], "datenaissance", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "addresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "age", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                            <a class=\"btn btn-secondary btn-sm\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patient_show", array("id" => $this->getAttribute($context["patient"], "id", array()))), "html", null, true);
            // line 53
            echo "\" role=\"button\">voir</a>

                            <a class=\"btn btn-success btn-sm\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patient_edit", array("id" => $this->getAttribute($context["patient"], "id", array()))), "html", null, true);
            // line 56
            echo "\" role=\"button\">modifier</a>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </tbody>
    </table>

    <ul>
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("patient_new");
        echo "\"  role=\"button\">Ajouter un patient</a>
    </ul>
</div>
";
        
        $__internal_e339e2277ea77077571a2a35cdf71282ee59c5da49eb21c15df492734f6fdb66->leave($__internal_e339e2277ea77077571a2a35cdf71282ee59c5da49eb21c15df492734f6fdb66_prof);

    }

    public function getTemplateName()
    {
        return ":patient:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 65,  147 => 61,  137 => 56,  135 => 55,  131 => 53,  129 => 52,  123 => 49,  119 => 48,  115 => 47,  109 => 46,  105 => 45,  101 => 44,  97 => 43,  91 => 42,  88 => 41,  84 => 40,  63 => 22,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <nav class="navbar navbar-expand-lg ">*/
/*     <ul class="navbar-nav ml-auto">*/
/*         <li class="nav-item">*/
/*             <form class="form-inline my-2 my-lg-0 mr-lg-2" method="post" action="{{ path('patient_recherche')}}">*/
/*                 <div class="input-group">*/
/*                     <input type="text" class="form-control" placeholder="nom,prénom,téléphone..." name="mot">*/
/*                     <span class="input-group-btn">*/
/*                   <button class="btn btn-success" type="button">*/
/*                     <i class="fa fa-search"></i>*/
/*                   </button>*/
/*                 </span>*/
/*                 </div>*/
/*             </form>*/
/*         </li>*/
/*     </ul>*/
/*     </nav>*/
/* */
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
/*                             })}}" role="button">voir</a>*/
/* */
/*                             <a class="btn btn-success btn-sm" href="{{ path('patient_edit', { 'id': patient.id*/
/*                             }) }}" role="button">modifier</a>*/
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
