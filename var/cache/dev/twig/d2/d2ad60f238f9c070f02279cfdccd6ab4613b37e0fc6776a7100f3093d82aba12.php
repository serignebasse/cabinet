<?php

/* :rendezvous:show.html.twig */
class __TwigTemplate_9be0f9c497751865295ff814a0e89d3c84c0bc7871ac08e36c3de77a4c84ca83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":rendezvous:show.html.twig", 1);
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
        $__internal_49e0cccac5d29401ed1bb6226cd5bafa06655823ae4a2ae3f16d6f53c9107443 = $this->env->getExtension("native_profiler");
        $__internal_49e0cccac5d29401ed1bb6226cd5bafa06655823ae4a2ae3f16d6f53c9107443->enter($__internal_49e0cccac5d29401ed1bb6226cd5bafa06655823ae4a2ae3f16d6f53c9107443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rendezvous:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49e0cccac5d29401ed1bb6226cd5bafa06655823ae4a2ae3f16d6f53c9107443->leave($__internal_49e0cccac5d29401ed1bb6226cd5bafa06655823ae4a2ae3f16d6f53c9107443_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1269bac97fe002c05a3b81136705ce596b91e21a5ed37719399d8c8d98d56f5 = $this->env->getExtension("native_profiler");
        $__internal_d1269bac97fe002c05a3b81136705ce596b91e21a5ed37719399d8c8d98d56f5->enter($__internal_d1269bac97fe002c05a3b81136705ce596b91e21a5ed37719399d8c8d98d56f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper \">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Rendez-vous</h1>

    <table class=\"table table-responsive table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rendezvous"]) ? $context["rendezvous"] : $this->getContext($context, "rendezvous")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date du rendez-vous</th>
                <td>";
        // line 17
        if ($this->getAttribute((isset($context["rendezvous"]) ? $context["rendezvous"] : $this->getContext($context, "rendezvous")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["rendezvous"]) ? $context["rendezvous"] : $this->getContext($context, "rendezvous")), "date", array()), "d-M-y H:m"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fréquence</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rendezvous"]) ? $context["rendezvous"] : $this->getContext($context, "rendezvous")), "frequence", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>

            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("rendezvous_index");
        echo "\"
            role=\"button\">Retour</a>

            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rendezvous_edit", array("id" => $this->getAttribute((isset($context["rendezvous"]) ? $context["rendezvous"] : $this->getContext($context, "rendezvous")), "id", array()))), "html", null, true);
        // line 32
        echo "\" role=\"button\">Modifier</a>
    </ul>
    <ul>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input  class=\"btn btn-outline-danger btn-sm\" type=\"submit\" value=\"Supprimer\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

    </ul>
</div>
";
        
        $__internal_d1269bac97fe002c05a3b81136705ce596b91e21a5ed37719399d8c8d98d56f5->leave($__internal_d1269bac97fe002c05a3b81136705ce596b91e21a5ed37719399d8c8d98d56f5_prof);

    }

    public function getTemplateName()
    {
        return ":rendezvous:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  93 => 35,  88 => 32,  86 => 31,  80 => 28,  70 => 21,  61 => 17,  54 => 13,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper ">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Rendez-vous</h1>*/
/* */
/*     <table class="table table-responsive table-hover">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ rendezvous.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Date du rendez-vous</th>*/
/*                 <td>{% if rendezvous.date %}{{ rendezvous.date|date('d-M-y H:m') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fréquence</th>*/
/*                 <td>{{ rendezvous.frequence }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/* */
/*             <a class="btn btn-success btn-sm" href="{{ path('rendezvous_index') }}"*/
/*             role="button">Retour</a>*/
/* */
/*             <a class="btn btn-success btn-sm" href="{{ path('rendezvous_edit', { 'id': rendezvous.id })*/
/*             }}" role="button">Modifier</a>*/
/*     </ul>*/
/*     <ul>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input  class="btn btn-outline-danger btn-sm" type="submit" value="Supprimer">*/
/*             {{ form_end(delete_form) }}*/
/* */
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
