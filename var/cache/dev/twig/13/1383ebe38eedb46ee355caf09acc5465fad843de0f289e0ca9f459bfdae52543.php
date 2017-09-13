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
        $__internal_f2b115714390f6d88a76605a3144d528fba1abce36982bd77c51d6ed5fb0c72e = $this->env->getExtension("native_profiler");
        $__internal_f2b115714390f6d88a76605a3144d528fba1abce36982bd77c51d6ed5fb0c72e->enter($__internal_f2b115714390f6d88a76605a3144d528fba1abce36982bd77c51d6ed5fb0c72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2b115714390f6d88a76605a3144d528fba1abce36982bd77c51d6ed5fb0c72e->leave($__internal_f2b115714390f6d88a76605a3144d528fba1abce36982bd77c51d6ed5fb0c72e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfd65910dd2a3769d1b1b162c42e4d05bfb5fd7fd2b80160d3e1099df09d8e4b = $this->env->getExtension("native_profiler");
        $__internal_dfd65910dd2a3769d1b1b162c42e4d05bfb5fd7fd2b80160d3e1099df09d8e4b->enter($__internal_dfd65910dd2a3769d1b1b162c42e4d05bfb5fd7fd2b80160d3e1099df09d8e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dfd65910dd2a3769d1b1b162c42e4d05bfb5fd7fd2b80160d3e1099df09d8e4b->leave($__internal_dfd65910dd2a3769d1b1b162c42e4d05bfb5fd7fd2b80160d3e1099df09d8e4b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_993fbf93199bdd4adc71061bc1adca8e2fd78a117b05a972b93c070332ed41e5 = $this->env->getExtension("native_profiler");
        $__internal_993fbf93199bdd4adc71061bc1adca8e2fd78a117b05a972b93c070332ed41e5->enter($__internal_993fbf93199bdd4adc71061bc1adca8e2fd78a117b05a972b93c070332ed41e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_993fbf93199bdd4adc71061bc1adca8e2fd78a117b05a972b93c070332ed41e5->leave($__internal_993fbf93199bdd4adc71061bc1adca8e2fd78a117b05a972b93c070332ed41e5_prof);

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
