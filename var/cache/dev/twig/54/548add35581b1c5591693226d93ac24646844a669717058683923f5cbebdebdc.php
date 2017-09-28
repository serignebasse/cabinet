<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_0f82d80bfa7a31741c7d69b15004e5ddd0bf2555bdd9feb7f7686a82dc729c1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_232c88821ccb247ace342323f25990fc02a4f7c023d5db3679dfb3d1300f3e58 = $this->env->getExtension("native_profiler");
        $__internal_232c88821ccb247ace342323f25990fc02a4f7c023d5db3679dfb3d1300f3e58->enter($__internal_232c88821ccb247ace342323f25990fc02a4f7c023d5db3679dfb3d1300f3e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_232c88821ccb247ace342323f25990fc02a4f7c023d5db3679dfb3d1300f3e58->leave($__internal_232c88821ccb247ace342323f25990fc02a4f7c023d5db3679dfb3d1300f3e58_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1634e9ff1607ffcde22de9b0ce2fa2264fa0f192ae5b9bcf166636c00a33036 = $this->env->getExtension("native_profiler");
        $__internal_a1634e9ff1607ffcde22de9b0ce2fa2264fa0f192ae5b9bcf166636c00a33036->enter($__internal_a1634e9ff1607ffcde22de9b0ce2fa2264fa0f192ae5b9bcf166636c00a33036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_a1634e9ff1607ffcde22de9b0ce2fa2264fa0f192ae5b9bcf166636c00a33036->leave($__internal_a1634e9ff1607ffcde22de9b0ce2fa2264fa0f192ae5b9bcf166636c00a33036_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
