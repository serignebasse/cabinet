<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_d8676111cf95e6506493ddb03ce8c271d8dde7b80e65adf2bb274a15fa4be83a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_dd916e2fb8a6ab2cf2435956c95453d774762c7b4d2e03374989c4622faabf10 = $this->env->getExtension("native_profiler");
        $__internal_dd916e2fb8a6ab2cf2435956c95453d774762c7b4d2e03374989c4622faabf10->enter($__internal_dd916e2fb8a6ab2cf2435956c95453d774762c7b4d2e03374989c4622faabf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd916e2fb8a6ab2cf2435956c95453d774762c7b4d2e03374989c4622faabf10->leave($__internal_dd916e2fb8a6ab2cf2435956c95453d774762c7b4d2e03374989c4622faabf10_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_425aad42c3a5002daddf66e1b7681562f9f27a91f9fa2cc2d34eee777b5c6ea5 = $this->env->getExtension("native_profiler");
        $__internal_425aad42c3a5002daddf66e1b7681562f9f27a91f9fa2cc2d34eee777b5c6ea5->enter($__internal_425aad42c3a5002daddf66e1b7681562f9f27a91f9fa2cc2d34eee777b5c6ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_425aad42c3a5002daddf66e1b7681562f9f27a91f9fa2cc2d34eee777b5c6ea5->leave($__internal_425aad42c3a5002daddf66e1b7681562f9f27a91f9fa2cc2d34eee777b5c6ea5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
