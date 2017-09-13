<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_7e841cdbecf4398661b4b69e070dd227d42a41ad3bc02b838a7fbdf9f82fa3ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cee1e9daeb4ad3367932c73aae33abb3de76200056931faed789f03dc62d97b7 = $this->env->getExtension("native_profiler");
        $__internal_cee1e9daeb4ad3367932c73aae33abb3de76200056931faed789f03dc62d97b7->enter($__internal_cee1e9daeb4ad3367932c73aae33abb3de76200056931faed789f03dc62d97b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cee1e9daeb4ad3367932c73aae33abb3de76200056931faed789f03dc62d97b7->leave($__internal_cee1e9daeb4ad3367932c73aae33abb3de76200056931faed789f03dc62d97b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_56248b1b8157057dbb1c468a41b487e959071f1c3e22e384f3d3780e3d77a3fb = $this->env->getExtension("native_profiler");
        $__internal_56248b1b8157057dbb1c468a41b487e959071f1c3e22e384f3d3780e3d77a3fb->enter($__internal_56248b1b8157057dbb1c468a41b487e959071f1c3e22e384f3d3780e3d77a3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_56248b1b8157057dbb1c468a41b487e959071f1c3e22e384f3d3780e3d77a3fb->leave($__internal_56248b1b8157057dbb1c468a41b487e959071f1c3e22e384f3d3780e3d77a3fb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e8c273e2a9bbb3107b2a9c44591b465e936e67e6c8782110efe4022f1db4cad = $this->env->getExtension("native_profiler");
        $__internal_2e8c273e2a9bbb3107b2a9c44591b465e936e67e6c8782110efe4022f1db4cad->enter($__internal_2e8c273e2a9bbb3107b2a9c44591b465e936e67e6c8782110efe4022f1db4cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2e8c273e2a9bbb3107b2a9c44591b465e936e67e6c8782110efe4022f1db4cad->leave($__internal_2e8c273e2a9bbb3107b2a9c44591b465e936e67e6c8782110efe4022f1db4cad_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
