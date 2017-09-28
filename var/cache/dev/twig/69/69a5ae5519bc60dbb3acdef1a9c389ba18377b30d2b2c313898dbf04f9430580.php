<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8ce00297af693451b919e420ead2a621043ebc2815ba5383fe0458b91475332d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_1765444e268a2a831fd87457f1a9bdc3a7bab64b01e2df8d6fced149fea882d9 = $this->env->getExtension("native_profiler");
        $__internal_1765444e268a2a831fd87457f1a9bdc3a7bab64b01e2df8d6fced149fea882d9->enter($__internal_1765444e268a2a831fd87457f1a9bdc3a7bab64b01e2df8d6fced149fea882d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1765444e268a2a831fd87457f1a9bdc3a7bab64b01e2df8d6fced149fea882d9->leave($__internal_1765444e268a2a831fd87457f1a9bdc3a7bab64b01e2df8d6fced149fea882d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc578be34bad6975b6329426fa2710e9ec03ea6a8aaf0a16d92c9bc56b434f6e = $this->env->getExtension("native_profiler");
        $__internal_cc578be34bad6975b6329426fa2710e9ec03ea6a8aaf0a16d92c9bc56b434f6e->enter($__internal_cc578be34bad6975b6329426fa2710e9ec03ea6a8aaf0a16d92c9bc56b434f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_cc578be34bad6975b6329426fa2710e9ec03ea6a8aaf0a16d92c9bc56b434f6e->leave($__internal_cc578be34bad6975b6329426fa2710e9ec03ea6a8aaf0a16d92c9bc56b434f6e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
