<?php

/* SamaBundle:Default:listePatient.html.twig */
class __TwigTemplate_0c1ffb1228b844f68bd8db62c2ca220e66c0e961a7524f7ded2ca9f7b5b9e9e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SamaBundle:Default:listePatient.html.twig", 1);
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
        $__internal_0c8ca50611c28f9d603eb5a6924c11207836fd49a2068e7c43b513c97205d15b = $this->env->getExtension("native_profiler");
        $__internal_0c8ca50611c28f9d603eb5a6924c11207836fd49a2068e7c43b513c97205d15b->enter($__internal_0c8ca50611c28f9d603eb5a6924c11207836fd49a2068e7c43b513c97205d15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SamaBundle:Default:listePatient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c8ca50611c28f9d603eb5a6924c11207836fd49a2068e7c43b513c97205d15b->leave($__internal_0c8ca50611c28f9d603eb5a6924c11207836fd49a2068e7c43b513c97205d15b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e4e38d031a45bc7c0e796c98ba28f78b943db6d8fcb8987ce22084c46cb811b = $this->env->getExtension("native_profiler");
        $__internal_0e4e38d031a45bc7c0e796c98ba28f78b943db6d8fcb8987ce22084c46cb811b->enter($__internal_0e4e38d031a45bc7c0e796c98ba28f78b943db6d8fcb8987ce22084c46cb811b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0e4e38d031a45bc7c0e796c98ba28f78b943db6d8fcb8987ce22084c46cb811b->leave($__internal_0e4e38d031a45bc7c0e796c98ba28f78b943db6d8fcb8987ce22084c46cb811b_prof);

    }

    public function getTemplateName()
    {
        return "SamaBundle:Default:listePatient.html.twig";
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
