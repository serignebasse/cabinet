<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_ca7fa2a6a7a65be658e173f56dc0a21e7fa9e1e575e99ffef2ad4dcbd84d751f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_edaa11216fc2ed5a06b14e803166cc58b856941d910c8060e8af2b098b1811d8 = $this->env->getExtension("native_profiler");
        $__internal_edaa11216fc2ed5a06b14e803166cc58b856941d910c8060e8af2b098b1811d8->enter($__internal_edaa11216fc2ed5a06b14e803166cc58b856941d910c8060e8af2b098b1811d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edaa11216fc2ed5a06b14e803166cc58b856941d910c8060e8af2b098b1811d8->leave($__internal_edaa11216fc2ed5a06b14e803166cc58b856941d910c8060e8af2b098b1811d8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71de2546a285017424ea787dcd595839bf41ccd66779c19e77cdd7470c6dad8a = $this->env->getExtension("native_profiler");
        $__internal_71de2546a285017424ea787dcd595839bf41ccd66779c19e77cdd7470c6dad8a->enter($__internal_71de2546a285017424ea787dcd595839bf41ccd66779c19e77cdd7470c6dad8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_71de2546a285017424ea787dcd595839bf41ccd66779c19e77cdd7470c6dad8a->leave($__internal_71de2546a285017424ea787dcd595839bf41ccd66779c19e77cdd7470c6dad8a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "@FOSUser/Group/list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
