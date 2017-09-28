<?php

/* secretaire/new.html.twig */
class __TwigTemplate_9271ac503362a4fe2655c8e71f1f52bf88fa75de5ea97fd6681b66728aa416a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "secretaire/new.html.twig", 1);
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
        $__internal_dcc0d3643fd8bf086beb1df070239acfb8a79030c7d55ce16844ac2455a2a30b = $this->env->getExtension("native_profiler");
        $__internal_dcc0d3643fd8bf086beb1df070239acfb8a79030c7d55ce16844ac2455a2a30b->enter($__internal_dcc0d3643fd8bf086beb1df070239acfb8a79030c7d55ce16844ac2455a2a30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "secretaire/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcc0d3643fd8bf086beb1df070239acfb8a79030c7d55ce16844ac2455a2a30b->leave($__internal_dcc0d3643fd8bf086beb1df070239acfb8a79030c7d55ce16844ac2455a2a30b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_18942e36962f0862b3f1d69ddec04de9a97490dd2d2307024c7cf77411325f61 = $this->env->getExtension("native_profiler");
        $__internal_18942e36962f0862b3f1d69ddec04de9a97490dd2d2307024c7cf77411325f61->enter($__internal_18942e36962f0862b3f1d69ddec04de9a97490dd2d2307024c7cf77411325f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper col-lg-3\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Ajouter sécrétaire</h1>
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <ul>
       <input class=\"btn btn-success btn-sm\" type=\"submit\" value=\"Ajouter\" />
       ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        <a class=\"btn btn-success btn-sm\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("secretaire_index");
        // line 14
        echo "\" role=\"button\">Retour</a>
    </ul>
</div>

";
        
        $__internal_18942e36962f0862b3f1d69ddec04de9a97490dd2d2307024c7cf77411325f61->leave($__internal_18942e36962f0862b3f1d69ddec04de9a97490dd2d2307024c7cf77411325f61_prof);

    }

    public function getTemplateName()
    {
        return "secretaire/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  63 => 13,  59 => 12,  53 => 9,  49 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper col-lg-3">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Ajouter sécrétaire</h1>*/
/*         {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*     <ul>*/
/*        <input class="btn btn-success btn-sm" type="submit" value="Ajouter" />*/
/*        {{ form_end(form) }}*/
/*         <a class="btn btn-success btn-sm" href="{{ path('secretaire_index')*/
/*         }}" role="button">Retour</a>*/
/*     </ul>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
