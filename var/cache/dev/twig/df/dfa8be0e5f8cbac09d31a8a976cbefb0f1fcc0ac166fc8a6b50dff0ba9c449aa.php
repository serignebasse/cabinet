<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_54f1d54fc9bec64798d8fe01a607aa40c3822891613fa950ebe779a38c9e77cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_52287b9c2a6a8556e3afb76114d2b6ffed16602fdb95faf5b04403a312067a4b = $this->env->getExtension("native_profiler");
        $__internal_52287b9c2a6a8556e3afb76114d2b6ffed16602fdb95faf5b04403a312067a4b->enter($__internal_52287b9c2a6a8556e3afb76114d2b6ffed16602fdb95faf5b04403a312067a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52287b9c2a6a8556e3afb76114d2b6ffed16602fdb95faf5b04403a312067a4b->leave($__internal_52287b9c2a6a8556e3afb76114d2b6ffed16602fdb95faf5b04403a312067a4b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cc4da6e7a9e0339c2e64b7adbe601645f190a3e10b350aa3046301d933275208 = $this->env->getExtension("native_profiler");
        $__internal_cc4da6e7a9e0339c2e64b7adbe601645f190a3e10b350aa3046301d933275208->enter($__internal_cc4da6e7a9e0339c2e64b7adbe601645f190a3e10b350aa3046301d933275208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cc4da6e7a9e0339c2e64b7adbe601645f190a3e10b350aa3046301d933275208->leave($__internal_cc4da6e7a9e0339c2e64b7adbe601645f190a3e10b350aa3046301d933275208_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_068b2f6416e1b50eb817982c0d896ffa2698e0e156c839b94869e322126b68a7 = $this->env->getExtension("native_profiler");
        $__internal_068b2f6416e1b50eb817982c0d896ffa2698e0e156c839b94869e322126b68a7->enter($__internal_068b2f6416e1b50eb817982c0d896ffa2698e0e156c839b94869e322126b68a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_068b2f6416e1b50eb817982c0d896ffa2698e0e156c839b94869e322126b68a7->leave($__internal_068b2f6416e1b50eb817982c0d896ffa2698e0e156c839b94869e322126b68a7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_054a3b7be946b12d0873064d149e4246234e9fd0b32a4f18d3fc21e5c1339a41 = $this->env->getExtension("native_profiler");
        $__internal_054a3b7be946b12d0873064d149e4246234e9fd0b32a4f18d3fc21e5c1339a41->enter($__internal_054a3b7be946b12d0873064d149e4246234e9fd0b32a4f18d3fc21e5c1339a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_054a3b7be946b12d0873064d149e4246234e9fd0b32a4f18d3fc21e5c1339a41->leave($__internal_054a3b7be946b12d0873064d149e4246234e9fd0b32a4f18d3fc21e5c1339a41_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
