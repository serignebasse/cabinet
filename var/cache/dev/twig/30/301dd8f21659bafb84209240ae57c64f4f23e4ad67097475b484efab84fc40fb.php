<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_2610835ec58b2595fe4da3098bfc301e973abf678d4172ba88133d8a108bbda1 extends Twig_Template
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
        $__internal_03717619fba4f37ace4bb497dc381e60aa8e81b63cc80458d63c63a7f02a79bb = $this->env->getExtension("native_profiler");
        $__internal_03717619fba4f37ace4bb497dc381e60aa8e81b63cc80458d63c63a7f02a79bb->enter($__internal_03717619fba4f37ace4bb497dc381e60aa8e81b63cc80458d63c63a7f02a79bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_03717619fba4f37ace4bb497dc381e60aa8e81b63cc80458d63c63a7f02a79bb->leave($__internal_03717619fba4f37ace4bb497dc381e60aa8e81b63cc80458d63c63a7f02a79bb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c901907e9a518f49f641697d4a729d6f2c296a43cbf7fc41c00979e0cfcb7fe4 = $this->env->getExtension("native_profiler");
        $__internal_c901907e9a518f49f641697d4a729d6f2c296a43cbf7fc41c00979e0cfcb7fe4->enter($__internal_c901907e9a518f49f641697d4a729d6f2c296a43cbf7fc41c00979e0cfcb7fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_c901907e9a518f49f641697d4a729d6f2c296a43cbf7fc41c00979e0cfcb7fe4->leave($__internal_c901907e9a518f49f641697d4a729d6f2c296a43cbf7fc41c00979e0cfcb7fe4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4c98615cc6a775967a5438f0258dd76100c2727ad71d904aa5d4cd7510d9df27 = $this->env->getExtension("native_profiler");
        $__internal_4c98615cc6a775967a5438f0258dd76100c2727ad71d904aa5d4cd7510d9df27->enter($__internal_4c98615cc6a775967a5438f0258dd76100c2727ad71d904aa5d4cd7510d9df27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4c98615cc6a775967a5438f0258dd76100c2727ad71d904aa5d4cd7510d9df27->leave($__internal_4c98615cc6a775967a5438f0258dd76100c2727ad71d904aa5d4cd7510d9df27_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f12afee657e95a898ad43846917884b9d9dd569f079cf51982852933c12cdd39 = $this->env->getExtension("native_profiler");
        $__internal_f12afee657e95a898ad43846917884b9d9dd569f079cf51982852933c12cdd39->enter($__internal_f12afee657e95a898ad43846917884b9d9dd569f079cf51982852933c12cdd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f12afee657e95a898ad43846917884b9d9dd569f079cf51982852933c12cdd39->leave($__internal_f12afee657e95a898ad43846917884b9d9dd569f079cf51982852933c12cdd39_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
