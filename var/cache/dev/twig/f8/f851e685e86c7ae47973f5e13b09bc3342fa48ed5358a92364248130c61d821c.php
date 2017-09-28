<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_fde4665b68b57bab37ab48b82288604dd2176abb11c6a2c95b72e4cf5e0b24fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_83c5186ee894bc5deb7319cf2bb65414641615a4a536ebe14448b831a360de32 = $this->env->getExtension("native_profiler");
        $__internal_83c5186ee894bc5deb7319cf2bb65414641615a4a536ebe14448b831a360de32->enter($__internal_83c5186ee894bc5deb7319cf2bb65414641615a4a536ebe14448b831a360de32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83c5186ee894bc5deb7319cf2bb65414641615a4a536ebe14448b831a360de32->leave($__internal_83c5186ee894bc5deb7319cf2bb65414641615a4a536ebe14448b831a360de32_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb9df37b58ce8219e67648ae3a0a87f17266020c58b7fbe6df8ce72c73203048 = $this->env->getExtension("native_profiler");
        $__internal_eb9df37b58ce8219e67648ae3a0a87f17266020c58b7fbe6df8ce72c73203048->enter($__internal_eb9df37b58ce8219e67648ae3a0a87f17266020c58b7fbe6df8ce72c73203048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_eb9df37b58ce8219e67648ae3a0a87f17266020c58b7fbe6df8ce72c73203048->leave($__internal_eb9df37b58ce8219e67648ae3a0a87f17266020c58b7fbe6df8ce72c73203048_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}*/
/* </p>*/
/* {% endblock %}*/
/* */
