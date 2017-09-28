<?php

/* analyse/new.html.twig */
class __TwigTemplate_1c8a74da822ae7f016752b13dc8d0ee236711092aaf7140996b4ee4cafb40d85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "analyse/new.html.twig", 1);
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
        $__internal_05c656e16f9a89587573ae813143644974497286800dccda09eda0f0230161b4 = $this->env->getExtension("native_profiler");
        $__internal_05c656e16f9a89587573ae813143644974497286800dccda09eda0f0230161b4->enter($__internal_05c656e16f9a89587573ae813143644974497286800dccda09eda0f0230161b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "analyse/new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05c656e16f9a89587573ae813143644974497286800dccda09eda0f0230161b4->leave($__internal_05c656e16f9a89587573ae813143644974497286800dccda09eda0f0230161b4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e38e9efb97793c78e7de087829895a898c5de65513ca6e14171db4217eeca14 = $this->env->getExtension("native_profiler");
        $__internal_6e38e9efb97793c78e7de087829895a898c5de65513ca6e14171db4217eeca14->enter($__internal_6e38e9efb97793c78e7de087829895a898c5de65513ca6e14171db4217eeca14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Fiche analyse</h1>

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
        echo $this->env->getExtension('routing')->getPath("analyse_index");
        echo "\" role=\"button\">Retour</a>
    </ul>
</div>
";
        
        $__internal_6e38e9efb97793c78e7de087829895a898c5de65513ca6e14171db4217eeca14->leave($__internal_6e38e9efb97793c78e7de087829895a898c5de65513ca6e14171db4217eeca14_prof);

    }

    public function getTemplateName()
    {
        return "analyse/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  63 => 14,  57 => 11,  53 => 10,  46 => 6,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Fiche analyse</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*     <ul>*/
/*     <input class="btn btn-success btn-sm" type="submit" value="Valider" />*/
/*     {{ form_end(form) }}*/
/*             <a class="btn btn-success btn-sm" href="{{ path('analyse_index') }}" role="button">Retour</a>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
