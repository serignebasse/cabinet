<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_39e5eb1a1b4b565fc41d363e5243b4ca0ab31bf3eedf1a4857f94e3946174505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_1cd9a34972dc67755645aeb61121a86ee04ebad6eaa8de2b48bc9f659ba49b02 = $this->env->getExtension("native_profiler");
        $__internal_1cd9a34972dc67755645aeb61121a86ee04ebad6eaa8de2b48bc9f659ba49b02->enter($__internal_1cd9a34972dc67755645aeb61121a86ee04ebad6eaa8de2b48bc9f659ba49b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cd9a34972dc67755645aeb61121a86ee04ebad6eaa8de2b48bc9f659ba49b02->leave($__internal_1cd9a34972dc67755645aeb61121a86ee04ebad6eaa8de2b48bc9f659ba49b02_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7cafd019354bf7a398be3274cf5609302a1a769e30d2ab771568348e42cf130 = $this->env->getExtension("native_profiler");
        $__internal_e7cafd019354bf7a398be3274cf5609302a1a769e30d2ab771568348e42cf130->enter($__internal_e7cafd019354bf7a398be3274cf5609302a1a769e30d2ab771568348e42cf130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_e7cafd019354bf7a398be3274cf5609302a1a769e30d2ab771568348e42cf130->leave($__internal_e7cafd019354bf7a398be3274cf5609302a1a769e30d2ab771568348e42cf130_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "@FOSUser/Profile/show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
