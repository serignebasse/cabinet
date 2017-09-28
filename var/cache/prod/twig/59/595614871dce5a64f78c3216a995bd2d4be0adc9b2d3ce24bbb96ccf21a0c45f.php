<?php

/* medecin/index.html.twig */
class __TwigTemplate_ebf021fc3f3f172f52c2986701cea309799476e1c9165f5b05573ee8252dd645 extends Twig_Template
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
        $__internal_9e752d85fb026326bed1ca2819608f8658689538f017726ba04cee8e5f3810cc = $this->env->getExtension("native_profiler");
        $__internal_9e752d85fb026326bed1ca2819608f8658689538f017726ba04cee8e5f3810cc->enter($__internal_9e752d85fb026326bed1ca2819608f8658689538f017726ba04cee8e5f3810cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "medecin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e752d85fb026326bed1ca2819608f8658689538f017726ba04cee8e5f3810cc->leave($__internal_9e752d85fb026326bed1ca2819608f8658689538f017726ba04cee8e5f3810cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5d8653c7a3b32cadc58b0d0fd4f3ca6b2f365003c81c2d430f71825e638f2d6 = $this->env->getExtension("native_profiler");
        $__internal_e5d8653c7a3b32cadc58b0d0fd4f3ca6b2f365003c81c2d430f71825e638f2d6->enter($__internal_e5d8653c7a3b32cadc58b0d0fd4f3ca6b2f365003c81c2d430f71825e638f2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
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
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medecins"]) ? $context["medecins"] : $this->getContext($context, "medecins")));
        foreach ($context['_seq'] as $context["_key"] => $context["medecin"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medecin_show", array("id" => $this->getAttribute($context["medecin"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "addresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "sexe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "cabinet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["medecin"], "specialite", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                           <a class=\"btn btn-secondary btn-sm\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medecin_show", array("id" => $this->getAttribute(            // line 39
$context["medecin"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">Voir</a>

                            <a class=\"btn btn-success btn-sm\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medecin_edit", array("id" => $this->getAttribute(            // line 42
$context["medecin"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">Modifier</a>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medecin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    <ul>

            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("medecin_new");
        echo "\" role=\"button\">Ajouter Madecin</a>

    </ul>
</div>
";
        
        $__internal_e5d8653c7a3b32cadc58b0d0fd4f3ca6b2f365003c81c2d430f71825e638f2d6->leave($__internal_e5d8653c7a3b32cadc58b0d0fd4f3ca6b2f365003c81c2d430f71825e638f2d6_prof);

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
        return array (  138 => 52,  131 => 47,  120 => 42,  119 => 41,  114 => 39,  113 => 38,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  73 => 27,  70 => 26,  66 => 25,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
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
/*                             { 'id': medecin.id }) }}" role="button">Voir</a>*/
/* */
/*                             <a class="btn btn-success btn-sm" href="{{ path('medecin_edit',*/
/*                             { 'id': medecin.id }) }}" role="button">Modifier</a>*/
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
