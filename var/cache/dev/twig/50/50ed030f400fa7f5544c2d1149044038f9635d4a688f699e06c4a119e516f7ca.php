<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_640723e05fb4dfe60a2fc0bc09571f9531486ff90e047110c0c0db02bd4c01f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_0449fae1c0bd2d7792cc6aad05ce9874e843a8c706065cc901c696fd6c6adfb6 = $this->env->getExtension("native_profiler");
        $__internal_0449fae1c0bd2d7792cc6aad05ce9874e843a8c706065cc901c696fd6c6adfb6->enter($__internal_0449fae1c0bd2d7792cc6aad05ce9874e843a8c706065cc901c696fd6c6adfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0449fae1c0bd2d7792cc6aad05ce9874e843a8c706065cc901c696fd6c6adfb6->leave($__internal_0449fae1c0bd2d7792cc6aad05ce9874e843a8c706065cc901c696fd6c6adfb6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_faafa8c9bb3a9b32d053360831ec1bdffe6be1b1159b70bcfa85ecd0b69ef5c0 = $this->env->getExtension("native_profiler");
        $__internal_faafa8c9bb3a9b32d053360831ec1bdffe6be1b1159b70bcfa85ecd0b69ef5c0->enter($__internal_faafa8c9bb3a9b32d053360831ec1bdffe6be1b1159b70bcfa85ecd0b69ef5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_faafa8c9bb3a9b32d053360831ec1bdffe6be1b1159b70bcfa85ecd0b69ef5c0->leave($__internal_faafa8c9bb3a9b32d053360831ec1bdffe6be1b1159b70bcfa85ecd0b69ef5c0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
