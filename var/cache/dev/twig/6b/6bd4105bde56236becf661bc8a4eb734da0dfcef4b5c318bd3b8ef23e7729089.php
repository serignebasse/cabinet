<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_83eedbd032b7e91a3181a12e25042d02fb4be3d86975dd63f4fb808d2dacf7ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_431faa7ce3e1b382fadadcf9d1833d0febfc238fbfb326a515fd3429b19e755f = $this->env->getExtension("native_profiler");
        $__internal_431faa7ce3e1b382fadadcf9d1833d0febfc238fbfb326a515fd3429b19e755f->enter($__internal_431faa7ce3e1b382fadadcf9d1833d0febfc238fbfb326a515fd3429b19e755f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_431faa7ce3e1b382fadadcf9d1833d0febfc238fbfb326a515fd3429b19e755f->leave($__internal_431faa7ce3e1b382fadadcf9d1833d0febfc238fbfb326a515fd3429b19e755f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da8a97534a7115ecd3a9e2ba202f3e17ba73651c6fb51837246de19d4bf1b85f = $this->env->getExtension("native_profiler");
        $__internal_da8a97534a7115ecd3a9e2ba202f3e17ba73651c6fb51837246de19d4bf1b85f->enter($__internal_da8a97534a7115ecd3a9e2ba202f3e17ba73651c6fb51837246de19d4bf1b85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_da8a97534a7115ecd3a9e2ba202f3e17ba73651c6fb51837246de19d4bf1b85f->leave($__internal_da8a97534a7115ecd3a9e2ba202f3e17ba73651c6fb51837246de19d4bf1b85f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e59f222dfbef5349044ae77536bf28af13eeff4cf93c908f113b49be885ade5 = $this->env->getExtension("native_profiler");
        $__internal_2e59f222dfbef5349044ae77536bf28af13eeff4cf93c908f113b49be885ade5->enter($__internal_2e59f222dfbef5349044ae77536bf28af13eeff4cf93c908f113b49be885ade5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2e59f222dfbef5349044ae77536bf28af13eeff4cf93c908f113b49be885ade5->leave($__internal_2e59f222dfbef5349044ae77536bf28af13eeff4cf93c908f113b49be885ade5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1a418a6b6609332e620d9366f367f5f0e8df7efb37c67d3f1379927320e987b1 = $this->env->getExtension("native_profiler");
        $__internal_1a418a6b6609332e620d9366f367f5f0e8df7efb37c67d3f1379927320e987b1->enter($__internal_1a418a6b6609332e620d9366f367f5f0e8df7efb37c67d3f1379927320e987b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1a418a6b6609332e620d9366f367f5f0e8df7efb37c67d3f1379927320e987b1->leave($__internal_1a418a6b6609332e620d9366f367f5f0e8df7efb37c67d3f1379927320e987b1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
