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
        $__internal_f2f0ed888a00783b0c2181a78675fa4774945ff79850c26b59aec8f679314a49 = $this->env->getExtension("native_profiler");
        $__internal_f2f0ed888a00783b0c2181a78675fa4774945ff79850c26b59aec8f679314a49->enter($__internal_f2f0ed888a00783b0c2181a78675fa4774945ff79850c26b59aec8f679314a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f2f0ed888a00783b0c2181a78675fa4774945ff79850c26b59aec8f679314a49->leave($__internal_f2f0ed888a00783b0c2181a78675fa4774945ff79850c26b59aec8f679314a49_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e1fb01e629afba8b617d59dde77db6ba7060c411f1993a8c3c9af9636c9ecb1 = $this->env->getExtension("native_profiler");
        $__internal_6e1fb01e629afba8b617d59dde77db6ba7060c411f1993a8c3c9af9636c9ecb1->enter($__internal_6e1fb01e629afba8b617d59dde77db6ba7060c411f1993a8c3c9af9636c9ecb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6e1fb01e629afba8b617d59dde77db6ba7060c411f1993a8c3c9af9636c9ecb1->leave($__internal_6e1fb01e629afba8b617d59dde77db6ba7060c411f1993a8c3c9af9636c9ecb1_prof);

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
