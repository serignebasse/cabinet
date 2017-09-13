<?php

/* @Sama/Default/ajouterPatient.html.twig */
class __TwigTemplate_f8f34813e520a688962f8233882b063a8f6a79681d6b45cf9d8a6fe8dd264ac9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Sama/Default/ajouterPatient.html.twig", 1);
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
        $__internal_19d9e522e6c6c032094ba3df4a4db4f95aff73b287e150eda6239fbe5049ec50 = $this->env->getExtension("native_profiler");
        $__internal_19d9e522e6c6c032094ba3df4a4db4f95aff73b287e150eda6239fbe5049ec50->enter($__internal_19d9e522e6c6c032094ba3df4a4db4f95aff73b287e150eda6239fbe5049ec50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Sama/Default/ajouterPatient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19d9e522e6c6c032094ba3df4a4db4f95aff73b287e150eda6239fbe5049ec50->leave($__internal_19d9e522e6c6c032094ba3df4a4db4f95aff73b287e150eda6239fbe5049ec50_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed53c897cd434f4def959864a1ed8baf0dd59958d98dad2b024dbe37277332e4 = $this->env->getExtension("native_profiler");
        $__internal_ed53c897cd434f4def959864a1ed8baf0dd59958d98dad2b024dbe37277332e4->enter($__internal_ed53c897cd434f4def959864a1ed8baf0dd59958d98dad2b024dbe37277332e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <button type=\"submit\">Valider </button>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_ed53c897cd434f4def959864a1ed8baf0dd59958d98dad2b024dbe37277332e4->leave($__internal_ed53c897cd434f4def959864a1ed8baf0dd59958d98dad2b024dbe37277332e4_prof);

    }

    public function getTemplateName()
    {
        return "@Sama/Default/ajouterPatient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     <button type="submit">Valider </button>*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
