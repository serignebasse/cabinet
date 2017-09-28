<?php

/* :secretaire:index.html.twig */
class __TwigTemplate_bdb64aee6426c8c0cc60da767ff16471ca3ad2903aeecf9a9211a716a9040665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":secretaire:index.html.twig", 1);
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
        $__internal_bc20a6f99a8678fbf741fea6316a7f96786c21adc6e5093d3e72bb1388f03341 = $this->env->getExtension("native_profiler");
        $__internal_bc20a6f99a8678fbf741fea6316a7f96786c21adc6e5093d3e72bb1388f03341->enter($__internal_bc20a6f99a8678fbf741fea6316a7f96786c21adc6e5093d3e72bb1388f03341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":secretaire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc20a6f99a8678fbf741fea6316a7f96786c21adc6e5093d3e72bb1388f03341->leave($__internal_bc20a6f99a8678fbf741fea6316a7f96786c21adc6e5093d3e72bb1388f03341_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_823d49c6d84e909e95549b2b5784dfc344365cd15fb0bb49f80989366afaed45 = $this->env->getExtension("native_profiler");
        $__internal_823d49c6d84e909e95549b2b5784dfc344365cd15fb0bb49f80989366afaed45->enter($__internal_823d49c6d84e909e95549b2b5784dfc344365cd15fb0bb49f80989366afaed45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <h1>Liste de secretaire</h1>

    <table class=\"table table-sm table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Sexe</th>
                <th>Addresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["secretaires"]) ? $context["secretaires"] : $this->getContext($context, "secretaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["secretaire"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("secretaire_show", array("id" => $this->getAttribute($context["secretaire"], "idsecretaire", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["secretaire"], "idsecretaire", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["secretaire"], "nomsecretaire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["secretaire"], "prenomsecretaire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["secretaire"], "telsecretaire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["secretaire"], "emailsecretaire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["secretaire"], "sexesecretaire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["secretaire"], "addressesecretaire", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <a class=\"btn btn-secondary btn-sm\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("secretaire_show", array("id" => $this->getAttribute(            // line 34
$context["secretaire"], "idsecretaire", array()))), "html", null, true);
            echo "\" role=\"button\">voir</a>

                        <a class=\"btn btn-success btn-sm\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("secretaire_edit", array("id" => $this->getAttribute(            // line 37
$context["secretaire"], "idsecretaire", array()))), "html", null, true);
            echo "\" role=\"button\">modifier</a>

                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secretaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <a class=\"btn btn-success btn-sm\" href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("secretaire_new");
        echo "\" role=\"button\">Ajouter sécrétaire</a>
    </ul>
</div>
";
        
        $__internal_823d49c6d84e909e95549b2b5784dfc344365cd15fb0bb49f80989366afaed45->leave($__internal_823d49c6d84e909e95549b2b5784dfc344365cd15fb0bb49f80989366afaed45_prof);

    }

    public function getTemplateName()
    {
        return ":secretaire:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 47,  121 => 43,  109 => 37,  108 => 36,  103 => 34,  102 => 33,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  70 => 24,  67 => 23,  63 => 22,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/*     <h1>Liste de secretaire</h1>*/
/* */
/*     <table class="table table-sm table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Prenom</th>*/
/*                 <th>Telephone</th>*/
/*                 <th>Email</th>*/
/*                 <th>Sexe</th>*/
/*                 <th>Addresse</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for secretaire in secretaires %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('secretaire_show', { 'id': secretaire.idsecretaire }) }}">{{ secretaire.idsecretaire }}</a></td>*/
/*                 <td>{{ secretaire.nomsecretaire }}</td>*/
/*                 <td>{{ secretaire.prenomsecretaire }}</td>*/
/*                 <td>{{ secretaire.telsecretaire }}</td>*/
/*                 <td>{{ secretaire.emailsecretaire }}</td>*/
/*                 <td>{{ secretaire.sexesecretaire }}</td>*/
/*                 <td>{{ secretaire.addressesecretaire }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <a class="btn btn-secondary btn-sm" href="{{ path('secretaire_show',*/
/*                         { 'id': secretaire.idsecretaire }) }}" role="button">voir</a>*/
/* */
/*                         <a class="btn btn-success btn-sm" href="{{ path('secretaire_edit',*/
/*                         { 'id': secretaire.idsecretaire }) }}" role="button">modifier</a>*/
/* */
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <a class="btn btn-success btn-sm" href="{{ path('secretaire_new') }}" role="button">Ajouter sécrétaire</a>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
