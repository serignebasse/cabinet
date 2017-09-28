<?php

/* consultation/index.html.twig */
class __TwigTemplate_9edb35e49a987238f60423e1e21b637cb865279fb653bdfe00b33b5c4b6c5d01 extends Twig_Template
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
        $__internal_dde39c61de83b3e8ad72ae9c9d7cc7376dce91daa372699c64a0fb00c50b7e66 = $this->env->getExtension("native_profiler");
        $__internal_dde39c61de83b3e8ad72ae9c9d7cc7376dce91daa372699c64a0fb00c50b7e66->enter($__internal_dde39c61de83b3e8ad72ae9c9d7cc7376dce91daa372699c64a0fb00c50b7e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "consultation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dde39c61de83b3e8ad72ae9c9d7cc7376dce91daa372699c64a0fb00c50b7e66->leave($__internal_dde39c61de83b3e8ad72ae9c9d7cc7376dce91daa372699c64a0fb00c50b7e66_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f45c841399253f76474f9c211c00ba28d1c5e7c545c99272b8b959821ac9ae5 = $this->env->getExtension("native_profiler");
        $__internal_0f45c841399253f76474f9c211c00ba28d1c5e7c545c99272b8b959821ac9ae5->enter($__internal_0f45c841399253f76474f9c211c00ba28d1c5e7c545c99272b8b959821ac9ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
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
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["consultations"]) ? $context["consultations"] : $this->getContext($context, "consultations")));
        foreach ($context['_seq'] as $context["_key"] => $context["consultation"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consultation_show", array("id" => $this->getAttribute($context["consultation"], "id", array()))), "html", null, true);
            // line 23
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["consultation"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            if ($this->getAttribute($context["consultation"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["consultation"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["consultation"], "diagnostic", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["consultation"], "traitement", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["consultation"], "decision", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                            <a class=\"btn btn-secondary btn-sm\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consultation_show", array("id" => $this->getAttribute(            // line 31
$context["consultation"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">Voir</a>
                            <a class=\"btn btn-success btn-sm\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consultation_edit", array("id" => $this->getAttribute(            // line 33
$context["consultation"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">Modifier</a>

                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['consultation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("consultation_new");
        // line 44
        echo "\" role=\"button\">Ajouter une consultaiton</a>
    </ul>
</div>
";
        
        $__internal_0f45c841399253f76474f9c211c00ba28d1c5e7c545c99272b8b959821ac9ae5->leave($__internal_0f45c841399253f76474f9c211c00ba28d1c5e7c545c99272b8b959821ac9ae5_prof);

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
        return array (  121 => 44,  119 => 43,  113 => 39,  101 => 33,  100 => 32,  96 => 31,  95 => 30,  89 => 27,  85 => 26,  81 => 25,  75 => 24,  70 => 23,  68 => 22,  65 => 21,  61 => 20,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
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
/*                             { 'id': consultation.id }) }}" role="button">Voir</a>*/
/*                             <a class="btn btn-success btn-sm" href="{{ path('consultation_edit',*/
/*                             { 'id': consultation.id }) }}" role="button">Modifier</a>*/
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
