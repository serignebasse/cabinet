<?php

/* ::homepage.html.twig */
class __TwigTemplate_8d106c8c807068f4b4eaea9639c2ce300464f0862f98bf8074394257748c4def extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basse.html.twig", "::homepage.html.twig", 1);
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
        $__internal_d4826ec7699e80c65e9c588273540a4e92096022ce340baa551c204138a99c70 = $this->env->getExtension("native_profiler");
        $__internal_d4826ec7699e80c65e9c588273540a4e92096022ce340baa551c204138a99c70->enter($__internal_d4826ec7699e80c65e9c588273540a4e92096022ce340baa551c204138a99c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4826ec7699e80c65e9c588273540a4e92096022ce340baa551c204138a99c70->leave($__internal_d4826ec7699e80c65e9c588273540a4e92096022ce340baa551c204138a99c70_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9ce1bec8f66b0bed0db779ac0173fbf501a623fedece7e0df61c02ea42aca9e = $this->env->getExtension("native_profiler");
        $__internal_d9ce1bec8f66b0bed0db779ac0173fbf501a623fedece7e0df61c02ea42aca9e->enter($__internal_d9ce1bec8f66b0bed0db779ac0173fbf501a623fedece7e0df61c02ea42aca9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"content-wrapper\">
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <h1> Page d'accueil</h1>

        <p><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"> Se connecter</a></p>

    </div>
";
        
        $__internal_d9ce1bec8f66b0bed0db779ac0173fbf501a623fedece7e0df61c02ea42aca9e->leave($__internal_d9ce1bec8f66b0bed0db779ac0173fbf501a623fedece7e0df61c02ea42aca9e_prof);

    }

    public function getTemplateName()
    {
        return "::homepage.html.twig";
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
/*         <h1> Page d'accueil</h1>*/
/* */
/*         <p><a href="{{ path('fos_user_security_login') }}"> Se connecter</a></p>*/
/* */
/*     </div>*/
/* {% endblock %}*/
