<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_a02b15bfc6d8b251875bb63ad6860ff570d71d2131cc09cc4c74a5575edb1f95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7dc4fa26ce5d2ab7fa3d52fd1ac57274dae4c2ac811c71949eb87f190981df9b = $this->env->getExtension("native_profiler");
        $__internal_7dc4fa26ce5d2ab7fa3d52fd1ac57274dae4c2ac811c71949eb87f190981df9b->enter($__internal_7dc4fa26ce5d2ab7fa3d52fd1ac57274dae4c2ac811c71949eb87f190981df9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dc4fa26ce5d2ab7fa3d52fd1ac57274dae4c2ac811c71949eb87f190981df9b->leave($__internal_7dc4fa26ce5d2ab7fa3d52fd1ac57274dae4c2ac811c71949eb87f190981df9b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dbd7ac0f7075e34ddce93169f2ff91a0d4af7ad5faa344ecc0f756ebf6061d11 = $this->env->getExtension("native_profiler");
        $__internal_dbd7ac0f7075e34ddce93169f2ff91a0d4af7ad5faa344ecc0f756ebf6061d11->enter($__internal_dbd7ac0f7075e34ddce93169f2ff91a0d4af7ad5faa344ecc0f756ebf6061d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_dbd7ac0f7075e34ddce93169f2ff91a0d4af7ad5faa344ecc0f756ebf6061d11->leave($__internal_dbd7ac0f7075e34ddce93169f2ff91a0d4af7ad5faa344ecc0f756ebf6061d11_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
