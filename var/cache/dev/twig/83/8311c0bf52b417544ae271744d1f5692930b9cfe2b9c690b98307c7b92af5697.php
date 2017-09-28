<?php

/* :ordonnance:index.html.twig */
class __TwigTemplate_99c5eda50a2b68322a4e2fb28e704f6629e93f1bc12cab1c532d9cf0dee456a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":ordonnance:index.html.twig", 1);
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
        $__internal_cf48b8e847193e9a625a250ddd583833778cccc0c250c45d1a4d92009c73dab0 = $this->env->getExtension("native_profiler");
        $__internal_cf48b8e847193e9a625a250ddd583833778cccc0c250c45d1a4d92009c73dab0->enter($__internal_cf48b8e847193e9a625a250ddd583833778cccc0c250c45d1a4d92009c73dab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ordonnance:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf48b8e847193e9a625a250ddd583833778cccc0c250c45d1a4d92009c73dab0->leave($__internal_cf48b8e847193e9a625a250ddd583833778cccc0c250c45d1a4d92009c73dab0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_51698a874870be4177e1bb31e6b9cce8b44b1d573d654b8211ab03c1c70d016d = $this->env->getExtension("native_profiler");
        $__internal_51698a874870be4177e1bb31e6b9cce8b44b1d573d654b8211ab03c1c70d016d->enter($__internal_51698a874870be4177e1bb31e6b9cce8b44b1d573d654b8211ab03c1c70d016d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Liste des ordonnances</h1>

    <table  class=\"table table-sm table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ordonnances"]) ? $context["ordonnances"] : $this->getContext($context, "ordonnances")));
        foreach ($context['_seq'] as $context["_key"] => $context["ordonnance"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordonnance_show", array("id" => $this->getAttribute($context["ordonnance"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ordonnance"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            if ($this->getAttribute($context["ordonnance"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ordonnance"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                            <a class=\"btn btn-secondary btn-sm\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordonnance_show", array("id" => $this->getAttribute(            // line 25
$context["ordonnance"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">voir</a>
                            <a class=\"btn btn-success btn-sm\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordonnance_edit", array("id" => $this->getAttribute(            // line 27
$context["ordonnance"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">modifier</a>

                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ordonnance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("ordonnance_new");
        echo "\" role=\"button\">Nouveau ordonnance</a>
    </ul>
</div>
";
        
        $__internal_51698a874870be4177e1bb31e6b9cce8b44b1d573d654b8211ab03c1c70d016d->leave($__internal_51698a874870be4177e1bb31e6b9cce8b44b1d573d654b8211ab03c1c70d016d_prof);

    }

    public function getTemplateName()
    {
        return ":ordonnance:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 37,  98 => 33,  86 => 27,  85 => 26,  81 => 25,  80 => 24,  72 => 21,  66 => 20,  63 => 19,  59 => 18,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Liste des ordonnances</h1>*/
/* */
/*     <table  class="table table-sm table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Date</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for ordonnance in ordonnances %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('ordonnance_show', { 'id': ordonnance.id }) }}">{{ ordonnance.id}}</a></td>*/
/*                 <td>{% if ordonnance.date %}{{ ordonnance.date|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                             <a class="btn btn-secondary btn-sm" href="{{ path('ordonnance_show',*/
/*                             { 'id': ordonnance.id }) }}" role="button">voir</a>*/
/*                             <a class="btn btn-success btn-sm" href="{{ path('ordonnance_edit',*/
/*                             { 'id': ordonnance.id }) }}" role="button">modifier</a>*/
/* */
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*             <a class="btn btn-success btn-sm" href="{{ path('ordonnance_new') }}" role="button">Nouveau ordonnance</a>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
