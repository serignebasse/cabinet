<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_aa90c8eb4f82c8ede2154f87459244c7b2a39e46c10abe6b6174096b4dc7e207 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_7d5a4dca4f84206b5691cd99886068a48b79e834932a33c4908b28cb2fff4716 = $this->env->getExtension("native_profiler");
        $__internal_7d5a4dca4f84206b5691cd99886068a48b79e834932a33c4908b28cb2fff4716->enter($__internal_7d5a4dca4f84206b5691cd99886068a48b79e834932a33c4908b28cb2fff4716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d5a4dca4f84206b5691cd99886068a48b79e834932a33c4908b28cb2fff4716->leave($__internal_7d5a4dca4f84206b5691cd99886068a48b79e834932a33c4908b28cb2fff4716_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d4867a0b16ec86b251d30795bd24c5c9e293269cde2400b77966edb887516626 = $this->env->getExtension("native_profiler");
        $__internal_d4867a0b16ec86b251d30795bd24c5c9e293269cde2400b77966edb887516626->enter($__internal_d4867a0b16ec86b251d30795bd24c5c9e293269cde2400b77966edb887516626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_d4867a0b16ec86b251d30795bd24c5c9e293269cde2400b77966edb887516626->leave($__internal_d4867a0b16ec86b251d30795bd24c5c9e293269cde2400b77966edb887516626_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
