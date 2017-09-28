<?php

/* ::admin.html.twig */
class __TwigTemplate_d7f6abaa841810a4a20dafaac1223abc9c2b2cbccd6ca51f17bd61b163d5cdbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basse.html.twig", "::admin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "basse.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4b475d9672e69aea6592f05ff154c46ce7b23877ae64d07436c18291175639a = $this->env->getExtension("native_profiler");
        $__internal_c4b475d9672e69aea6592f05ff154c46ce7b23877ae64d07436c18291175639a->enter($__internal_c4b475d9672e69aea6592f05ff154c46ce7b23877ae64d07436c18291175639a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4b475d9672e69aea6592f05ff154c46ce7b23877ae64d07436c18291175639a->leave($__internal_c4b475d9672e69aea6592f05ff154c46ce7b23877ae64d07436c18291175639a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b785385939ba060d2b2b7a646ea30035fd3825d37242dd5513cfb2fb6d76f45 = $this->env->getExtension("native_profiler");
        $__internal_8b785385939ba060d2b2b7a646ea30035fd3825d37242dd5513cfb2fb6d76f45->enter($__internal_8b785385939ba060d2b2b7a646ea30035fd3825d37242dd5513cfb2fb6d76f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"content-wrapper\">
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <h1> Page Administrateur</h1>

        <p><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"> Se connecter</a></p>

    </div>
";
        
        $__internal_8b785385939ba060d2b2b7a646ea30035fd3825d37242dd5513cfb2fb6d76f45->leave($__internal_8b785385939ba060d2b2b7a646ea30035fd3825d37242dd5513cfb2fb6d76f45_prof);

    }

    public function getTemplateName()
    {
        return "::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'basse.html.twig' %}*/
/* {% block body %}*/
/*     <div class="content-wrapper">*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/*         <h1> Page Administrateur</h1>*/
/* */
/*         <p><a href="{{ path('fos_user_security_logout') }}"> Se connecter</a></p>*/
/* */
/*     </div>*/
/* {% endblock %}*/
