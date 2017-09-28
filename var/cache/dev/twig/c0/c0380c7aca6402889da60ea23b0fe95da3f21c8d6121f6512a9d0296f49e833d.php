<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_55b76e28a62dd6f34541aea4ca71c5883a01b1f40a69eee8b61ff47486fcaf32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_85f80a91139c1a56ded6c5f67b5fb18b412844e1ed50ecc04eb66cca39ddc2e4 = $this->env->getExtension("native_profiler");
        $__internal_85f80a91139c1a56ded6c5f67b5fb18b412844e1ed50ecc04eb66cca39ddc2e4->enter($__internal_85f80a91139c1a56ded6c5f67b5fb18b412844e1ed50ecc04eb66cca39ddc2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85f80a91139c1a56ded6c5f67b5fb18b412844e1ed50ecc04eb66cca39ddc2e4->leave($__internal_85f80a91139c1a56ded6c5f67b5fb18b412844e1ed50ecc04eb66cca39ddc2e4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e13d3521106bfbec41f99008ca11b5afb13bd2474b5b4e567076313fbc56ba47 = $this->env->getExtension("native_profiler");
        $__internal_e13d3521106bfbec41f99008ca11b5afb13bd2474b5b4e567076313fbc56ba47->enter($__internal_e13d3521106bfbec41f99008ca11b5afb13bd2474b5b4e567076313fbc56ba47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e13d3521106bfbec41f99008ca11b5afb13bd2474b5b4e567076313fbc56ba47->leave($__internal_e13d3521106bfbec41f99008ca11b5afb13bd2474b5b4e567076313fbc56ba47_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
