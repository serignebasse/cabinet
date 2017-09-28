<?php

/* patient/show.html.twig */
class __TwigTemplate_68ce0b4366ce9f490f990806de324f30221e87f3880e96b87c282331305379d0 extends Twig_Template
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
        $__internal_6597c92f079a3ada04f6f172a5a72a37ef67d981dc63f37cc8a54915fc06f688 = $this->env->getExtension("native_profiler");
        $__internal_6597c92f079a3ada04f6f172a5a72a37ef67d981dc63f37cc8a54915fc06f688->enter($__internal_6597c92f079a3ada04f6f172a5a72a37ef67d981dc63f37cc8a54915fc06f688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "patient/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6597c92f079a3ada04f6f172a5a72a37ef67d981dc63f37cc8a54915fc06f688->leave($__internal_6597c92f079a3ada04f6f172a5a72a37ef67d981dc63f37cc8a54915fc06f688_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_84d3a5e72aa3c575a29d66926681d0a717d3522406b45ffa0843d4f68244a909 = $this->env->getExtension("native_profiler");
        $__internal_84d3a5e72aa3c575a29d66926681d0a717d3522406b45ffa0843d4f68244a909->enter($__internal_84d3a5e72aa3c575a29d66926681d0a717d3522406b45ffa0843d4f68244a909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper\">
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "idpatient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nompatient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenompatient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "sexepatient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de naissance</th>
                <td>";
        // line 29
        if ($this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "datenaisspatient", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "datenaisspatient", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Addresset</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "addressepatient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Télèphone</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "telpatient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "agepatient", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patient_edit", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "idpatient", array()))), "html", null, true);
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
        
        $__internal_84d3a5e72aa3c575a29d66926681d0a717d3522406b45ffa0843d4f68244a909->leave($__internal_84d3a5e72aa3c575a29d66926681d0a717d3522406b45ffa0843d4f68244a909_prof);

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
/* <div class="content-wrapper">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Patient</h1>*/
/* */
/*     <table class="table table-responsive table-hover">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ patient.idpatient }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ patient.nompatient }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prenom</th>*/
/*                 <td>{{ patient.prenompatient }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Sexe</th>*/
/*                 <td>{{ patient.sexepatient }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Date de naissance</th>*/
/*                 <td>{% if patient.datenaisspatient %}{{ patient.datenaisspatient|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Addresset</th>*/
/*                 <td>{{ patient.addressepatient }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Télèphone</th>*/
/*                 <td>{{ patient.telpatient }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Age</th>*/
/*                 <td>{{ patient.agepatient }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/* */
/*             <a class="btn btn-success btn-sm" href="{{ path('patient_index')*/
/*             }}" role="button">Retour </a>*/
/* */
/*             <a class="btn btn-success btn-sm" href="{{ path('patient_edit', { 'id': patient.idpatient })*/
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
