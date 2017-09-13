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
        $__internal_db4071f376a3591c239cc85d85b5c44129cb2c93c8aa8c6703530f57e4ce71ed = $this->env->getExtension("native_profiler");
        $__internal_db4071f376a3591c239cc85d85b5c44129cb2c93c8aa8c6703530f57e4ce71ed->enter($__internal_db4071f376a3591c239cc85d85b5c44129cb2c93c8aa8c6703530f57e4ce71ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db4071f376a3591c239cc85d85b5c44129cb2c93c8aa8c6703530f57e4ce71ed->leave($__internal_db4071f376a3591c239cc85d85b5c44129cb2c93c8aa8c6703530f57e4ce71ed_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_99356bb1a195c1f4eb727dc275e49bd477030390eaccb2f949a76fcb51ce7b18 = $this->env->getExtension("native_profiler");
        $__internal_99356bb1a195c1f4eb727dc275e49bd477030390eaccb2f949a76fcb51ce7b18->enter($__internal_99356bb1a195c1f4eb727dc275e49bd477030390eaccb2f949a76fcb51ce7b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_99356bb1a195c1f4eb727dc275e49bd477030390eaccb2f949a76fcb51ce7b18->leave($__internal_99356bb1a195c1f4eb727dc275e49bd477030390eaccb2f949a76fcb51ce7b18_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fa62bccb7fbb0cf1dd99c3cbce6ac6bca87e7cc04c1617617dae8216c53179b4 = $this->env->getExtension("native_profiler");
        $__internal_fa62bccb7fbb0cf1dd99c3cbce6ac6bca87e7cc04c1617617dae8216c53179b4->enter($__internal_fa62bccb7fbb0cf1dd99c3cbce6ac6bca87e7cc04c1617617dae8216c53179b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fa62bccb7fbb0cf1dd99c3cbce6ac6bca87e7cc04c1617617dae8216c53179b4->leave($__internal_fa62bccb7fbb0cf1dd99c3cbce6ac6bca87e7cc04c1617617dae8216c53179b4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e00747fb2c2c452ebef9b8a863ab553398430f84e03f0550afb8905c1735034a = $this->env->getExtension("native_profiler");
        $__internal_e00747fb2c2c452ebef9b8a863ab553398430f84e03f0550afb8905c1735034a->enter($__internal_e00747fb2c2c452ebef9b8a863ab553398430f84e03f0550afb8905c1735034a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e00747fb2c2c452ebef9b8a863ab553398430f84e03f0550afb8905c1735034a->leave($__internal_e00747fb2c2c452ebef9b8a863ab553398430f84e03f0550afb8905c1735034a_prof);

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
