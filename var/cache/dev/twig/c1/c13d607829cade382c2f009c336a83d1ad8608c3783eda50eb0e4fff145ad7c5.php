<?php

/* :consultation:new.html.twig */
class __TwigTemplate_bff27f162da0f1ef4c019b3de028dfff8f7290f2abb31336debf0360a8b37b31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":consultation:new.html.twig", 1);
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
        $__internal_e878a6752c4af4a559e5f35b1f67b2af58b05800f0431c0bfbb3417152dffb7d = $this->env->getExtension("native_profiler");
        $__internal_e878a6752c4af4a559e5f35b1f67b2af58b05800f0431c0bfbb3417152dffb7d->enter($__internal_e878a6752c4af4a559e5f35b1f67b2af58b05800f0431c0bfbb3417152dffb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":consultation:new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e878a6752c4af4a559e5f35b1f67b2af58b05800f0431c0bfbb3417152dffb7d->leave($__internal_e878a6752c4af4a559e5f35b1f67b2af58b05800f0431c0bfbb3417152dffb7d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2d3480ba55129de7a7f624e1ef54f7b04b804604eb996302d12a9f70809f189 = $this->env->getExtension("native_profiler");
        $__internal_e2d3480ba55129de7a7f624e1ef54f7b04b804604eb996302d12a9f70809f189->enter($__internal_e2d3480ba55129de7a7f624e1ef54f7b04b804604eb996302d12a9f70809f189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"content-wrapper col-lg-5\">
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
        
        $__internal_e2d3480ba55129de7a7f624e1ef54f7b04b804604eb996302d12a9f70809f189->leave($__internal_e2d3480ba55129de7a7f624e1ef54f7b04b804604eb996302d12a9f70809f189_prof);

    }

    public function getTemplateName()
    {
        return ":consultation:new.html.twig";
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
/* <div class="content-wrapper col-lg-5">*/
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
