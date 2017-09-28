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
        $__internal_ef7b084187a52b33e632b23c182b0ad90381f5c4141e0a18ca3054b06b70fb57 = $this->env->getExtension("native_profiler");
        $__internal_ef7b084187a52b33e632b23c182b0ad90381f5c4141e0a18ca3054b06b70fb57->enter($__internal_ef7b084187a52b33e632b23c182b0ad90381f5c4141e0a18ca3054b06b70fb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ef7b084187a52b33e632b23c182b0ad90381f5c4141e0a18ca3054b06b70fb57->leave($__internal_ef7b084187a52b33e632b23c182b0ad90381f5c4141e0a18ca3054b06b70fb57_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d0f3ad763139be97c8f12ce3cef3d7c8c377306b012963bb3340177e64ec1de = $this->env->getExtension("native_profiler");
        $__internal_8d0f3ad763139be97c8f12ce3cef3d7c8c377306b012963bb3340177e64ec1de->enter($__internal_8d0f3ad763139be97c8f12ce3cef3d7c8c377306b012963bb3340177e64ec1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8d0f3ad763139be97c8f12ce3cef3d7c8c377306b012963bb3340177e64ec1de->leave($__internal_8d0f3ad763139be97c8f12ce3cef3d7c8c377306b012963bb3340177e64ec1de_prof);

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
