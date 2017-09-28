<?php

/* patient/show.html.twig */
class __TwigTemplate_3aa50c8f24bd27c0a7352101af60cfa6785b5b77c3e3eec373a416b06be22181 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "patient/show.html.twig", 1);
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
        $__internal_5cf3982bfcd729fd228b09eca938557025970c8e28d0a0fa19499ba975caa018 = $this->env->getExtension("native_profiler");
        $__internal_5cf3982bfcd729fd228b09eca938557025970c8e28d0a0fa19499ba975caa018->enter($__internal_5cf3982bfcd729fd228b09eca938557025970c8e28d0a0fa19499ba975caa018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "patient/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cf3982bfcd729fd228b09eca938557025970c8e28d0a0fa19499ba975caa018->leave($__internal_5cf3982bfcd729fd228b09eca938557025970c8e28d0a0fa19499ba975caa018_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca188cf25a26c1c2fcc31fe93f213c2cdf00ed4702d3c9b8f7ea463813ee700c = $this->env->getExtension("native_profiler");
        $__internal_ca188cf25a26c1c2fcc31fe93f213c2cdf00ed4702d3c9b8f7ea463813ee700c->enter($__internal_ca188cf25a26c1c2fcc31fe93f213c2cdf00ed4702d3c9b8f7ea463813ee700c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper \">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Patient</h1>

    <table class=\"table table-responsive table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "sexe", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de naissance</th>
                <td>";
        // line 29
        if ($this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "datenaissance", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "datenaissance", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Addresse</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "addresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Télèphone</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "age", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>

            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("patient_index");
        // line 49
        echo "\" role=\"button\">Retour </a>

            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patient_edit", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "id", array()))), "html", null, true);
        // line 52
        echo "\" role=\"button\">Modifier</a>
    </ul>
    <ul>
            ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-outline-danger btn-sm\" type=\"submit\" value=\"Supprimer\">
            ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </ul>
</div>
";
        
        $__internal_ca188cf25a26c1c2fcc31fe93f213c2cdf00ed4702d3c9b8f7ea463813ee700c->leave($__internal_ca188cf25a26c1c2fcc31fe93f213c2cdf00ed4702d3c9b8f7ea463813ee700c_prof);

    }

    public function getTemplateName()
    {
        return "patient/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 57,  128 => 55,  123 => 52,  121 => 51,  117 => 49,  115 => 48,  105 => 41,  98 => 37,  91 => 33,  82 => 29,  75 => 25,  68 => 21,  61 => 17,  54 => 13,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper ">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Patient</h1>*/
/* */
/*     <table class="table table-responsive table-hover">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ patient.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ patient.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prenom</th>*/
/*                 <td>{{ patient.prenom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Sexe</th>*/
/*                 <td>{{ patient.sexe }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Date de naissance</th>*/
/*                 <td>{% if patient.datenaissance %}{{ patient.datenaissance|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Addresse</th>*/
/*                 <td>{{ patient.addresse }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Télèphone</th>*/
/*                 <td>{{ patient.telephone }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Age</th>*/
/*                 <td>{{ patient.age }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/* */
/*             <a class="btn btn-success btn-sm" href="{{ path('patient_index')*/
/*             }}" role="button">Retour </a>*/
/* */
/*             <a class="btn btn-success btn-sm" href="{{ path('patient_edit', { 'id': patient.id })*/
/*             }}" role="button">Modifier</a>*/
/*     </ul>*/
/*     <ul>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input class="btn btn-outline-danger btn-sm" type="submit" value="Supprimer">*/
/*             {{ form_end(delete_form) }}*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
