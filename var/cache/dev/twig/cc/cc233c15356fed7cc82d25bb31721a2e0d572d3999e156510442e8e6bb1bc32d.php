<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6b6a981a9a05227d3caa04ed56b9ea8aad373cceead2891bb683df5100ac8cfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d5a2d84a4efec22c82f997588fca612ac86d88e9bd3b794848658167de37aa7 = $this->env->getExtension("native_profiler");
        $__internal_8d5a2d84a4efec22c82f997588fca612ac86d88e9bd3b794848658167de37aa7->enter($__internal_8d5a2d84a4efec22c82f997588fca612ac86d88e9bd3b794848658167de37aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8d5a2d84a4efec22c82f997588fca612ac86d88e9bd3b794848658167de37aa7->leave($__internal_8d5a2d84a4efec22c82f997588fca612ac86d88e9bd3b794848658167de37aa7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed9322703963d797f6332a835ef92354df4d18f1a2e4b109d91c147773765936 = $this->env->getExtension("native_profiler");
        $__internal_ed9322703963d797f6332a835ef92354df4d18f1a2e4b109d91c147773765936->enter($__internal_ed9322703963d797f6332a835ef92354df4d18f1a2e4b109d91c147773765936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ed9322703963d797f6332a835ef92354df4d18f1a2e4b109d91c147773765936->leave($__internal_ed9322703963d797f6332a835ef92354df4d18f1a2e4b109d91c147773765936_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
