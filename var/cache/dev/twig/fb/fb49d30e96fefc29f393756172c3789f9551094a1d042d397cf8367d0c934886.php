<?php

/* medecin/new.html.twig */
class __TwigTemplate_0aec9f593f20e40e7f04462357f3c9dcc444f5ec57f8712dfee8d55bca29dc89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "medecin/new.html.twig", 1);
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
        $__internal_3be88dd6f61c07a2b7f73b017b9745b272da2b13549fe99a6192be37ee680d3d = $this->env->getExtension("native_profiler");
        $__internal_3be88dd6f61c07a2b7f73b017b9745b272da2b13549fe99a6192be37ee680d3d->enter($__internal_3be88dd6f61c07a2b7f73b017b9745b272da2b13549fe99a6192be37ee680d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "medecin/new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3be88dd6f61c07a2b7f73b017b9745b272da2b13549fe99a6192be37ee680d3d->leave($__internal_3be88dd6f61c07a2b7f73b017b9745b272da2b13549fe99a6192be37ee680d3d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_73adaf31fc46fe7e10e1fd0c09dfa30deee8d532813f56e4500b83ea4f1fb78a = $this->env->getExtension("native_profiler");
        $__internal_73adaf31fc46fe7e10e1fd0c09dfa30deee8d532813f56e4500b83ea4f1fb78a->enter($__internal_73adaf31fc46fe7e10e1fd0c09dfa30deee8d532813f56e4500b83ea4f1fb78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"content-wrapper col-lg-3\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Medecin</h1>

    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <ul>
        <input class=\"btn btn-success btn-sm\" type=\"submit\" value=\"Ajouter\" />
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("medecin_index");
        // line 17
        echo "\" role=\"button\">Retour</a>

    </ul>
</div>
";
        
        $__internal_73adaf31fc46fe7e10e1fd0c09dfa30deee8d532813f56e4500b83ea4f1fb78a->leave($__internal_73adaf31fc46fe7e10e1fd0c09dfa30deee8d532813f56e4500b83ea4f1fb78a_prof);

    }

    public function getTemplateName()
    {
        return "medecin/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  68 => 16,  63 => 14,  57 => 11,  53 => 10,  46 => 6,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper col-lg-3">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Medecin</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*     <ul>*/
/*         <input class="btn btn-success btn-sm" type="submit" value="Ajouter" />*/
/*     {{ form_end(form) }}*/
/* */
/*             <a class="btn btn-success btn-sm" href="{{ path('medecin_index')*/
/*             }}" role="button">Retour</a>*/
/* */
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
