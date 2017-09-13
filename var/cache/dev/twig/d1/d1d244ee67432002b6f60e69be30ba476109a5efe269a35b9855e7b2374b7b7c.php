<?php

/* patient/new.html.twig */
class __TwigTemplate_4d617fcb71b3c78ec3b65fb27be02ea6a714988500d7afb2cb13a9bbe7aeb973 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "patient/new.html.twig", 1);
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
        $__internal_475ddbae47f3ea5b9a8ff1cc86b30e94b0e770be27d2cd7fd187ab268a2bdce3 = $this->env->getExtension("native_profiler");
        $__internal_475ddbae47f3ea5b9a8ff1cc86b30e94b0e770be27d2cd7fd187ab268a2bdce3->enter($__internal_475ddbae47f3ea5b9a8ff1cc86b30e94b0e770be27d2cd7fd187ab268a2bdce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "patient/new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_475ddbae47f3ea5b9a8ff1cc86b30e94b0e770be27d2cd7fd187ab268a2bdce3->leave($__internal_475ddbae47f3ea5b9a8ff1cc86b30e94b0e770be27d2cd7fd187ab268a2bdce3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b3101bd7cf519abb2331ee1e997f6c612f295343af8e4ce63403d165bd40776 = $this->env->getExtension("native_profiler");
        $__internal_5b3101bd7cf519abb2331ee1e997f6c612f295343af8e4ce63403d165bd40776->enter($__internal_5b3101bd7cf519abb2331ee1e997f6c612f295343af8e4ce63403d165bd40776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Fiche Patient </h1>

    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

        <input type=\"submit\" value=\"Valider\" />
    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("patient_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5b3101bd7cf519abb2331ee1e997f6c612f295343af8e4ce63403d165bd40776->leave($__internal_5b3101bd7cf519abb2331ee1e997f6c612f295343af8e4ce63403d165bd40776_prof);

    }

    public function getTemplateName()
    {
        return "patient/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  64 => 15,  58 => 12,  53 => 10,  46 => 6,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Fiche Patient </h1>*/
/* */
/*     {{ form_start(form) }}*/
/* */
/*     {{ form_widget(form)}}*/
/* */
/*         <input type="submit" value="Valider" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('patient_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
