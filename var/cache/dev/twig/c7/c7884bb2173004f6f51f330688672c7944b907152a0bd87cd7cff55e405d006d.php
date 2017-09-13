<?php

/* patient/edit.html.twig */
class __TwigTemplate_28c6a3c7bdec7190e8347d2181ef456f7926195d22bd9f19c169780314fb3c29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "patient/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ab0b5cc9bfaf43cf0439cd03ad1833ff37d5a4009cce31e07a1b6bcc6ef409e = $this->env->getExtension("native_profiler");
        $__internal_6ab0b5cc9bfaf43cf0439cd03ad1833ff37d5a4009cce31e07a1b6bcc6ef409e->enter($__internal_6ab0b5cc9bfaf43cf0439cd03ad1833ff37d5a4009cce31e07a1b6bcc6ef409e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "patient/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ab0b5cc9bfaf43cf0439cd03ad1833ff37d5a4009cce31e07a1b6bcc6ef409e->leave($__internal_6ab0b5cc9bfaf43cf0439cd03ad1833ff37d5a4009cce31e07a1b6bcc6ef409e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_feddcc47c3e067b81beb271ad3a6f17b6d85bdb7a10246547d650f91a1fc5cdd = $this->env->getExtension("native_profiler");
        $__internal_feddcc47c3e067b81beb271ad3a6f17b6d85bdb7a10246547d650f91a1fc5cdd->enter($__internal_feddcc47c3e067b81beb271ad3a6f17b6d85bdb7a10246547d650f91a1fc5cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Patient edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("patient_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_feddcc47c3e067b81beb271ad3a6f17b6d85bdb7a10246547d650f91a1fc5cdd->leave($__internal_feddcc47c3e067b81beb271ad3a6f17b6d85bdb7a10246547d650f91a1fc5cdd_prof);

    }

    public function getTemplateName()
    {
        return "patient/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Patient edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('patient_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
