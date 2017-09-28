<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_ad969c073b2740c25307834b4dc73dcd1ac90a2c3dee7cdf8daf938efe12d821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adcd5c4bddecf20ed84deae49024c2a9a11071c7693fda8ec1d473bcebeb3736 = $this->env->getExtension("native_profiler");
        $__internal_adcd5c4bddecf20ed84deae49024c2a9a11071c7693fda8ec1d473bcebeb3736->enter($__internal_adcd5c4bddecf20ed84deae49024c2a9a11071c7693fda8ec1d473bcebeb3736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_adcd5c4bddecf20ed84deae49024c2a9a11071c7693fda8ec1d473bcebeb3736->leave($__internal_adcd5c4bddecf20ed84deae49024c2a9a11071c7693fda8ec1d473bcebeb3736_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
