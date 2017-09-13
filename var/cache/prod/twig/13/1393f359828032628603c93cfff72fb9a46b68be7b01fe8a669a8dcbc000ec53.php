<?php

/* patient/index.html.twig */
class __TwigTemplate_d600e29b4e2e90ee1625d8e0f0d63418ce6e72b051f260bfbe1632ef5a575792 extends Twig_Template
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
        $__internal_1b0cb31b2391584a31765a3fd1c7242cd6a9a61fc67c1f8c234c418d07065d20 = $this->env->getExtension("native_profiler");
        $__internal_1b0cb31b2391584a31765a3fd1c7242cd6a9a61fc67c1f8c234c418d07065d20->enter($__internal_1b0cb31b2391584a31765a3fd1c7242cd6a9a61fc67c1f8c234c418d07065d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "patient/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b0cb31b2391584a31765a3fd1c7242cd6a9a61fc67c1f8c234c418d07065d20->leave($__internal_1b0cb31b2391584a31765a3fd1c7242cd6a9a61fc67c1f8c234c418d07065d20_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e62329b36612ad7ed5bfedfe933f3119eaa1ac317913c8a60f88568cb80ec82 = $this->env->getExtension("native_profiler");
        $__internal_5e62329b36612ad7ed5bfedfe933f3119eaa1ac317913c8a60f88568cb80ec82->enter($__internal_5e62329b36612ad7ed5bfedfe933f3119eaa1ac317913c8a60f88568cb80ec82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <h1>Liste des patients </h1>

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
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["patients"]) ? $context["patients"] : $this->getContext($context, "patients")));
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patient_show", array("id" => $this->getAttribute($context["patient"], "idpatient", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "idpatient", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "nompatient", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "prenompatient", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "sexepatient", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["patient"], "datenaisspatient", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["patient"], "datenaisspatient", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "addressepatient", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "telpatient", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "agepatient", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patient_show", array("id" => $this->getAttribute($context["patient"], "idpatient", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 38
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
        // line 44
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("patient_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_5e62329b36612ad7ed5bfedfe933f3119eaa1ac317913c8a60f88568cb80ec82->leave($__internal_5e62329b36612ad7ed5bfedfe933f3119eaa1ac317913c8a60f88568cb80ec82_prof);

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
        return array (  133 => 49,  126 => 44,  114 => 38,  108 => 35,  101 => 31,  97 => 30,  93 => 29,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  69 => 24,  66 => 23,  62 => 22,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
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
