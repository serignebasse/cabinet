<?php

/* @Sama/Default/listePatient.html.twig */
class __TwigTemplate_5f3dcd434e606c9db778325846cdb4ae56cf67e8620f70a5c2c44f1e623e607c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Sama/Default/listePatient.html.twig", 1);
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
        $__internal_9d6173da20c38d71f375353ad8018326478fa24e10ead0985e7fb4dad63635c1 = $this->env->getExtension("native_profiler");
        $__internal_9d6173da20c38d71f375353ad8018326478fa24e10ead0985e7fb4dad63635c1->enter($__internal_9d6173da20c38d71f375353ad8018326478fa24e10ead0985e7fb4dad63635c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Sama/Default/listePatient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d6173da20c38d71f375353ad8018326478fa24e10ead0985e7fb4dad63635c1->leave($__internal_9d6173da20c38d71f375353ad8018326478fa24e10ead0985e7fb4dad63635c1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c84fc4d6c37576da509be6a693ffd2f0d88941d99d16f88ed8198010c4eb4438 = $this->env->getExtension("native_profiler");
        $__internal_c84fc4d6c37576da509be6a693ffd2f0d88941d99d16f88ed8198010c4eb4438->enter($__internal_c84fc4d6c37576da509be6a693ffd2f0d88941d99d16f88ed8198010c4eb4438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["patients"]) ? $context["patients"] : $this->getContext($context, "patients")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["Patient"]) {
            // line 5
            echo "    <tr>
        <td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["Patient"], "nomPatient", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["Patient"], "prenomPatient", array()), "html", null, true);
            echo "</td>

    </tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Patient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo " ";
        
        $__internal_c84fc4d6c37576da509be6a693ffd2f0d88941d99d16f88ed8198010c4eb4438->leave($__internal_c84fc4d6c37576da509be6a693ffd2f0d88941d99d16f88ed8198010c4eb4438_prof);

    }

    public function getTemplateName()
    {
        return "@Sama/Default/listePatient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  52 => 7,  48 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/*  {% block body %}*/
/* {% for Patient in patients %}*/
/*     <tr>*/
/*         <td>{{ Patient.nomPatient }}</td>*/
/*         <td>{{ Patient.prenomPatient }}</td>*/
/* */
/*     </tr>*/
/* {% else %}*/
/* {% endfor %}*/
/*  {% endblock %}*/
