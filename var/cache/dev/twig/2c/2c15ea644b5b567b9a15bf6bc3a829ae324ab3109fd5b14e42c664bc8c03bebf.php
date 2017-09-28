<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_a97cbc2892966d79a02597f587308eb306d3f5187f4f77716f492d4525d21a9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_e5ebf5560454fc0c52c7504a0ea6e8b9e9d6e6ba61c20ecad299c94892590c1f = $this->env->getExtension("native_profiler");
        $__internal_e5ebf5560454fc0c52c7504a0ea6e8b9e9d6e6ba61c20ecad299c94892590c1f->enter($__internal_e5ebf5560454fc0c52c7504a0ea6e8b9e9d6e6ba61c20ecad299c94892590c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5ebf5560454fc0c52c7504a0ea6e8b9e9d6e6ba61c20ecad299c94892590c1f->leave($__internal_e5ebf5560454fc0c52c7504a0ea6e8b9e9d6e6ba61c20ecad299c94892590c1f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a4d7aa7194b1898b8153440fac575cb9f609f5eec3886df08ead3664f8541ae = $this->env->getExtension("native_profiler");
        $__internal_3a4d7aa7194b1898b8153440fac575cb9f609f5eec3886df08ead3664f8541ae->enter($__internal_3a4d7aa7194b1898b8153440fac575cb9f609f5eec3886df08ead3664f8541ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_3a4d7aa7194b1898b8153440fac575cb9f609f5eec3886df08ead3664f8541ae->leave($__internal_3a4d7aa7194b1898b8153440fac575cb9f609f5eec3886df08ead3664f8541ae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "@FOSUser/ChangePassword/change_password_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
