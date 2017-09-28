<?php

/* consultation/index.html.twig */
class __TwigTemplate_0b09f5fa473f9770b838123e23ffa557abb625825a28af6c38058ccfe3887a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "consultation/index.html.twig", 1);
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
        $__internal_93680d34fadb1614e438654918d0ca48dd0551d9e2b65e505743d38445cce6cd = $this->env->getExtension("native_profiler");
        $__internal_93680d34fadb1614e438654918d0ca48dd0551d9e2b65e505743d38445cce6cd->enter($__internal_93680d34fadb1614e438654918d0ca48dd0551d9e2b65e505743d38445cce6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "consultation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93680d34fadb1614e438654918d0ca48dd0551d9e2b65e505743d38445cce6cd->leave($__internal_93680d34fadb1614e438654918d0ca48dd0551d9e2b65e505743d38445cce6cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_89d3fe4627de23adae9ee1f7bebad1b0e2759ec40fc19655e9da225b20ab8120 = $this->env->getExtension("native_profiler");
        $__internal_89d3fe4627de23adae9ee1f7bebad1b0e2759ec40fc19655e9da225b20ab8120->enter($__internal_89d3fe4627de23adae9ee1f7bebad1b0e2759ec40fc19655e9da225b20ab8120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <nav class=\"navbar navbar-expand-lg\">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
                <form class=\"form-inline my-2 my-lg-0 mr-lg-2\" method=\"post\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("consultation_recherche");
        echo "\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"decision...\" name=\"mot\">
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
    <h1>Liste des Consultations </h1>

    <table  class=\"table table-sm table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Diagnostic</th>
                <th>Traitement</th>
                <th>Decision</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["consultations"]) ? $context["consultations"] : $this->getContext($context, "consultations")));
        foreach ($context['_seq'] as $context["_key"] => $context["consultation"]) {
            // line 38
            echo "            <tr>
                <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consultation_show", array("id" => $this->getAttribute($context["consultation"], "id", array()))), "html", null, true);
            // line 40
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["consultation"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 41
            if ($this->getAttribute($context["consultation"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["consultation"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["consultation"], "diagnostic", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["consultation"], "traitement", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["consultation"], "decision", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                            <a class=\"btn btn-secondary btn-sm\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consultation_show", array("id" => $this->getAttribute(            // line 48
$context["consultation"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">voir</a>
                            <a class=\"btn btn-success btn-sm\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consultation_edit", array("id" => $this->getAttribute(            // line 50
$context["consultation"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">modifier</a>

                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['consultation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </tbody>
    </table>

    <ul>
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("consultation_new");
        // line 61
        echo "\" role=\"button\">Ajouter une consultaiton</a>
    </ul>
</div>
";
        
        $__internal_89d3fe4627de23adae9ee1f7bebad1b0e2759ec40fc19655e9da225b20ab8120->leave($__internal_89d3fe4627de23adae9ee1f7bebad1b0e2759ec40fc19655e9da225b20ab8120_prof);

    }

    public function getTemplateName()
    {
        return "consultation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 61,  139 => 60,  133 => 56,  121 => 50,  120 => 49,  116 => 48,  115 => 47,  109 => 44,  105 => 43,  101 => 42,  95 => 41,  90 => 40,  88 => 39,  85 => 38,  81 => 37,  63 => 22,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <nav class="navbar navbar-expand-lg">*/
/*         <ul class="navbar-nav ml-auto">*/
/*             <li class="nav-item">*/
/*                 <form class="form-inline my-2 my-lg-0 mr-lg-2" method="post" action="{{ path('consultation_recherche')}}">*/
/*                     <div class="input-group">*/
/*                         <input type="text" class="form-control" placeholder="decision..." name="mot">*/
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
/*     <h1>Liste des Consultations </h1>*/
/* */
/*     <table  class="table table-sm table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Date</th>*/
/*                 <th>Diagnostic</th>*/
/*                 <th>Traitement</th>*/
/*                 <th>Decision</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for consultation in consultations %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('consultation_show', { 'id': consultation.id })*/
/*                     }}">{{ consultation.id }}</a></td>*/
/*                 <td>{% if consultation.date %}{{ consultation.date|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ consultation.diagnostic }}</td>*/
/*                 <td>{{ consultation.traitement }}</td>*/
/*                 <td>{{ consultation.decision }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                             <a class="btn btn-secondary btn-sm" href="{{ path('consultation_show',*/
/*                             { 'id': consultation.id }) }}" role="button">voir</a>*/
/*                             <a class="btn btn-success btn-sm" href="{{ path('consultation_edit',*/
/*                             { 'id': consultation.id }) }}" role="button">modifier</a>*/
/* */
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*             <a class="btn btn-success btn-sm" href="{{ path('consultation_new')*/
/*             }}" role="button">Ajouter une consultaiton</a>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
