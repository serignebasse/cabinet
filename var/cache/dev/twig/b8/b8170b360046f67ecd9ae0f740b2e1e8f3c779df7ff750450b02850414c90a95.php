<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_bc869c3e8b01ba8e5a0839c3bfa72b7fd692a344e74cb6c6c2b351e6338352ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_797bb24caa22dc3791f92a0a25d144687f6020f55ebdeb1a41ce1ccb85712ad7 = $this->env->getExtension("native_profiler");
        $__internal_797bb24caa22dc3791f92a0a25d144687f6020f55ebdeb1a41ce1ccb85712ad7->enter($__internal_797bb24caa22dc3791f92a0a25d144687f6020f55ebdeb1a41ce1ccb85712ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_797bb24caa22dc3791f92a0a25d144687f6020f55ebdeb1a41ce1ccb85712ad7->leave($__internal_797bb24caa22dc3791f92a0a25d144687f6020f55ebdeb1a41ce1ccb85712ad7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ce2f789b81f8e330ab18d3d6d11c9beb299b89325f2091df8dca1cb179ca9aae = $this->env->getExtension("native_profiler");
        $__internal_ce2f789b81f8e330ab18d3d6d11c9beb299b89325f2091df8dca1cb179ca9aae->enter($__internal_ce2f789b81f8e330ab18d3d6d11c9beb299b89325f2091df8dca1cb179ca9aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_ce2f789b81f8e330ab18d3d6d11c9beb299b89325f2091df8dca1cb179ca9aae->leave($__internal_ce2f789b81f8e330ab18d3d6d11c9beb299b89325f2091df8dca1cb179ca9aae_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "@FOSUser/Resetting/reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
