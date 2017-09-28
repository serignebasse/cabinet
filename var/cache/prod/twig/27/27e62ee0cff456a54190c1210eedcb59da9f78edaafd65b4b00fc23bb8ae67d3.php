<?php

/* rendezvous/new.html.twig */
class __TwigTemplate_95c54f285fd12f57a65061f88579e6320b52d6ca0a9138849fc3df6f315f4f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rendezvous/new.html.twig", 1);
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
        $__internal_b21bfbcbbd3b3a37ce42b09fae2a62c40ee5aa966bb29163c649d73af5c0c42a = $this->env->getExtension("native_profiler");
        $__internal_b21bfbcbbd3b3a37ce42b09fae2a62c40ee5aa966bb29163c649d73af5c0c42a->enter($__internal_b21bfbcbbd3b3a37ce42b09fae2a62c40ee5aa966bb29163c649d73af5c0c42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rendezvous/new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b21bfbcbbd3b3a37ce42b09fae2a62c40ee5aa966bb29163c649d73af5c0c42a->leave($__internal_b21bfbcbbd3b3a37ce42b09fae2a62c40ee5aa966bb29163c649d73af5c0c42a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c3d30d4f310cf4a2676d439b4d2cf6cf7da3946c37c78edfd9011306d2b3d2c = $this->env->getExtension("native_profiler");
        $__internal_5c3d30d4f310cf4a2676d439b4d2cf6cf7da3946c37c78edfd9011306d2b3d2c->enter($__internal_5c3d30d4f310cf4a2676d439b4d2cf6cf7da3946c37c78edfd9011306d2b3d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"content-wrapper\">
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Programmer un Rendez vous</h1>

    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <ul>
            <input  class=\"btn btn-success btn-sm\" type=\"submit\" value=\"Valider\" />
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            <a  class=\"btn btn-success btn-sm\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("rendezvous_index");
        echo "\" role=\"button\">Retour</a>
    </ul>
    </div>
";
        
        $__internal_5c3d30d4f310cf4a2676d439b4d2cf6cf7da3946c37c78edfd9011306d2b3d2c->leave($__internal_5c3d30d4f310cf4a2676d439b4d2cf6cf7da3946c37c78edfd9011306d2b3d2c_prof);

    }

    public function getTemplateName()
    {
        return "rendezvous/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  63 => 14,  57 => 11,  53 => 10,  46 => 6,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="content-wrapper">*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Programmer un Rendez vous</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <ul>*/
/*             <input  class="btn btn-success btn-sm" type="submit" value="Valider" />*/
/*     {{ form_end(form) }}*/
/* */
/*             <a  class="btn btn-success btn-sm" href="{{ path('rendezvous_index') }}" role="button">Retour</a>*/
/*     </ul>*/
/*     </div>*/
/* {% endblock %}*/
/* */
