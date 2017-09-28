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
        $__internal_ab17f6c84baf2185ccc0cd444e5f802d5a762012a28b57659da89127a788ad69 = $this->env->getExtension("native_profiler");
        $__internal_ab17f6c84baf2185ccc0cd444e5f802d5a762012a28b57659da89127a788ad69->enter($__internal_ab17f6c84baf2185ccc0cd444e5f802d5a762012a28b57659da89127a788ad69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab17f6c84baf2185ccc0cd444e5f802d5a762012a28b57659da89127a788ad69->leave($__internal_ab17f6c84baf2185ccc0cd444e5f802d5a762012a28b57659da89127a788ad69_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_baaedd188eaa2b1645fbcbe5928b069c7d6b7f67b8c3c22d7a7c246f5d01187a = $this->env->getExtension("native_profiler");
        $__internal_baaedd188eaa2b1645fbcbe5928b069c7d6b7f67b8c3c22d7a7c246f5d01187a->enter($__internal_baaedd188eaa2b1645fbcbe5928b069c7d6b7f67b8c3c22d7a7c246f5d01187a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_baaedd188eaa2b1645fbcbe5928b069c7d6b7f67b8c3c22d7a7c246f5d01187a->leave($__internal_baaedd188eaa2b1645fbcbe5928b069c7d6b7f67b8c3c22d7a7c246f5d01187a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b793e6b0137d89e56d6b7f4b9ee1502b699d2229b8dcdfb6cef4f0d2f12e156a = $this->env->getExtension("native_profiler");
        $__internal_b793e6b0137d89e56d6b7f4b9ee1502b699d2229b8dcdfb6cef4f0d2f12e156a->enter($__internal_b793e6b0137d89e56d6b7f4b9ee1502b699d2229b8dcdfb6cef4f0d2f12e156a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b793e6b0137d89e56d6b7f4b9ee1502b699d2229b8dcdfb6cef4f0d2f12e156a->leave($__internal_b793e6b0137d89e56d6b7f4b9ee1502b699d2229b8dcdfb6cef4f0d2f12e156a_prof);

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
