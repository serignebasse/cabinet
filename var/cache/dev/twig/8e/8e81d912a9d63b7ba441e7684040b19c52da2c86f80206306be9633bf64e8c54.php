<?php

/* medecin/index.html.twig */
class __TwigTemplate_9f595d8d073cd3ae77c0c3ad07ce87011a3f272fba75d0ec53cebc2ddeb125a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "medecin/index.html.twig", 1);
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
        $__internal_dc52ab5131a0e86852a33aaa0458b65d41e22657fb9d3966b06351ea049cf2e5 = $this->env->getExtension("native_profiler");
        $__internal_dc52ab5131a0e86852a33aaa0458b65d41e22657fb9d3966b06351ea049cf2e5->enter($__internal_dc52ab5131a0e86852a33aaa0458b65d41e22657fb9d3966b06351ea049cf2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "medecin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc52ab5131a0e86852a33aaa0458b65d41e22657fb9d3966b06351ea049cf2e5->leave($__internal_dc52ab5131a0e86852a33aaa0458b65d41e22657fb9d3966b06351ea049cf2e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef60cb958b49a7d32481ab06a79f0c0c6fdd512098a2bcf4c63750285f61c6f1 = $this->env->getExtension("native_profiler");
        $__internal_ef60cb958b49a7d32481ab06a79f0c0c6fdd512098a2bcf4c63750285f61c6f1->enter($__internal_ef60cb958b49a7d32481ab06a79f0c0c6fdd512098a2bcf4c63750285f61c6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <nav class=\"navbar navbar-expand-lg\">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
                <form class=\"form-inline my-2 my-lg-0 mr-lg-2\" method=\"post\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("medecin_recherche");
        echo "\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"nom,prénom,téléphone...\" name=\"mot\">
                        <span class=\"input-group-btn\">
                  <button class=\"btn btn-success\" type=\"button\" >
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

    <h1>Liste des médecins</h1>

    <table class=\"table table-sm table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Addresse</th>
                <th>Email</th>
                <th>Télèphone</th>
                <th>Sexe</th>
                <th>Cabinet</th>
                <th>Spécialité</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medecins"]) ? $context["medecins"] : $this->getContext($context, "medecins")));
        foreach ($context['_seq'] as $context["_key"] => $context["medecin"]) {
            // line 43
            echo "            <tr>
                <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medecin_show", array("id" => $this->getAttribute($context["medecin"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "addresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "sexe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "cabinet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "specialite", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                           <a class=\"btn btn-secondary btn-sm\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medecin_show", array("id" => $this->getAttribute(            // line 56
$context["medecin"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">voir</a>

                            <a class=\"btn btn-success btn-sm\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medecin_edit", array("id" => $this->getAttribute(            // line 59
$context["medecin"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">modifier</a>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medecin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>

    <ul>

            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("medecin_new");
        echo "\" role=\"button\">Ajouter Madecin</a>

    </ul>
</div>
";
        
        $__internal_ef60cb958b49a7d32481ab06a79f0c0c6fdd512098a2bcf4c63750285f61c6f1->leave($__internal_ef60cb958b49a7d32481ab06a79f0c0c6fdd512098a2bcf4c63750285f61c6f1_prof);

    }

    public function getTemplateName()
    {
        return "medecin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 69,  151 => 64,  140 => 59,  139 => 58,  134 => 56,  133 => 55,  127 => 52,  123 => 51,  119 => 50,  115 => 49,  111 => 48,  107 => 47,  103 => 46,  99 => 45,  93 => 44,  90 => 43,  86 => 42,  63 => 22,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <nav class="navbar navbar-expand-lg">*/
/*         <ul class="navbar-nav ml-auto">*/
/*             <li class="nav-item">*/
/*                 <form class="form-inline my-2 my-lg-0 mr-lg-2" method="post" action="{{ path('medecin_recherche')}}">*/
/*                     <div class="input-group">*/
/*                         <input type="text" class="form-control" placeholder="nom,prénom,téléphone..." name="mot">*/
/*                         <span class="input-group-btn">*/
/*                   <button class="btn btn-success" type="button" >*/
/*                     <i class="fa fa-search"></i>*/
/*                   </button>*/
/*                 </span>*/
/*                     </div>*/
/*                 </form>*/
/*             </li>*/
/*         </ul>*/
/*     </nav>*/
/* */
/* <div class="content-wrapper">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Liste des médecins</h1>*/
/* */
/*     <table class="table table-sm table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Prenom</th>*/
/*                 <th>Addresse</th>*/
/*                 <th>Email</th>*/
/*                 <th>Télèphone</th>*/
/*                 <th>Sexe</th>*/
/*                 <th>Cabinet</th>*/
/*                 <th>Spécialité</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for medecin in medecins %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('medecin_show', { 'id': medecin.id }) }}">{{ medecin.id}}</a></td>*/
/*                 <td>{{ medecin.nom }}</td>*/
/*                 <td>{{ medecin.prenom}}</td>*/
/*                 <td>{{ medecin.addresse }}</td>*/
/*                 <td>{{ medecin.email }}</td>*/
/*                 <td>{{ medecin.telephone }}</td>*/
/*                 <td>{{ medecin.sexe }}</td>*/
/*                 <td>{{ medecin.cabinet }}</td>*/
/*                 <td>{{ medecin.specialite }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                            <a class="btn btn-secondary btn-sm" href="{{ path('medecin_show',*/
/*                             { 'id': medecin.id }) }}" role="button">voir</a>*/
/* */
/*                             <a class="btn btn-success btn-sm" href="{{ path('medecin_edit',*/
/*                             { 'id': medecin.id }) }}" role="button">modifier</a>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/* */
/*             <a class="btn btn-success btn-sm" href="{{ path('medecin_new') }}" role="button">Ajouter Madecin</a>*/
/* */
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
