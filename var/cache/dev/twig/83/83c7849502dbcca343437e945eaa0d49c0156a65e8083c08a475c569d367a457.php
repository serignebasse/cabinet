<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_db84926baded916604a0b7809684323e661293d6119f38986ef2e3504ab61add extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_223e6d5fdb54f2138c8bb5e518268a48ea32819a06268327ed734fb442d70784 = $this->env->getExtension("native_profiler");
        $__internal_223e6d5fdb54f2138c8bb5e518268a48ea32819a06268327ed734fb442d70784->enter($__internal_223e6d5fdb54f2138c8bb5e518268a48ea32819a06268327ed734fb442d70784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_223e6d5fdb54f2138c8bb5e518268a48ea32819a06268327ed734fb442d70784->leave($__internal_223e6d5fdb54f2138c8bb5e518268a48ea32819a06268327ed734fb442d70784_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_577066022f6a42e2ea95d5e24a37eebfb05cc0679311e2e51d7a5b97e66c3f4b = $this->env->getExtension("native_profiler");
        $__internal_577066022f6a42e2ea95d5e24a37eebfb05cc0679311e2e51d7a5b97e66c3f4b->enter($__internal_577066022f6a42e2ea95d5e24a37eebfb05cc0679311e2e51d7a5b97e66c3f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_577066022f6a42e2ea95d5e24a37eebfb05cc0679311e2e51d7a5b97e66c3f4b->leave($__internal_577066022f6a42e2ea95d5e24a37eebfb05cc0679311e2e51d7a5b97e66c3f4b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
