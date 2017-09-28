<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_6290412eeff17fe9b3d87ed8a91c8103df6b52a6ff3de529b727c0f61207a243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_d3022552291ad75a804593ffeb2c7b778317f5f27970a2307fe8d01961e25af3 = $this->env->getExtension("native_profiler");
        $__internal_d3022552291ad75a804593ffeb2c7b778317f5f27970a2307fe8d01961e25af3->enter($__internal_d3022552291ad75a804593ffeb2c7b778317f5f27970a2307fe8d01961e25af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3022552291ad75a804593ffeb2c7b778317f5f27970a2307fe8d01961e25af3->leave($__internal_d3022552291ad75a804593ffeb2c7b778317f5f27970a2307fe8d01961e25af3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db38e6f5887ba704d57c2e502bf3dc1faff081115834c09483a648083484de38 = $this->env->getExtension("native_profiler");
        $__internal_db38e6f5887ba704d57c2e502bf3dc1faff081115834c09483a648083484de38->enter($__internal_db38e6f5887ba704d57c2e502bf3dc1faff081115834c09483a648083484de38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_db38e6f5887ba704d57c2e502bf3dc1faff081115834c09483a648083484de38->leave($__internal_db38e6f5887ba704d57c2e502bf3dc1faff081115834c09483a648083484de38_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "@FOSUser/Profile/edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
