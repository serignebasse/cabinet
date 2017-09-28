<?php

/* medicament/index.html.twig */
class __TwigTemplate_51279c53f5453d1dce01a2900bc77510c704c12b3aad8668f4efe35ccc8d1b63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "medicament/index.html.twig", 1);
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
        $__internal_cd4e085388d877ff2b38b1e61950f0a820c9bf2f67523a243154b4c894e7be4b = $this->env->getExtension("native_profiler");
        $__internal_cd4e085388d877ff2b38b1e61950f0a820c9bf2f67523a243154b4c894e7be4b->enter($__internal_cd4e085388d877ff2b38b1e61950f0a820c9bf2f67523a243154b4c894e7be4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "medicament/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd4e085388d877ff2b38b1e61950f0a820c9bf2f67523a243154b4c894e7be4b->leave($__internal_cd4e085388d877ff2b38b1e61950f0a820c9bf2f67523a243154b4c894e7be4b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a902f01913d01d1a64e746984b39d53e514c5e2cf3aa160cfdf162f52d9ad6e8 = $this->env->getExtension("native_profiler");
        $__internal_a902f01913d01d1a64e746984b39d53e514c5e2cf3aa160cfdf162f52d9ad6e8->enter($__internal_a902f01913d01d1a64e746984b39d53e514c5e2cf3aa160cfdf162f52d9ad6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <h1>Liste des medicaments</h1>

    <table class=\"table table-sm table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Quantite</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medicaments"]) ? $context["medicaments"] : $this->getContext($context, "medicaments")));
        foreach ($context['_seq'] as $context["_key"] => $context["medicament"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medicament_show", array("id" => $this->getAttribute($context["medicament"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["medicament"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["medicament"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["medicament"], "quantite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["medicament"], "type", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>

                            <a class=\"btn btn-secondary btn-sm\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medicament_show", array("id" => $this->getAttribute(            // line 29
$context["medicament"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">voir</a>
                            <a class=\"btn btn-success btn-sm\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medicament_edit", array("id" => $this->getAttribute(            // line 31
$context["medicament"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">modifier</a>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medicament'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>

    <ul>
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("medicament_new");
        echo "\" role=\"button\">Ajouter Médicament</a>
    </ul>
</div>

";
        
        $__internal_a902f01913d01d1a64e746984b39d53e514c5e2cf3aa160cfdf162f52d9ad6e8->leave($__internal_a902f01913d01d1a64e746984b39d53e514c5e2cf3aa160cfdf162f52d9ad6e8_prof);

    }

    public function getTemplateName()
    {
        return "medicament/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 40,  105 => 36,  94 => 31,  93 => 30,  89 => 29,  88 => 28,  81 => 24,  77 => 23,  73 => 22,  67 => 21,  64 => 20,  60 => 19,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/*     <h1>Liste des medicaments</h1>*/
/* */
/*     <table class="table table-sm table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Quantite</th>*/
/*                 <th>Type</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for medicament in medicaments %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('medicament_show', { 'id': medicament.id }) }}">{{ medicament.id }}</a></td>*/
/*                 <td>{{ medicament.nom }}</td>*/
/*                 <td>{{ medicament.quantite }}</td>*/
/*                 <td>{{ medicament.type }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/* */
/*                             <a class="btn btn-secondary btn-sm" href="{{ path('medicament_show',*/
/*                             { 'id': medicament.id }) }}" role="button">voir</a>*/
/*                             <a class="btn btn-success btn-sm" href="{{ path('medicament_edit',*/
/*                             { 'id': medicament.id }) }}" role="button">modifier</a>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*             <a class="btn btn-success btn-sm" href="{{ path('medicament_new') }}" role="button">Ajouter Médicament</a>*/
/*     </ul>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
