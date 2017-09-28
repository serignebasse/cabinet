<?php

/* SamaBundle:Default:index.html.twig */
class __TwigTemplate_62c70cd9fb248815864b0596693104964fc55c2e22da31b09b2e4c7bb24c3176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SamaBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6542833c4e7b4471056a3d7d6627de40804ff3b18c2cffbfc85ee53a0956e710 = $this->env->getExtension("native_profiler");
        $__internal_6542833c4e7b4471056a3d7d6627de40804ff3b18c2cffbfc85ee53a0956e710->enter($__internal_6542833c4e7b4471056a3d7d6627de40804ff3b18c2cffbfc85ee53a0956e710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SamaBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6542833c4e7b4471056a3d7d6627de40804ff3b18c2cffbfc85ee53a0956e710->leave($__internal_6542833c4e7b4471056a3d7d6627de40804ff3b18c2cffbfc85ee53a0956e710_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0784558e0c816236c7bc8d81acd157088b5e24b551cb76ab2016d939cbec87a2 = $this->env->getExtension("native_profiler");
        $__internal_0784558e0c816236c7bc8d81acd157088b5e24b551cb76ab2016d939cbec87a2->enter($__internal_0784558e0c816236c7bc8d81acd157088b5e24b551cb76ab2016d939cbec87a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"content-wrapper\">
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    </div>
";
        
        $__internal_0784558e0c816236c7bc8d81acd157088b5e24b551cb76ab2016d939cbec87a2->leave($__internal_0784558e0c816236c7bc8d81acd157088b5e24b551cb76ab2016d939cbec87a2_prof);

    }

    public function getTemplateName()
    {
        return "SamaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="content-wrapper">*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     </div>*/
/* {% endblock %}*/
