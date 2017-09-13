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
        $__internal_d3e4420cf2ff75c097b580085b811fc910329d85b10ef9de84bb8f617c5f0093 = $this->env->getExtension("native_profiler");
        $__internal_d3e4420cf2ff75c097b580085b811fc910329d85b10ef9de84bb8f617c5f0093->enter($__internal_d3e4420cf2ff75c097b580085b811fc910329d85b10ef9de84bb8f617c5f0093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "patient/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3e4420cf2ff75c097b580085b811fc910329d85b10ef9de84bb8f617c5f0093->leave($__internal_d3e4420cf2ff75c097b580085b811fc910329d85b10ef9de84bb8f617c5f0093_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a534546aadf205bc2036db1132130e1a2abb484dbd4df00cc12a55ba238dae7 = $this->env->getExtension("native_profiler");
        $__internal_2a534546aadf205bc2036db1132130e1a2abb484dbd4df00cc12a55ba238dae7->enter($__internal_2a534546aadf205bc2036db1132130e1a2abb484dbd4df00cc12a55ba238dae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Patient</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "idpatient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nompatient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenompatient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "sexepatient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de naissance</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "datenaisspatient", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "datenaisspatient", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Addresse</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "addressepatient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Télèphone</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "telpatient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "agepatient", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("patient_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patient_edit", array("id" => $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "idpatient", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2a534546aadf205bc2036db1132130e1a2abb484dbd4df00cc12a55ba238dae7->leave($__internal_2a534546aadf205bc2036db1132130e1a2abb484dbd4df00cc12a55ba238dae7_prof);

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
        return array (  126 => 53,  121 => 51,  115 => 48,  109 => 45,  99 => 38,  92 => 34,  85 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
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
/*                 <th>Addresse</th>*/
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
