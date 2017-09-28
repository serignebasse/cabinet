<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_80b7c4430aad071db4f6c0cd8866124a399993c681cd2c544cd4d5236309b5ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_da7f9d9e8f3864c3fbda269d9c1076ff7e040daf644731347447d97cbc1f02f8 = $this->env->getExtension("native_profiler");
        $__internal_da7f9d9e8f3864c3fbda269d9c1076ff7e040daf644731347447d97cbc1f02f8->enter($__internal_da7f9d9e8f3864c3fbda269d9c1076ff7e040daf644731347447d97cbc1f02f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da7f9d9e8f3864c3fbda269d9c1076ff7e040daf644731347447d97cbc1f02f8->leave($__internal_da7f9d9e8f3864c3fbda269d9c1076ff7e040daf644731347447d97cbc1f02f8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9e8b4660875a95e97c4f8fc9bd9050c3269d6517c34b94a049f86de6f0976359 = $this->env->getExtension("native_profiler");
        $__internal_9e8b4660875a95e97c4f8fc9bd9050c3269d6517c34b94a049f86de6f0976359->enter($__internal_9e8b4660875a95e97c4f8fc9bd9050c3269d6517c34b94a049f86de6f0976359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_9e8b4660875a95e97c4f8fc9bd9050c3269d6517c34b94a049f86de6f0976359->leave($__internal_9e8b4660875a95e97c4f8fc9bd9050c3269d6517c34b94a049f86de6f0976359_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
/*     {{ include('@FOSUser/Security/login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
