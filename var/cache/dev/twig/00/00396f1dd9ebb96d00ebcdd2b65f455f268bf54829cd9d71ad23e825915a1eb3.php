<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_f2bd9d3b49dbe29b759549318981f9d01c438e2dabcd16ae8d7500454d251250 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_7f97f09df97f29d8946eefe47365b67a3474325ede71cac15a48fa649d03becf = $this->env->getExtension("native_profiler");
        $__internal_7f97f09df97f29d8946eefe47365b67a3474325ede71cac15a48fa649d03becf->enter($__internal_7f97f09df97f29d8946eefe47365b67a3474325ede71cac15a48fa649d03becf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f97f09df97f29d8946eefe47365b67a3474325ede71cac15a48fa649d03becf->leave($__internal_7f97f09df97f29d8946eefe47365b67a3474325ede71cac15a48fa649d03becf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c2e35b604bd107dd9a705e114bb7433227495d53885d140af8eb00f6c7cadd0 = $this->env->getExtension("native_profiler");
        $__internal_6c2e35b604bd107dd9a705e114bb7433227495d53885d140af8eb00f6c7cadd0->enter($__internal_6c2e35b604bd107dd9a705e114bb7433227495d53885d140af8eb00f6c7cadd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_6c2e35b604bd107dd9a705e114bb7433227495d53885d140af8eb00f6c7cadd0->leave($__internal_6c2e35b604bd107dd9a705e114bb7433227495d53885d140af8eb00f6c7cadd0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
