<?php

/* rendezvous/index.html.twig */
class __TwigTemplate_d38d8c0db0593639f1e5ebcbd218a5febf90fb5485e55c3cdac29660875bdfaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rendezvous/index.html.twig", 1);
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
        $__internal_dfc999614c68ace10f835cd867508e102229a9d03eeeb29c561776dd8e24f9ba = $this->env->getExtension("native_profiler");
        $__internal_dfc999614c68ace10f835cd867508e102229a9d03eeeb29c561776dd8e24f9ba->enter($__internal_dfc999614c68ace10f835cd867508e102229a9d03eeeb29c561776dd8e24f9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rendezvous/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfc999614c68ace10f835cd867508e102229a9d03eeeb29c561776dd8e24f9ba->leave($__internal_dfc999614c68ace10f835cd867508e102229a9d03eeeb29c561776dd8e24f9ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_80f7d82fe50986f461e178bb4e449f8821c68a809782e0d730a45fff7446d48a = $this->env->getExtension("native_profiler");
        $__internal_80f7d82fe50986f461e178bb4e449f8821c68a809782e0d730a45fff7446d48a->enter($__internal_80f7d82fe50986f461e178bb4e449f8821c68a809782e0d730a45fff7446d48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <nav class=\"navbar navbar-expand-lg \">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
                <form class=\"form-inline my-2 my-lg-0 mr-lg-2\" method=\"post\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("rendezvous_recherche");
        echo "\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"date...\" name=\"mot\">
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

<div class=\"content-wrapper \">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <h1>Liste des rendez-vous </h1>

    <table class=\"table table-sm table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Date du rendez-vous</th>
                <th>Fréquence</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rendezvouses"]) ? $context["rendezvouses"] : $this->getContext($context, "rendezvouses")));
        foreach ($context['_seq'] as $context["_key"] => $context["rendezvous"]) {
            // line 37
            echo "            <tr>
                <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rendezvous_show", array("id" => $this->getAttribute($context["rendezvous"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rendezvous"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 39
            if ($this->getAttribute($context["rendezvous"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rendezvous"], "date", array()), "d-M-y H:m"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["rendezvous"], "frequence", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                            <a class=\"btn btn-secondary btn-sm\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rendezvous_show", array("id" => $this->getAttribute(            // line 44
$context["rendezvous"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">voir</a>

                            <a class=\"btn btn-success btn-sm\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rendezvous_edit", array("id" => $this->getAttribute(            // line 47
$context["rendezvous"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">modifier</a>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rendezvous'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>

    <ul>
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("rendezvous_new");
        echo "\"
               role=\"button\">Ajouter un rendez-vous</a>
    </ul>
</div>
";
        
        $__internal_80f7d82fe50986f461e178bb4e449f8821c68a809782e0d730a45fff7446d48a->leave($__internal_80f7d82fe50986f461e178bb4e449f8821c68a809782e0d730a45fff7446d48a_prof);

    }

    public function getTemplateName()
    {
        return "rendezvous/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 56,  123 => 52,  112 => 47,  111 => 46,  106 => 44,  105 => 43,  99 => 40,  93 => 39,  87 => 38,  84 => 37,  80 => 36,  64 => 23,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <nav class="navbar navbar-expand-lg ">*/
/*         <ul class="navbar-nav ml-auto">*/
/*             <li class="nav-item">*/
/*                 <form class="form-inline my-2 my-lg-0 mr-lg-2" method="post" action="{{ path('rendezvous_recherche')}}">*/
/*                     <div class="input-group">*/
/*                         <input type="text" class="form-control" placeholder="date..." name="mot">*/
/*                         <span class="input-group-btn">*/
/*                   <button class="btn btn-success" type="button">*/
/*                     <i class="fa fa-search"></i>*/
/*                   </button>*/
/*                 </span>*/
/*                     </div>*/
/*                 </form>*/
/*             </li>*/
/*         </ul>*/
/*     </nav>*/
/* */
/* <div class="content-wrapper ">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/*     <h1>Liste des rendez-vous </h1>*/
/* */
/*     <table class="table table-sm table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Date du rendez-vous</th>*/
/*                 <th>Fréquence</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for rendezvous in rendezvouses %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('rendezvous_show', { 'id': rendezvous.id }) }}">{{ rendezvous.id }}</a></td>*/
/*                 <td>{% if rendezvous.date %}{{ rendezvous.date|date('d-M-y H:m') }}{% endif %}</td>*/
/*                 <td>{{ rendezvous.frequence }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                             <a class="btn btn-secondary btn-sm" href="{{ path('rendezvous_show',*/
/*                             { 'id': rendezvous.id }) }}" role="button">voir</a>*/
/* */
/*                             <a class="btn btn-success btn-sm" href="{{ path('rendezvous_edit',*/
/*                             { 'id': rendezvous.id }) }}" role="button">modifier</a>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*             <a class="btn btn-success btn-sm" href="{{ path('rendezvous_new') }}"*/
/*                role="button">Ajouter un rendez-vous</a>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
