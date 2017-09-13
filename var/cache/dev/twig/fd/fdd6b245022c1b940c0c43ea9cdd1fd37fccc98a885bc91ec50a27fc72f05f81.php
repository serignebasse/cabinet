<?php

/* patient/index.html.twig */
class __TwigTemplate_3f0d26b31079561ef810bf552b53bac5a8faa3ed8281c3fd79a9e5f966431129 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "patient/index.html.twig", 1);
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
        $__internal_c0cd291e5012f36d5bfb48c32886b091700b3fdbb728ba57357e9f1af38819a7 = $this->env->getExtension("native_profiler");
        $__internal_c0cd291e5012f36d5bfb48c32886b091700b3fdbb728ba57357e9f1af38819a7->enter($__internal_c0cd291e5012f36d5bfb48c32886b091700b3fdbb728ba57357e9f1af38819a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "patient/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0cd291e5012f36d5bfb48c32886b091700b3fdbb728ba57357e9f1af38819a7->leave($__internal_c0cd291e5012f36d5bfb48c32886b091700b3fdbb728ba57357e9f1af38819a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbab940516c0f441ca99c2738b8597e7f26d003e2b4fe642a4f6387123dfdc47 = $this->env->getExtension("native_profiler");
        $__internal_fbab940516c0f441ca99c2738b8597e7f26d003e2b4fe642a4f6387123dfdc47->enter($__internal_fbab940516c0f441ca99c2738b8597e7f26d003e2b4fe642a4f6387123dfdc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des patients </h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Sexe</th>
                <th>Date de naissance</th>
                <th>Addresse</th>
                <th>Télèphone</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["patients"]) ? $context["patients"] : $this->getContext($context, "patients")));
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patient_show", array("id" => $this->getAttribute($context["patient"], "idpatient", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "idpatient", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "nompatient", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "prenompatient", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "sexepatient", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["patient"], "datenaisspatient", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["patient"], "datenaisspatient", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "addressepatient", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "telpatient", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "agepatient", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patient_show", array("id" => $this->getAttribute($context["patient"], "idpatient", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patient_edit", array("id" => $this->getAttribute($context["patient"], "idpatient", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("patient_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_fbab940516c0f441ca99c2738b8597e7f26d003e2b4fe642a4f6387123dfdc47->leave($__internal_fbab940516c0f441ca99c2738b8597e7f26d003e2b4fe642a4f6387123dfdc47_prof);

    }

    public function getTemplateName()
    {
        return "patient/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 48,  123 => 43,  111 => 37,  105 => 34,  98 => 30,  94 => 29,  90 => 28,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Liste des patients </h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Prenom</th>*/
/*                 <th>Sexe</th>*/
/*                 <th>Date de naissance</th>*/
/*                 <th>Addresse</th>*/
/*                 <th>Télèphone</th>*/
/*                 <th>Age</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for patient in patients %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('patient_show', { 'id': patient.idpatient }) }}">{{ patient.idpatient }}</a></td>*/
/*                 <td>{{ patient.nompatient }}</td>*/
/*                 <td>{{ patient.prenompatient }}</td>*/
/*                 <td>{{ patient.sexepatient }}</td>*/
/*                 <td>{% if patient.datenaisspatient %}{{ patient.datenaisspatient|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ patient.addressepatient }}</td>*/
/*                 <td>{{ patient.telpatient }}</td>*/
/*                 <td>{{ patient.agepatient }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('patient_show', { 'id': patient.idpatient }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('patient_edit', { 'id': patient.idpatient }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('patient_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
