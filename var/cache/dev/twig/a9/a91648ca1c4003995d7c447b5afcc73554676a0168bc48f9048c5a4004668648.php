<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_9ad15034821ab667710592924d8704977ad0dd3bae4ca92bbf731d62b047a564 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a984897109bb6fc38ec1f910d7008fed79691aefae23d0f4f5c7e8804ffe909 = $this->env->getExtension("native_profiler");
        $__internal_1a984897109bb6fc38ec1f910d7008fed79691aefae23d0f4f5c7e8804ffe909->enter($__internal_1a984897109bb6fc38ec1f910d7008fed79691aefae23d0f4f5c7e8804ffe909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a984897109bb6fc38ec1f910d7008fed79691aefae23d0f4f5c7e8804ffe909->leave($__internal_1a984897109bb6fc38ec1f910d7008fed79691aefae23d0f4f5c7e8804ffe909_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_84ba90cfdbd0f40e44bd988a613ead9d8f1dd59c62bf5e81e4814615a110a527 = $this->env->getExtension("native_profiler");
        $__internal_84ba90cfdbd0f40e44bd988a613ead9d8f1dd59c62bf5e81e4814615a110a527->enter($__internal_84ba90cfdbd0f40e44bd988a613ead9d8f1dd59c62bf5e81e4814615a110a527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_84ba90cfdbd0f40e44bd988a613ead9d8f1dd59c62bf5e81e4814615a110a527->leave($__internal_84ba90cfdbd0f40e44bd988a613ead9d8f1dd59c62bf5e81e4814615a110a527_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
