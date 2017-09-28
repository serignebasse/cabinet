<?php

/* medecin/new.html.twig */
class __TwigTemplate_d7af36a5c39e23c38c8b5d9bdaf5567228d9585e52c292a8151550e1c6bd989a extends Twig_Template
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
        $__internal_ef9086de5c1c7c7a52bacd16ceb0aae5711552579d82eb0b05634d37ed2ed7ac = $this->env->getExtension("native_profiler");
        $__internal_ef9086de5c1c7c7a52bacd16ceb0aae5711552579d82eb0b05634d37ed2ed7ac->enter($__internal_ef9086de5c1c7c7a52bacd16ceb0aae5711552579d82eb0b05634d37ed2ed7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "medecin/new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef9086de5c1c7c7a52bacd16ceb0aae5711552579d82eb0b05634d37ed2ed7ac->leave($__internal_ef9086de5c1c7c7a52bacd16ceb0aae5711552579d82eb0b05634d37ed2ed7ac_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bbcca8a1274c1cda123c531ab41cc45000e5112b3d5007058b139d21f4ad5bd = $this->env->getExtension("native_profiler");
        $__internal_4bbcca8a1274c1cda123c531ab41cc45000e5112b3d5007058b139d21f4ad5bd->enter($__internal_4bbcca8a1274c1cda123c531ab41cc45000e5112b3d5007058b139d21f4ad5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"content-wrapper\">
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
        
        $__internal_4bbcca8a1274c1cda123c531ab41cc45000e5112b3d5007058b139d21f4ad5bd->leave($__internal_4bbcca8a1274c1cda123c531ab41cc45000e5112b3d5007058b139d21f4ad5bd_prof);

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
/* <div class="content-wrapper">*/
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
