<?php

/* patient/edit.html.twig */
class __TwigTemplate_d1de0509461f7529ea2b59806abf1705d7ac2e2783cbbae52a15dd0f3936fc8e extends Twig_Template
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
        $__internal_366d1575ef35c9a436f8accba0657291b2e86c26c3a90f759f71009d4fbdc8ad = $this->env->getExtension("native_profiler");
        $__internal_366d1575ef35c9a436f8accba0657291b2e86c26c3a90f759f71009d4fbdc8ad->enter($__internal_366d1575ef35c9a436f8accba0657291b2e86c26c3a90f759f71009d4fbdc8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "patient/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_366d1575ef35c9a436f8accba0657291b2e86c26c3a90f759f71009d4fbdc8ad->leave($__internal_366d1575ef35c9a436f8accba0657291b2e86c26c3a90f759f71009d4fbdc8ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f0a65ab82f62c472a166bbddd36c0eeb9ee623c92ab1e0b44aada48620a49b2 = $this->env->getExtension("native_profiler");
        $__internal_4f0a65ab82f62c472a166bbddd36c0eeb9ee623c92ab1e0b44aada48620a49b2->enter($__internal_4f0a65ab82f62c472a166bbddd36c0eeb9ee623c92ab1e0b44aada48620a49b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <h1>Patient edit</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("patient_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4f0a65ab82f62c472a166bbddd36c0eeb9ee623c92ab1e0b44aada48620a49b2->leave($__internal_4f0a65ab82f62c472a166bbddd36c0eeb9ee623c92ab1e0b44aada48620a49b2_prof);

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
        return array (  74 => 19,  69 => 17,  63 => 14,  56 => 10,  51 => 8,  47 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
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
