<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_7d254d20ff7c77549c95c76e1b138c0bbe98a2685265f728d64c00f9b904ee69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_33b194ae4c8168be8df257ce17f4f9635f779fb15815ffdea18f0d1f0ff4474a = $this->env->getExtension("native_profiler");
        $__internal_33b194ae4c8168be8df257ce17f4f9635f779fb15815ffdea18f0d1f0ff4474a->enter($__internal_33b194ae4c8168be8df257ce17f4f9635f779fb15815ffdea18f0d1f0ff4474a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33b194ae4c8168be8df257ce17f4f9635f779fb15815ffdea18f0d1f0ff4474a->leave($__internal_33b194ae4c8168be8df257ce17f4f9635f779fb15815ffdea18f0d1f0ff4474a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0fe603821746c55a67bed66078cf6e26cc4822430b4f92a9479202a9396e574 = $this->env->getExtension("native_profiler");
        $__internal_d0fe603821746c55a67bed66078cf6e26cc4822430b4f92a9479202a9396e574->enter($__internal_d0fe603821746c55a67bed66078cf6e26cc4822430b4f92a9479202a9396e574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_d0fe603821746c55a67bed66078cf6e26cc4822430b4f92a9479202a9396e574->leave($__internal_d0fe603821746c55a67bed66078cf6e26cc4822430b4f92a9479202a9396e574_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "@FOSUser/Resetting/reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
