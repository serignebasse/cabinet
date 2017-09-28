<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_309dccbf10e969a734f848e2158fdb9e29994f7d6edbf845bdbb97f201219462 extends Twig_Template
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
        $__internal_cf5f454c7998e5dc5392b9360dc15ebe89b0b3514dfbf10a07677b0c13657401 = $this->env->getExtension("native_profiler");
        $__internal_cf5f454c7998e5dc5392b9360dc15ebe89b0b3514dfbf10a07677b0c13657401->enter($__internal_cf5f454c7998e5dc5392b9360dc15ebe89b0b3514dfbf10a07677b0c13657401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_cf5f454c7998e5dc5392b9360dc15ebe89b0b3514dfbf10a07677b0c13657401->leave($__internal_cf5f454c7998e5dc5392b9360dc15ebe89b0b3514dfbf10a07677b0c13657401_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
