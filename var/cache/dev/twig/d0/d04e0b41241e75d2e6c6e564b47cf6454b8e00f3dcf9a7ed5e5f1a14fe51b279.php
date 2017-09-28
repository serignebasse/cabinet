<?php

/* ordonnance/new.html.twig */
class __TwigTemplate_d8523f740ef8661002941f1d8232fa68c027d3c9d71b898771429793d9e73ff4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ordonnance/new.html.twig", 1);
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
        $__internal_e77dcffc579273df67e1d985ab4936fa890e77ddc40c7a96d7c7cfd9a0bb8e26 = $this->env->getExtension("native_profiler");
        $__internal_e77dcffc579273df67e1d985ab4936fa890e77ddc40c7a96d7c7cfd9a0bb8e26->enter($__internal_e77dcffc579273df67e1d985ab4936fa890e77ddc40c7a96d7c7cfd9a0bb8e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ordonnance/new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e77dcffc579273df67e1d985ab4936fa890e77ddc40c7a96d7c7cfd9a0bb8e26->leave($__internal_e77dcffc579273df67e1d985ab4936fa890e77ddc40c7a96d7c7cfd9a0bb8e26_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_645a0a6d221e584777731f0c1e951ff0bba95346325961b0b26a8d188d5641fd = $this->env->getExtension("native_profiler");
        $__internal_645a0a6d221e584777731f0c1e951ff0bba95346325961b0b26a8d188d5641fd->enter($__internal_645a0a6d221e584777731f0c1e951ff0bba95346325961b0b26a8d188d5641fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <div class=\"content-wrapper col-lg-4\" >
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">



    <h1>Prescrire Ordonnance</h1>

    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <ul>
        <input class=\"btn btn-success btn-sm\" type=\"submit\" value=\"Valider\" />
    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("ordonnance_index");
        echo "\" role=\"button\">Retour</a>

    </ul>

</div>

";
        
        $__internal_645a0a6d221e584777731f0c1e951ff0bba95346325961b0b26a8d188d5641fd->leave($__internal_645a0a6d221e584777731f0c1e951ff0bba95346325961b0b26a8d188d5641fd_prof);

    }

    public function getTemplateName()
    {
        return "ordonnance/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  66 => 17,  60 => 14,  56 => 13,  47 => 7,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="content-wrapper col-lg-4" >*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/* */
/* */
/*     <h1>Prescrire Ordonnance</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     <ul>*/
/*         <input class="btn btn-success btn-sm" type="submit" value="Valider" />*/
/*     {{ form_end(form) }}*/
/*             <a class="btn btn-success btn-sm" href="{{ path('ordonnance_index') }}" role="button">Retour</a>*/
/* */
/*     </ul>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
