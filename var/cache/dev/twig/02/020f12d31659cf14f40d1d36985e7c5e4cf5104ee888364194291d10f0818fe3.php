<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_7c80138b632d9b75822151b1376c8db56ba75291185cf37511fa4491b7827325 extends Twig_Template
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
        $__internal_aaef33c73206042e7caca1451df59e1eaacec7e63b07654fe0360c01dfd4af10 = $this->env->getExtension("native_profiler");
        $__internal_aaef33c73206042e7caca1451df59e1eaacec7e63b07654fe0360c01dfd4af10->enter($__internal_aaef33c73206042e7caca1451df59e1eaacec7e63b07654fe0360c01dfd4af10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_aaef33c73206042e7caca1451df59e1eaacec7e63b07654fe0360c01dfd4af10->leave($__internal_aaef33c73206042e7caca1451df59e1eaacec7e63b07654fe0360c01dfd4af10_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_24ddca91f023da4ff51d961518e10bdb8f017ca2ae1fbda2eff20ad158ffd116 = $this->env->getExtension("native_profiler");
        $__internal_24ddca91f023da4ff51d961518e10bdb8f017ca2ae1fbda2eff20ad158ffd116->enter($__internal_24ddca91f023da4ff51d961518e10bdb8f017ca2ae1fbda2eff20ad158ffd116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_24ddca91f023da4ff51d961518e10bdb8f017ca2ae1fbda2eff20ad158ffd116->leave($__internal_24ddca91f023da4ff51d961518e10bdb8f017ca2ae1fbda2eff20ad158ffd116_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8b46df6216b66545baf772f6460cb314e4afbad4772fffb4455c7a6680718d56 = $this->env->getExtension("native_profiler");
        $__internal_8b46df6216b66545baf772f6460cb314e4afbad4772fffb4455c7a6680718d56->enter($__internal_8b46df6216b66545baf772f6460cb314e4afbad4772fffb4455c7a6680718d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8b46df6216b66545baf772f6460cb314e4afbad4772fffb4455c7a6680718d56->leave($__internal_8b46df6216b66545baf772f6460cb314e4afbad4772fffb4455c7a6680718d56_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ba2dee8d1d38ca3d04b2462f319a5b86517fd56d2c5885bef9d6a9bc8e2cf8c5 = $this->env->getExtension("native_profiler");
        $__internal_ba2dee8d1d38ca3d04b2462f319a5b86517fd56d2c5885bef9d6a9bc8e2cf8c5->enter($__internal_ba2dee8d1d38ca3d04b2462f319a5b86517fd56d2c5885bef9d6a9bc8e2cf8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ba2dee8d1d38ca3d04b2462f319a5b86517fd56d2c5885bef9d6a9bc8e2cf8c5->leave($__internal_ba2dee8d1d38ca3d04b2462f319a5b86517fd56d2c5885bef9d6a9bc8e2cf8c5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {%- autoescape false -%}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {%- endautoescape -%}*/
/* {% endblock %}*/
/* */
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
