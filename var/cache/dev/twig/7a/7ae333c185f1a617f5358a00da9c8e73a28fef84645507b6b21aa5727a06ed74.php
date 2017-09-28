<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_fd365197cc774fb1e016160322e4ed10a40641899bf27e40cd8eaf4c27a1c118 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_1772f7ad1c553a5cf974319c41b92684e10bcad1a1e7b0217c0ed0fbbda3de6b = $this->env->getExtension("native_profiler");
        $__internal_1772f7ad1c553a5cf974319c41b92684e10bcad1a1e7b0217c0ed0fbbda3de6b->enter($__internal_1772f7ad1c553a5cf974319c41b92684e10bcad1a1e7b0217c0ed0fbbda3de6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1772f7ad1c553a5cf974319c41b92684e10bcad1a1e7b0217c0ed0fbbda3de6b->leave($__internal_1772f7ad1c553a5cf974319c41b92684e10bcad1a1e7b0217c0ed0fbbda3de6b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a59a696e14ce067d98e9c7ef7542dcbdcce41ffddd03922c3d5280a228d3f097 = $this->env->getExtension("native_profiler");
        $__internal_a59a696e14ce067d98e9c7ef7542dcbdcce41ffddd03922c3d5280a228d3f097->enter($__internal_a59a696e14ce067d98e9c7ef7542dcbdcce41ffddd03922c3d5280a228d3f097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_a59a696e14ce067d98e9c7ef7542dcbdcce41ffddd03922c3d5280a228d3f097->leave($__internal_a59a696e14ce067d98e9c7ef7542dcbdcce41ffddd03922c3d5280a228d3f097_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "@FOSUser/Group/new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
