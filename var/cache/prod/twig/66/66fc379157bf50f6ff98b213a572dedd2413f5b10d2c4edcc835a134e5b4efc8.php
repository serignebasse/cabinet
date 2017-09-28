<?php

/* consultation/new.html.twig */
class __TwigTemplate_63d15fdecebf11abb774c8d7263abb87f0657048e654eadc2879f2f5eb82c208 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "consultation/new.html.twig", 1);
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
        $__internal_7e36cc49cb7e32b4e2b25d23a44122678289fe6f66a577394cbaa1df98bc7576 = $this->env->getExtension("native_profiler");
        $__internal_7e36cc49cb7e32b4e2b25d23a44122678289fe6f66a577394cbaa1df98bc7576->enter($__internal_7e36cc49cb7e32b4e2b25d23a44122678289fe6f66a577394cbaa1df98bc7576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "consultation/new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e36cc49cb7e32b4e2b25d23a44122678289fe6f66a577394cbaa1df98bc7576->leave($__internal_7e36cc49cb7e32b4e2b25d23a44122678289fe6f66a577394cbaa1df98bc7576_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e55909c37e89e0d481c0925520deba99dd01d0e0d740f17cd38bf7975b5994b = $this->env->getExtension("native_profiler");
        $__internal_2e55909c37e89e0d481c0925520deba99dd01d0e0d740f17cd38bf7975b5994b->enter($__internal_2e55909c37e89e0d481c0925520deba99dd01d0e0d740f17cd38bf7975b5994b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Nouvelle Consultation</h1>

    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <ul>
        <input class=\"btn btn-success btn-sm\" type=\"submit\" value=\"Valider\" />
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("consultation_index");
        // line 16
        echo "\" role=\"button\">Retour</a>
    </ul>
</div>
";
        
        $__internal_2e55909c37e89e0d481c0925520deba99dd01d0e0d740f17cd38bf7975b5994b->leave($__internal_2e55909c37e89e0d481c0925520deba99dd01d0e0d740f17cd38bf7975b5994b_prof);

    }

    public function getTemplateName()
    {
        return "consultation/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  67 => 15,  63 => 14,  57 => 11,  53 => 10,  46 => 6,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Nouvelle Consultation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*     <ul>*/
/*         <input class="btn btn-success btn-sm" type="submit" value="Valider" />*/
/*     {{ form_end(form) }}*/
/*             <a class="btn btn-success btn-sm" href="{{ path('consultation_index')*/
/*             }}" role="button">Retour</a>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
