<?php

/* ::basse.html.twig */
class __TwigTemplate_a6de211edc6efce98224d4d5e9916d482dd779d0cdbcff1196cbaea36f5b5816 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25acc575fdcc118a4074a11f769819fd9d1e2286be9f563697dd1e9f7c299c81 = $this->env->getExtension("native_profiler");
        $__internal_25acc575fdcc118a4074a11f769819fd9d1e2286be9f563697dd1e9f7c299c81->enter($__internal_25acc575fdcc118a4074a11f769819fd9d1e2286be9f563697dd1e9f7c299c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::basse.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "</body>
</html>
";
        
        $__internal_25acc575fdcc118a4074a11f769819fd9d1e2286be9f563697dd1e9f7c299c81->leave($__internal_25acc575fdcc118a4074a11f769819fd9d1e2286be9f563697dd1e9f7c299c81_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_30afeee995db00c03cfbc87bdab537c00025c274846f2c80b4bd4318f3899ea8 = $this->env->getExtension("native_profiler");
        $__internal_30afeee995db00c03cfbc87bdab537c00025c274846f2c80b4bd4318f3899ea8->enter($__internal_30afeee995db00c03cfbc87bdab537c00025c274846f2c80b4bd4318f3899ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_30afeee995db00c03cfbc87bdab537c00025c274846f2c80b4bd4318f3899ea8->leave($__internal_30afeee995db00c03cfbc87bdab537c00025c274846f2c80b4bd4318f3899ea8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bc1b02903775d568d224138058541cb91c1b321e4fa6855241340c7be315d35 = $this->env->getExtension("native_profiler");
        $__internal_3bc1b02903775d568d224138058541cb91c1b321e4fa6855241340c7be315d35->enter($__internal_3bc1b02903775d568d224138058541cb91c1b321e4fa6855241340c7be315d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3bc1b02903775d568d224138058541cb91c1b321e4fa6855241340c7be315d35->leave($__internal_3bc1b02903775d568d224138058541cb91c1b321e4fa6855241340c7be315d35_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be514f323fb56105e1ba8b02a8d4f66009f93a52796fd8242942c44a17dbe4d3 = $this->env->getExtension("native_profiler");
        $__internal_be514f323fb56105e1ba8b02a8d4f66009f93a52796fd8242942c44a17dbe4d3->enter($__internal_be514f323fb56105e1ba8b02a8d4f66009f93a52796fd8242942c44a17dbe4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_be514f323fb56105e1ba8b02a8d4f66009f93a52796fd8242942c44a17dbe4d3->leave($__internal_be514f323fb56105e1ba8b02a8d4f66009f93a52796fd8242942c44a17dbe4d3_prof);

    }

    public function getTemplateName()
    {
        return "::basse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 10,  64 => 9,  53 => 5,  44 => 11,  42 => 10,  40 => 9,  33 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* {% block body %}{% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
