<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_ed6fded9a9cc8dc6c8e51834c16d10d5cf6a24ce1d044653fa214dc581d1aeac extends Twig_Template
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
        $__internal_41f96c89781bc20e8ecca9b856a89bcfa9a505fd17d4bb535ac2eb891fa3fc0a = $this->env->getExtension("native_profiler");
        $__internal_41f96c89781bc20e8ecca9b856a89bcfa9a505fd17d4bb535ac2eb891fa3fc0a->enter($__internal_41f96c89781bc20e8ecca9b856a89bcfa9a505fd17d4bb535ac2eb891fa3fc0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_41f96c89781bc20e8ecca9b856a89bcfa9a505fd17d4bb535ac2eb891fa3fc0a->leave($__internal_41f96c89781bc20e8ecca9b856a89bcfa9a505fd17d4bb535ac2eb891fa3fc0a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0559183a2f15311c0570c9c0dc19d972f8374b4c1964e8f04ab9afa9c731a446 = $this->env->getExtension("native_profiler");
        $__internal_0559183a2f15311c0570c9c0dc19d972f8374b4c1964e8f04ab9afa9c731a446->enter($__internal_0559183a2f15311c0570c9c0dc19d972f8374b4c1964e8f04ab9afa9c731a446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_0559183a2f15311c0570c9c0dc19d972f8374b4c1964e8f04ab9afa9c731a446->leave($__internal_0559183a2f15311c0570c9c0dc19d972f8374b4c1964e8f04ab9afa9c731a446_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b8cdcb796a1d381b2ccffb0d3ce531a776f9c55fe3f59ad6e1010fae42527c56 = $this->env->getExtension("native_profiler");
        $__internal_b8cdcb796a1d381b2ccffb0d3ce531a776f9c55fe3f59ad6e1010fae42527c56->enter($__internal_b8cdcb796a1d381b2ccffb0d3ce531a776f9c55fe3f59ad6e1010fae42527c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b8cdcb796a1d381b2ccffb0d3ce531a776f9c55fe3f59ad6e1010fae42527c56->leave($__internal_b8cdcb796a1d381b2ccffb0d3ce531a776f9c55fe3f59ad6e1010fae42527c56_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4ef5a6c7acc0e869b8e80dafd9a6b9b65511c1edfbf3064c5cc2b547226cb7a1 = $this->env->getExtension("native_profiler");
        $__internal_4ef5a6c7acc0e869b8e80dafd9a6b9b65511c1edfbf3064c5cc2b547226cb7a1->enter($__internal_4ef5a6c7acc0e869b8e80dafd9a6b9b65511c1edfbf3064c5cc2b547226cb7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4ef5a6c7acc0e869b8e80dafd9a6b9b65511c1edfbf3064c5cc2b547226cb7a1->leave($__internal_4ef5a6c7acc0e869b8e80dafd9a6b9b65511c1edfbf3064c5cc2b547226cb7a1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
