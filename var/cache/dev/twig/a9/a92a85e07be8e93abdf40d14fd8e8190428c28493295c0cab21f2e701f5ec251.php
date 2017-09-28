<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_be5b91c949a3c9c3ead5c46baa72ae107f7ec7ede229aedda361b625b9f03816 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_858c7e9cfe6f7895235de60a6427ae650cecacf76784fbcba26380dc002f20b1 = $this->env->getExtension("native_profiler");
        $__internal_858c7e9cfe6f7895235de60a6427ae650cecacf76784fbcba26380dc002f20b1->enter($__internal_858c7e9cfe6f7895235de60a6427ae650cecacf76784fbcba26380dc002f20b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_858c7e9cfe6f7895235de60a6427ae650cecacf76784fbcba26380dc002f20b1->leave($__internal_858c7e9cfe6f7895235de60a6427ae650cecacf76784fbcba26380dc002f20b1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_30d2df9268deae98b2bd503ffb585904cf8e6aa0be4aa6b5965cd954c36f5bcc = $this->env->getExtension("native_profiler");
        $__internal_30d2df9268deae98b2bd503ffb585904cf8e6aa0be4aa6b5965cd954c36f5bcc->enter($__internal_30d2df9268deae98b2bd503ffb585904cf8e6aa0be4aa6b5965cd954c36f5bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_30d2df9268deae98b2bd503ffb585904cf8e6aa0be4aa6b5965cd954c36f5bcc->leave($__internal_30d2df9268deae98b2bd503ffb585904cf8e6aa0be4aa6b5965cd954c36f5bcc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "@FOSUser/Group/show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
