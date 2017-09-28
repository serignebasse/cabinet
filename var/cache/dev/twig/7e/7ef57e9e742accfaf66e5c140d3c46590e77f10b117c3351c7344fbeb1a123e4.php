<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_f4c53de44408bad1b0b1291ec579b72ee3aa2f26336c1a52e81020eb71bec3c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_8c59942e7e2737e32ee6146d77f0aabd3d95c28754ef80426a487a81ec02986a = $this->env->getExtension("native_profiler");
        $__internal_8c59942e7e2737e32ee6146d77f0aabd3d95c28754ef80426a487a81ec02986a->enter($__internal_8c59942e7e2737e32ee6146d77f0aabd3d95c28754ef80426a487a81ec02986a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c59942e7e2737e32ee6146d77f0aabd3d95c28754ef80426a487a81ec02986a->leave($__internal_8c59942e7e2737e32ee6146d77f0aabd3d95c28754ef80426a487a81ec02986a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5444431058aa96a764a3ad283868dc6dfe39d9b6f6fc9a33b8508be18fc3c3f0 = $this->env->getExtension("native_profiler");
        $__internal_5444431058aa96a764a3ad283868dc6dfe39d9b6f6fc9a33b8508be18fc3c3f0->enter($__internal_5444431058aa96a764a3ad283868dc6dfe39d9b6f6fc9a33b8508be18fc3c3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_5444431058aa96a764a3ad283868dc6dfe39d9b6f6fc9a33b8508be18fc3c3f0->leave($__internal_5444431058aa96a764a3ad283868dc6dfe39d9b6f6fc9a33b8508be18fc3c3f0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "@FOSUser/Registration/register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
