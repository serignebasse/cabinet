<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_5b7198249757e23cb4e70fb53247a709ffceeeea5d0bf62225054fbc619aa083 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b537325622de5618177a40284e00359db37b93f2ff8705a959762d68bf5d8068 = $this->env->getExtension("native_profiler");
        $__internal_b537325622de5618177a40284e00359db37b93f2ff8705a959762d68bf5d8068->enter($__internal_b537325622de5618177a40284e00359db37b93f2ff8705a959762d68bf5d8068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b537325622de5618177a40284e00359db37b93f2ff8705a959762d68bf5d8068->leave($__internal_b537325622de5618177a40284e00359db37b93f2ff8705a959762d68bf5d8068_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6abae14ea8d5a75ae54d812f998870417ed33e800fbabc8be580aeeb65b6ffc5 = $this->env->getExtension("native_profiler");
        $__internal_6abae14ea8d5a75ae54d812f998870417ed33e800fbabc8be580aeeb65b6ffc5->enter($__internal_6abae14ea8d5a75ae54d812f998870417ed33e800fbabc8be580aeeb65b6ffc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_6abae14ea8d5a75ae54d812f998870417ed33e800fbabc8be580aeeb65b6ffc5->leave($__internal_6abae14ea8d5a75ae54d812f998870417ed33e800fbabc8be580aeeb65b6ffc5_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f0205b8bf75593969c591e9bdaa0098e0c7f6dbf3d541f94bca8602ac857bac7 = $this->env->getExtension("native_profiler");
        $__internal_f0205b8bf75593969c591e9bdaa0098e0c7f6dbf3d541f94bca8602ac857bac7->enter($__internal_f0205b8bf75593969c591e9bdaa0098e0c7f6dbf3d541f94bca8602ac857bac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f0205b8bf75593969c591e9bdaa0098e0c7f6dbf3d541f94bca8602ac857bac7->leave($__internal_f0205b8bf75593969c591e9bdaa0098e0c7f6dbf3d541f94bca8602ac857bac7_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1c65b98c7f4757b4eb2416a3659b67fb9d0eedf92a984dcacfa968ca5f573e58 = $this->env->getExtension("native_profiler");
        $__internal_1c65b98c7f4757b4eb2416a3659b67fb9d0eedf92a984dcacfa968ca5f573e58->enter($__internal_1c65b98c7f4757b4eb2416a3659b67fb9d0eedf92a984dcacfa968ca5f573e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1c65b98c7f4757b4eb2416a3659b67fb9d0eedf92a984dcacfa968ca5f573e58->leave($__internal_1c65b98c7f4757b4eb2416a3659b67fb9d0eedf92a984dcacfa968ca5f573e58_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {%- autoescape false -%}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {%- endautoescape -%}*/
/* {% endblock %}*/
/* */
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
