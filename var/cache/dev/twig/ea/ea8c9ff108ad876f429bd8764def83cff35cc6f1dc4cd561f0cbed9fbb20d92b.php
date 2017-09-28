<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_8d44f551812570e546dfb45b23e73f44a9fd329cde440a8a86aa694eba215dfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_5c22e391a26a93ff7d49e8be0998e330be2cf164b57f5b5f93bd4b1449c2342a = $this->env->getExtension("native_profiler");
        $__internal_5c22e391a26a93ff7d49e8be0998e330be2cf164b57f5b5f93bd4b1449c2342a->enter($__internal_5c22e391a26a93ff7d49e8be0998e330be2cf164b57f5b5f93bd4b1449c2342a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c22e391a26a93ff7d49e8be0998e330be2cf164b57f5b5f93bd4b1449c2342a->leave($__internal_5c22e391a26a93ff7d49e8be0998e330be2cf164b57f5b5f93bd4b1449c2342a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b28b1778f7871e4b787052ae0acee1a1b324b5fc00b19cc2c34f81f201f5a57a = $this->env->getExtension("native_profiler");
        $__internal_b28b1778f7871e4b787052ae0acee1a1b324b5fc00b19cc2c34f81f201f5a57a->enter($__internal_b28b1778f7871e4b787052ae0acee1a1b324b5fc00b19cc2c34f81f201f5a57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b28b1778f7871e4b787052ae0acee1a1b324b5fc00b19cc2c34f81f201f5a57a->leave($__internal_b28b1778f7871e4b787052ae0acee1a1b324b5fc00b19cc2c34f81f201f5a57a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
