<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_bc041702c8ea75c84e14352070a6ab67d99f4f9787bdf6088c4d88fe91593211 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_1e68b049c722ec2e0aa54cc7a90ad4b65deb8c1c60fbb32c2cb1af9d8a440749 = $this->env->getExtension("native_profiler");
        $__internal_1e68b049c722ec2e0aa54cc7a90ad4b65deb8c1c60fbb32c2cb1af9d8a440749->enter($__internal_1e68b049c722ec2e0aa54cc7a90ad4b65deb8c1c60fbb32c2cb1af9d8a440749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e68b049c722ec2e0aa54cc7a90ad4b65deb8c1c60fbb32c2cb1af9d8a440749->leave($__internal_1e68b049c722ec2e0aa54cc7a90ad4b65deb8c1c60fbb32c2cb1af9d8a440749_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9bd75b98a0f93c7845e01cb0c10276e4e0d92d19abeb304a5ae84c372a3db96 = $this->env->getExtension("native_profiler");
        $__internal_f9bd75b98a0f93c7845e01cb0c10276e4e0d92d19abeb304a5ae84c372a3db96->enter($__internal_f9bd75b98a0f93c7845e01cb0c10276e4e0d92d19abeb304a5ae84c372a3db96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f9bd75b98a0f93c7845e01cb0c10276e4e0d92d19abeb304a5ae84c372a3db96->leave($__internal_f9bd75b98a0f93c7845e01cb0c10276e4e0d92d19abeb304a5ae84c372a3db96_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_14dfccfa3c5752fb3dcfa405c5ee78d5a70b7a153f23463cee2b92204d39e8e8 = $this->env->getExtension("native_profiler");
        $__internal_14dfccfa3c5752fb3dcfa405c5ee78d5a70b7a153f23463cee2b92204d39e8e8->enter($__internal_14dfccfa3c5752fb3dcfa405c5ee78d5a70b7a153f23463cee2b92204d39e8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_14dfccfa3c5752fb3dcfa405c5ee78d5a70b7a153f23463cee2b92204d39e8e8->leave($__internal_14dfccfa3c5752fb3dcfa405c5ee78d5a70b7a153f23463cee2b92204d39e8e8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
