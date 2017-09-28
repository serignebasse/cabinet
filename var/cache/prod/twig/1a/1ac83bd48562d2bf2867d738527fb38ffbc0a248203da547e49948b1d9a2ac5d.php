<?php

/* rendezvous/index.html.twig */
class __TwigTemplate_ef6181f2980297244d51a1717c607e82a52893afd3fd9fa450b7198d3f7c8a9b extends Twig_Template
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
        $__internal_25eed3c680adb20da49f5bdc22b54ef3010a4a53c278b637ebfdd84f10ee4026 = $this->env->getExtension("native_profiler");
        $__internal_25eed3c680adb20da49f5bdc22b54ef3010a4a53c278b637ebfdd84f10ee4026->enter($__internal_25eed3c680adb20da49f5bdc22b54ef3010a4a53c278b637ebfdd84f10ee4026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rendezvous/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25eed3c680adb20da49f5bdc22b54ef3010a4a53c278b637ebfdd84f10ee4026->leave($__internal_25eed3c680adb20da49f5bdc22b54ef3010a4a53c278b637ebfdd84f10ee4026_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_faa7c1846916b29e8569768416e4fa4ff4ab6e89ac6e88fb3959096ed74631a5 = $this->env->getExtension("native_profiler");
        $__internal_faa7c1846916b29e8569768416e4fa4ff4ab6e89ac6e88fb3959096ed74631a5->enter($__internal_faa7c1846916b29e8569768416e4fa4ff4ab6e89ac6e88fb3959096ed74631a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
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
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rendezvouses"]) ? $context["rendezvouses"] : $this->getContext($context, "rendezvouses")));
        foreach ($context['_seq'] as $context["_key"] => $context["rendezvous"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rendezvous_show", array("id" => $this->getAttribute($context["rendezvous"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rendezvous"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            if ($this->getAttribute($context["rendezvous"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rendezvous"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["rendezvous"], "frequence", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                            <a class=\"btn btn-secondary btn-sm\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rendezvous_show", array("id" => $this->getAttribute(            // line 26
$context["rendezvous"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">Voir</a>

                            <a class=\"btn btn-success btn-sm\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rendezvous_edit", array("id" => $this->getAttribute(            // line 29
$context["rendezvous"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">Modifier</a>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rendezvous'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

    <ul>
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("rendezvous_new");
        echo "\"
               role=\"button\">Ajouter un rendez-vous</a>
    </ul>
</div>
";
        
        $__internal_faa7c1846916b29e8569768416e4fa4ff4ab6e89ac6e88fb3959096ed74631a5->leave($__internal_faa7c1846916b29e8569768416e4fa4ff4ab6e89ac6e88fb3959096ed74631a5_prof);

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
        return array (  108 => 38,  102 => 34,  91 => 29,  90 => 28,  85 => 26,  84 => 25,  78 => 22,  72 => 21,  66 => 20,  63 => 19,  59 => 18,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper">*/
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
/*                 <td>{% if rendezvous.date %}{{ rendezvous.date|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ rendezvous.frequence }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                             <a class="btn btn-secondary btn-sm" href="{{ path('rendezvous_show',*/
/*                             { 'id': rendezvous.id }) }}" role="button">Voir</a>*/
/* */
/*                             <a class="btn btn-success btn-sm" href="{{ path('rendezvous_edit',*/
/*                             { 'id': rendezvous.id }) }}" role="button">Modifier</a>*/
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
