<?php

/* SamaBundle:Default:index.html.twig */
class __TwigTemplate_9dd087417807d5e25756dc72956700cd594242345dda7a1502ec03112c37356c extends Twig_Template
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
        $__internal_044de7d8ef5f59f557ef9e163dd247ddc0e58e55b30b2816e905fb66740037dc = $this->env->getExtension("native_profiler");
        $__internal_044de7d8ef5f59f557ef9e163dd247ddc0e58e55b30b2816e905fb66740037dc->enter($__internal_044de7d8ef5f59f557ef9e163dd247ddc0e58e55b30b2816e905fb66740037dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SamaBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_044de7d8ef5f59f557ef9e163dd247ddc0e58e55b30b2816e905fb66740037dc->leave($__internal_044de7d8ef5f59f557ef9e163dd247ddc0e58e55b30b2816e905fb66740037dc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c932f3ca2a77ed3c8176699ecae1aa420e18c77317c53a083b90c77b7d83448 = $this->env->getExtension("native_profiler");
        $__internal_2c932f3ca2a77ed3c8176699ecae1aa420e18c77317c53a083b90c77b7d83448->enter($__internal_2c932f3ca2a77ed3c8176699ecae1aa420e18c77317c53a083b90c77b7d83448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"content-wrapper\">
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    </div>
";
        
        $__internal_2c932f3ca2a77ed3c8176699ecae1aa420e18c77317c53a083b90c77b7d83448->leave($__internal_2c932f3ca2a77ed3c8176699ecae1aa420e18c77317c53a083b90c77b7d83448_prof);

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
