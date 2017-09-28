<?php

/* rendezvous/show.html.twig */
class __TwigTemplate_8cb51783fca8a2b904f28de0b5737f05c82297ba98625515fc05784d797b1d82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rendezvous/show.html.twig", 1);
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
        $__internal_fa09058baa3d08cd624de22296912cc97d3b35c731a8bea0b729d79269bf6c9b = $this->env->getExtension("native_profiler");
        $__internal_fa09058baa3d08cd624de22296912cc97d3b35c731a8bea0b729d79269bf6c9b->enter($__internal_fa09058baa3d08cd624de22296912cc97d3b35c731a8bea0b729d79269bf6c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rendezvous/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa09058baa3d08cd624de22296912cc97d3b35c731a8bea0b729d79269bf6c9b->leave($__internal_fa09058baa3d08cd624de22296912cc97d3b35c731a8bea0b729d79269bf6c9b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9577503afca12f624816c7d6f214e4e7c1913a41acb93b33e1654f82dd186313 = $this->env->getExtension("native_profiler");
        $__internal_9577503afca12f624816c7d6f214e4e7c1913a41acb93b33e1654f82dd186313->enter($__internal_9577503afca12f624816c7d6f214e4e7c1913a41acb93b33e1654f82dd186313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Rendez-vous</h1>

    <table class=\"table table-responsive table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rendezvous"]) ? $context["rendezvous"] : $this->getContext($context, "rendezvous")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date du rendez-vous</th>
                <td>";
        // line 17
        if ($this->getAttribute((isset($context["rendezvous"]) ? $context["rendezvous"] : $this->getContext($context, "rendezvous")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["rendezvous"]) ? $context["rendezvous"] : $this->getContext($context, "rendezvous")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fréquence</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rendezvous"]) ? $context["rendezvous"] : $this->getContext($context, "rendezvous")), "frequence", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>

            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("rendezvous_index");
        echo "\"
            role=\"button\">Retour</a>

            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rendezvous_edit", array("id" => $this->getAttribute((isset($context["rendezvous"]) ? $context["rendezvous"] : $this->getContext($context, "rendezvous")), "id", array()))), "html", null, true);
        // line 32
        echo "\" role=\"button\">Modifier</a>
    </ul>
    <ul>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input  class=\"btn btn-outline-danger btn-sm\" type=\"submit\" value=\"Supprimer\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

    </ul>
</div>
";
        
        $__internal_9577503afca12f624816c7d6f214e4e7c1913a41acb93b33e1654f82dd186313->leave($__internal_9577503afca12f624816c7d6f214e4e7c1913a41acb93b33e1654f82dd186313_prof);

    }

    public function getTemplateName()
    {
        return "rendezvous/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  93 => 35,  88 => 32,  86 => 31,  80 => 28,  70 => 21,  61 => 17,  54 => 13,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Rendez-vous</h1>*/
/* */
/*     <table class="table table-responsive table-hover">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ rendezvous.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Date du rendez-vous</th>*/
/*                 <td>{% if rendezvous.date %}{{ rendezvous.date|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fréquence</th>*/
/*                 <td>{{ rendezvous.frequence }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/* */
/*             <a class="btn btn-success btn-sm" href="{{ path('rendezvous_index') }}"*/
/*             role="button">Retour</a>*/
/* */
/*             <a class="btn btn-success btn-sm" href="{{ path('rendezvous_edit', { 'id': rendezvous.id })*/
/*             }}" role="button">Modifier</a>*/
/*     </ul>*/
/*     <ul>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input  class="btn btn-outline-danger btn-sm" type="submit" value="Supprimer">*/
/*             {{ form_end(delete_form) }}*/
/* */
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
