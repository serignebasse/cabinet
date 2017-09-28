<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_18b768fe2ed0abdf4ba265c082128d2848367acfd50bc7db215a7e898e64e6b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_a14f0c0cc0b702520a287a9b66595cbef8a2d9b7863aac24e727fea1d9d3a8d5 = $this->env->getExtension("native_profiler");
        $__internal_a14f0c0cc0b702520a287a9b66595cbef8a2d9b7863aac24e727fea1d9d3a8d5->enter($__internal_a14f0c0cc0b702520a287a9b66595cbef8a2d9b7863aac24e727fea1d9d3a8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a14f0c0cc0b702520a287a9b66595cbef8a2d9b7863aac24e727fea1d9d3a8d5->leave($__internal_a14f0c0cc0b702520a287a9b66595cbef8a2d9b7863aac24e727fea1d9d3a8d5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aa4c7e6a0c160e601964aa1aa64b022542beb4a80594f88bb65a13e94ae677fb = $this->env->getExtension("native_profiler");
        $__internal_aa4c7e6a0c160e601964aa1aa64b022542beb4a80594f88bb65a13e94ae677fb->enter($__internal_aa4c7e6a0c160e601964aa1aa64b022542beb4a80594f88bb65a13e94ae677fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aa4c7e6a0c160e601964aa1aa64b022542beb4a80594f88bb65a13e94ae677fb->leave($__internal_aa4c7e6a0c160e601964aa1aa64b022542beb4a80594f88bb65a13e94ae677fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_00e35919d458293c6c89568a2276455cd09079abafdfba6c4c3015b2eb786bd9 = $this->env->getExtension("native_profiler");
        $__internal_00e35919d458293c6c89568a2276455cd09079abafdfba6c4c3015b2eb786bd9->enter($__internal_00e35919d458293c6c89568a2276455cd09079abafdfba6c4c3015b2eb786bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_00e35919d458293c6c89568a2276455cd09079abafdfba6c4c3015b2eb786bd9->leave($__internal_00e35919d458293c6c89568a2276455cd09079abafdfba6c4c3015b2eb786bd9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4e52d47c4ead3deadf2731b4de507e7872b115cd45b04986a5f11785754c4bc = $this->env->getExtension("native_profiler");
        $__internal_b4e52d47c4ead3deadf2731b4de507e7872b115cd45b04986a5f11785754c4bc->enter($__internal_b4e52d47c4ead3deadf2731b4de507e7872b115cd45b04986a5f11785754c4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b4e52d47c4ead3deadf2731b4de507e7872b115cd45b04986a5f11785754c4bc->leave($__internal_b4e52d47c4ead3deadf2731b4de507e7872b115cd45b04986a5f11785754c4bc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
