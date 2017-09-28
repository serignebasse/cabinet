<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_af6d1455452015349cf5c3e3aab01f63a7e191ad320c2a94416aa795c44c9582 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_7c1912790e62d099ba978863f366cbd55ccc96d991a81cac6f976a2cdc3fab09 = $this->env->getExtension("native_profiler");
        $__internal_7c1912790e62d099ba978863f366cbd55ccc96d991a81cac6f976a2cdc3fab09->enter($__internal_7c1912790e62d099ba978863f366cbd55ccc96d991a81cac6f976a2cdc3fab09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c1912790e62d099ba978863f366cbd55ccc96d991a81cac6f976a2cdc3fab09->leave($__internal_7c1912790e62d099ba978863f366cbd55ccc96d991a81cac6f976a2cdc3fab09_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fdaa00518449c23a326b1c8fd0fcdd4d91e728ba02bb9b7913c971aab9c0a32a = $this->env->getExtension("native_profiler");
        $__internal_fdaa00518449c23a326b1c8fd0fcdd4d91e728ba02bb9b7913c971aab9c0a32a->enter($__internal_fdaa00518449c23a326b1c8fd0fcdd4d91e728ba02bb9b7913c971aab9c0a32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_fdaa00518449c23a326b1c8fd0fcdd4d91e728ba02bb9b7913c971aab9c0a32a->leave($__internal_fdaa00518449c23a326b1c8fd0fcdd4d91e728ba02bb9b7913c971aab9c0a32a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}*/
/* </p>*/
/* {% endblock %}*/
/* */
