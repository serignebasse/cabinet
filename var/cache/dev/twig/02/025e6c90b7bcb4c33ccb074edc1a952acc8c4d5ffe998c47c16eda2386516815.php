<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_3a57ccce40698048e793894ee0f536f63ab9608a858f242c109416e129d40a7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_30a6a3d93e8e2a90caaac797b34a16aae1510fb5f24f9f18001b24683a209ccf = $this->env->getExtension("native_profiler");
        $__internal_30a6a3d93e8e2a90caaac797b34a16aae1510fb5f24f9f18001b24683a209ccf->enter($__internal_30a6a3d93e8e2a90caaac797b34a16aae1510fb5f24f9f18001b24683a209ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30a6a3d93e8e2a90caaac797b34a16aae1510fb5f24f9f18001b24683a209ccf->leave($__internal_30a6a3d93e8e2a90caaac797b34a16aae1510fb5f24f9f18001b24683a209ccf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c708deb37389b0f8e7df5cc3d71580ebcd476bb599dee752cc26927afcc4f27 = $this->env->getExtension("native_profiler");
        $__internal_8c708deb37389b0f8e7df5cc3d71580ebcd476bb599dee752cc26927afcc4f27->enter($__internal_8c708deb37389b0f8e7df5cc3d71580ebcd476bb599dee752cc26927afcc4f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_8c708deb37389b0f8e7df5cc3d71580ebcd476bb599dee752cc26927afcc4f27->leave($__internal_8c708deb37389b0f8e7df5cc3d71580ebcd476bb599dee752cc26927afcc4f27_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
