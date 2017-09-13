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
        $__internal_f3f6b2f30ec008468e5c16d47447ac3801b39118d436a5deadea90ea0a0be2f9 = $this->env->getExtension("native_profiler");
        $__internal_f3f6b2f30ec008468e5c16d47447ac3801b39118d436a5deadea90ea0a0be2f9->enter($__internal_f3f6b2f30ec008468e5c16d47447ac3801b39118d436a5deadea90ea0a0be2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3f6b2f30ec008468e5c16d47447ac3801b39118d436a5deadea90ea0a0be2f9->leave($__internal_f3f6b2f30ec008468e5c16d47447ac3801b39118d436a5deadea90ea0a0be2f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_85028ddd8decdea3efb5d0fc037ef86e023c986c560eee05cfb97fc69256e533 = $this->env->getExtension("native_profiler");
        $__internal_85028ddd8decdea3efb5d0fc037ef86e023c986c560eee05cfb97fc69256e533->enter($__internal_85028ddd8decdea3efb5d0fc037ef86e023c986c560eee05cfb97fc69256e533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_85028ddd8decdea3efb5d0fc037ef86e023c986c560eee05cfb97fc69256e533->leave($__internal_85028ddd8decdea3efb5d0fc037ef86e023c986c560eee05cfb97fc69256e533_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ef06bede38009462a078546f55edcfbbff1e024cb7fa36bede32f021c1ee32d8 = $this->env->getExtension("native_profiler");
        $__internal_ef06bede38009462a078546f55edcfbbff1e024cb7fa36bede32f021c1ee32d8->enter($__internal_ef06bede38009462a078546f55edcfbbff1e024cb7fa36bede32f021c1ee32d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ef06bede38009462a078546f55edcfbbff1e024cb7fa36bede32f021c1ee32d8->leave($__internal_ef06bede38009462a078546f55edcfbbff1e024cb7fa36bede32f021c1ee32d8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea42cd6e6223a29d53a7c52d1f157ec332539a0a09ab80e3402190a853dcfd84 = $this->env->getExtension("native_profiler");
        $__internal_ea42cd6e6223a29d53a7c52d1f157ec332539a0a09ab80e3402190a853dcfd84->enter($__internal_ea42cd6e6223a29d53a7c52d1f157ec332539a0a09ab80e3402190a853dcfd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ea42cd6e6223a29d53a7c52d1f157ec332539a0a09ab80e3402190a853dcfd84->leave($__internal_ea42cd6e6223a29d53a7c52d1f157ec332539a0a09ab80e3402190a853dcfd84_prof);

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
