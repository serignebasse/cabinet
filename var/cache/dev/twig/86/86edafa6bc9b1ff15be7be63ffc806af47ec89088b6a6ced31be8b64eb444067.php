<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_e83a635169d96fef27dfb5ca57e672a9a5992a54019ccba968f6a0ecd128f592 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_4d354f9c07ee6806f8182a34d0060cc848a979f516062614ba577d93993456ca = $this->env->getExtension("native_profiler");
        $__internal_4d354f9c07ee6806f8182a34d0060cc848a979f516062614ba577d93993456ca->enter($__internal_4d354f9c07ee6806f8182a34d0060cc848a979f516062614ba577d93993456ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d354f9c07ee6806f8182a34d0060cc848a979f516062614ba577d93993456ca->leave($__internal_4d354f9c07ee6806f8182a34d0060cc848a979f516062614ba577d93993456ca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6dff1e1337561147b8b6739219168d9a70f977da58a868c1a2ee1560d3ae2836 = $this->env->getExtension("native_profiler");
        $__internal_6dff1e1337561147b8b6739219168d9a70f977da58a868c1a2ee1560d3ae2836->enter($__internal_6dff1e1337561147b8b6739219168d9a70f977da58a868c1a2ee1560d3ae2836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_6dff1e1337561147b8b6739219168d9a70f977da58a868c1a2ee1560d3ae2836->leave($__internal_6dff1e1337561147b8b6739219168d9a70f977da58a868c1a2ee1560d3ae2836_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "@FOSUser/Resetting/request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
