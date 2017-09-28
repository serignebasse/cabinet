<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_29b2fbd163bf4b6a77bea8a6dcb1fbe611b986d962615b6f3764177fdb188c4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_6b979533c4b47ac5645737c431f9bfc18b505ef0cfbafba24dd76490716d6c7a = $this->env->getExtension("native_profiler");
        $__internal_6b979533c4b47ac5645737c431f9bfc18b505ef0cfbafba24dd76490716d6c7a->enter($__internal_6b979533c4b47ac5645737c431f9bfc18b505ef0cfbafba24dd76490716d6c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b979533c4b47ac5645737c431f9bfc18b505ef0cfbafba24dd76490716d6c7a->leave($__internal_6b979533c4b47ac5645737c431f9bfc18b505ef0cfbafba24dd76490716d6c7a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f61a56eeb1c4791951c9faccd93b8017ed87f482ff01f76e498c20040e47eec = $this->env->getExtension("native_profiler");
        $__internal_6f61a56eeb1c4791951c9faccd93b8017ed87f482ff01f76e498c20040e47eec->enter($__internal_6f61a56eeb1c4791951c9faccd93b8017ed87f482ff01f76e498c20040e47eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_6f61a56eeb1c4791951c9faccd93b8017ed87f482ff01f76e498c20040e47eec->leave($__internal_6f61a56eeb1c4791951c9faccd93b8017ed87f482ff01f76e498c20040e47eec_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "@FOSUser/Group/edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
