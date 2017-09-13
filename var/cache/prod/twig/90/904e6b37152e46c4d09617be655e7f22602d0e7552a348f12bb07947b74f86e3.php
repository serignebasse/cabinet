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
        $__internal_9d9658eed77eff0ce0787dbc16054acbf5f4f578fa835796d2fc2c1f3c0b58ec = $this->env->getExtension("native_profiler");
        $__internal_9d9658eed77eff0ce0787dbc16054acbf5f4f578fa835796d2fc2c1f3c0b58ec->enter($__internal_9d9658eed77eff0ce0787dbc16054acbf5f4f578fa835796d2fc2c1f3c0b58ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "patient/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d9658eed77eff0ce0787dbc16054acbf5f4f578fa835796d2fc2c1f3c0b58ec->leave($__internal_9d9658eed77eff0ce0787dbc16054acbf5f4f578fa835796d2fc2c1f3c0b58ec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_530a6b942ab89f3050d943bc1fb52a42100f3a7bc6a84086af0ab3ede8ee647d = $this->env->getExtension("native_profiler");
        $__internal_530a6b942ab89f3050d943bc1fb52a42100f3a7bc6a84086af0ab3ede8ee647d->enter($__internal_530a6b942ab89f3050d943bc1fb52a42100f3a7bc6a84086af0ab3ede8ee647d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <h1>Patient</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "idpatient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nompatient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenompatient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "sexepatient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de naissance</th>
                <td>";
        // line 27
        if ($this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "datenaisspatient", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "datenaisspatient", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Addressepatient</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "addressepatient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telpatient</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "telpatient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agepatient</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "agepatient", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("patient_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patient_edit", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "idpatient", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_530a6b942ab89f3050d943bc1fb52a42100f3a7bc6a84086af0ab3ede8ee647d->leave($__internal_530a6b942ab89f3050d943bc1fb52a42100f3a7bc6a84086af0ab3ede8ee647d_prof);

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
        return array (  129 => 54,  124 => 52,  118 => 49,  112 => 46,  102 => 39,  95 => 35,  88 => 31,  79 => 27,  72 => 23,  65 => 19,  58 => 15,  51 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/*     <h1>Patient</h1>*/
/* */
/*     <table>*/
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
/*                 <th>Addressepatient</th>*/
/*                 <td>{{ patient.addressepatient }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Telpatient</th>*/
/*                 <td>{{ patient.telpatient }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Agepatient</th>*/
/*                 <td>{{ patient.agepatient }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('patient_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('patient_edit', { 'id': patient.idpatient }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
