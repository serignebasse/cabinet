<?php

/* :medicament:new.html.twig */
class __TwigTemplate_7034c1cc02303abda45942bbc8031fa061d2f9b4e9132c8e1ffd46b6d68a9f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":medicament:new.html.twig", 1);
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
        $__internal_5f01796438a1220102496590f5767e69c79de583a21c46351f477b404696b980 = $this->env->getExtension("native_profiler");
        $__internal_5f01796438a1220102496590f5767e69c79de583a21c46351f477b404696b980->enter($__internal_5f01796438a1220102496590f5767e69c79de583a21c46351f477b404696b980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":medicament:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f01796438a1220102496590f5767e69c79de583a21c46351f477b404696b980->leave($__internal_5f01796438a1220102496590f5767e69c79de583a21c46351f477b404696b980_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a80cf1978880605f06c8e49aa53eddc986875fb14331911ce5ec9bc3bd62ebe = $this->env->getExtension("native_profiler");
        $__internal_5a80cf1978880605f06c8e49aa53eddc986875fb14331911ce5ec9bc3bd62ebe->enter($__internal_5a80cf1978880605f06c8e49aa53eddc986875fb14331911ce5ec9bc3bd62ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"content-wrapper col-lg-4\">
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

        <h1>Nouveau Medicament</h1>

    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <ul>
        <input class=\"btn btn-success btn-sm\" type=\"submit\" value=\"Ajouter\" />
    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("medicament_index");
        echo "\" role=\"button\">Retour</a>

    </ul>
    </div>
";
        
        $__internal_5a80cf1978880605f06c8e49aa53eddc986875fb14331911ce5ec9bc3bd62ebe->leave($__internal_5a80cf1978880605f06c8e49aa53eddc986875fb14331911ce5ec9bc3bd62ebe_prof);

    }

    public function getTemplateName()
    {
        return ":medicament:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  60 => 13,  54 => 10,  50 => 9,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="content-wrapper col-lg-4">*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*         <h1>Nouveau Medicament</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <ul>*/
/*         <input class="btn btn-success btn-sm" type="submit" value="Ajouter" />*/
/*     {{ form_end(form) }}*/
/*             <a class="btn btn-success btn-sm" href="{{ path('medicament_index') }}" role="button">Retour</a>*/
/* */
/*     </ul>*/
/*     </div>*/
/* {% endblock %}*/
/* */
