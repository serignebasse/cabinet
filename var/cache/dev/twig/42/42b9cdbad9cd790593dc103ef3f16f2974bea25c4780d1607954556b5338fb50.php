<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_ac7fabf009183fd976cf7f99f911d7ef47421ddcee3daed5d08da750336fe43a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_bf00836167a2b4973d27d3f5cbe253c069b131e8b147dcacb31ec4a8d07b8262 = $this->env->getExtension("native_profiler");
        $__internal_bf00836167a2b4973d27d3f5cbe253c069b131e8b147dcacb31ec4a8d07b8262->enter($__internal_bf00836167a2b4973d27d3f5cbe253c069b131e8b147dcacb31ec4a8d07b8262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf00836167a2b4973d27d3f5cbe253c069b131e8b147dcacb31ec4a8d07b8262->leave($__internal_bf00836167a2b4973d27d3f5cbe253c069b131e8b147dcacb31ec4a8d07b8262_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c6904c6d798166c772b8c16d65b3f7d7848026282628d01a3afc1e064f093f6 = $this->env->getExtension("native_profiler");
        $__internal_3c6904c6d798166c772b8c16d65b3f7d7848026282628d01a3afc1e064f093f6->enter($__internal_3c6904c6d798166c772b8c16d65b3f7d7848026282628d01a3afc1e064f093f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_3c6904c6d798166c772b8c16d65b3f7d7848026282628d01a3afc1e064f093f6->leave($__internal_3c6904c6d798166c772b8c16d65b3f7d7848026282628d01a3afc1e064f093f6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "@FOSUser/Group/new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
