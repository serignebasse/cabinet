<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_268d1818667b1a81e7d6fa6ae673e816d7745efdc51e99c045c83469f7f7f4f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_fdd8da7b5dc79993b7bf3ff0051a0afd58173e3a3d72e6cfcb8a73db66e41b33 = $this->env->getExtension("native_profiler");
        $__internal_fdd8da7b5dc79993b7bf3ff0051a0afd58173e3a3d72e6cfcb8a73db66e41b33->enter($__internal_fdd8da7b5dc79993b7bf3ff0051a0afd58173e3a3d72e6cfcb8a73db66e41b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdd8da7b5dc79993b7bf3ff0051a0afd58173e3a3d72e6cfcb8a73db66e41b33->leave($__internal_fdd8da7b5dc79993b7bf3ff0051a0afd58173e3a3d72e6cfcb8a73db66e41b33_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_536225f184421d18041ef94ea7240824ef1ccbc6b3c771d9ee648053ae7550a8 = $this->env->getExtension("native_profiler");
        $__internal_536225f184421d18041ef94ea7240824ef1ccbc6b3c771d9ee648053ae7550a8->enter($__internal_536225f184421d18041ef94ea7240824ef1ccbc6b3c771d9ee648053ae7550a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_536225f184421d18041ef94ea7240824ef1ccbc6b3c771d9ee648053ae7550a8->leave($__internal_536225f184421d18041ef94ea7240824ef1ccbc6b3c771d9ee648053ae7550a8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
