<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_0df42ff1824da3e6652244d97ab8c3b361c13bcd8c7a719b06ba7828aab4091d extends Twig_Template
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
        $__internal_9d1a1ecf32f15caff6f872dad2c109427630986be124c2b0e3254c700c36ac9f = $this->env->getExtension("native_profiler");
        $__internal_9d1a1ecf32f15caff6f872dad2c109427630986be124c2b0e3254c700c36ac9f->enter($__internal_9d1a1ecf32f15caff6f872dad2c109427630986be124c2b0e3254c700c36ac9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9d1a1ecf32f15caff6f872dad2c109427630986be124c2b0e3254c700c36ac9f->leave($__internal_9d1a1ecf32f15caff6f872dad2c109427630986be124c2b0e3254c700c36ac9f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb7a5f35df07e2341197f526f34d62aadb62059630ecbc2a2b99e35c6453f0f6 = $this->env->getExtension("native_profiler");
        $__internal_fb7a5f35df07e2341197f526f34d62aadb62059630ecbc2a2b99e35c6453f0f6->enter($__internal_fb7a5f35df07e2341197f526f34d62aadb62059630ecbc2a2b99e35c6453f0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fb7a5f35df07e2341197f526f34d62aadb62059630ecbc2a2b99e35c6453f0f6->leave($__internal_fb7a5f35df07e2341197f526f34d62aadb62059630ecbc2a2b99e35c6453f0f6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
