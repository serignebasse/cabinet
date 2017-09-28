<?php

/* medicament/show.html.twig */
class __TwigTemplate_8c6984b0ccfb895482b0fddfc05e3d41df296a96d9379715c9e3d6c18f095f4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "medicament/show.html.twig", 1);
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
        $__internal_23a675f4233ea5526520a1e5049b314ca1b54672d41447ad94959bee8c710f96 = $this->env->getExtension("native_profiler");
        $__internal_23a675f4233ea5526520a1e5049b314ca1b54672d41447ad94959bee8c710f96->enter($__internal_23a675f4233ea5526520a1e5049b314ca1b54672d41447ad94959bee8c710f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "medicament/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23a675f4233ea5526520a1e5049b314ca1b54672d41447ad94959bee8c710f96->leave($__internal_23a675f4233ea5526520a1e5049b314ca1b54672d41447ad94959bee8c710f96_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_26e9c4427b2797b821f256459f7f0bdcdb142f8fc3e8a933a425e786da52b34c = $this->env->getExtension("native_profiler");
        $__internal_26e9c4427b2797b821f256459f7f0bdcdb142f8fc3e8a933a425e786da52b34c->enter($__internal_26e9c4427b2797b821f256459f7f0bdcdb142f8fc3e8a933a425e786da52b34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <h1>Medicament</h1>

    <table class=\"table table-responsive table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medicament"]) ? $context["medicament"] : $this->getContext($context, "medicament")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medicament"]) ? $context["medicament"] : $this->getContext($context, "medicament")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quantite</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medicament"]) ? $context["medicament"] : $this->getContext($context, "medicament")), "quantite", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medicament"]) ? $context["medicament"] : $this->getContext($context, "medicament")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("medicament_index");
        echo "\" role=\"button\">Retour</a>
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medicament_edit", array("id" => $this->getAttribute(        // line 32
(isset($context["medicament"]) ? $context["medicament"] : $this->getContext($context, "medicament")), "id", array()))), "html", null, true);
        echo "\" role=\"button\">Modifier</a>
    </ul>
    <ul>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-outline-danger btn-sm\" type=\"submit\" value=\"Supprimer\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

    </ul>
</div>
";
        
        $__internal_26e9c4427b2797b821f256459f7f0bdcdb142f8fc3e8a933a425e786da52b34c->leave($__internal_26e9c4427b2797b821f256459f7f0bdcdb142f8fc3e8a933a425e786da52b34c_prof);

    }

    public function getTemplateName()
    {
        return "medicament/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  94 => 35,  88 => 32,  87 => 31,  83 => 30,  74 => 24,  67 => 20,  60 => 16,  53 => 12,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/*     <h1>Medicament</h1>*/
/* */
/*     <table class="table table-responsive table-hover">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ medicament.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ medicament.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Quantite</th>*/
/*                 <td>{{ medicament.quantite }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Type</th>*/
/*                 <td>{{ medicament.type }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*             <a class="btn btn-success btn-sm" href="{{ path('medicament_index') }}" role="button">Retour</a>*/
/*             <a class="btn btn-success btn-sm" href="{{ path('medicament_edit',*/
/*             { 'id': medicament.id }) }}" role="button">Modifier</a>*/
/*     </ul>*/
/*     <ul>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input class="btn btn-outline-danger btn-sm" type="submit" value="Supprimer">*/
/*             {{ form_end(delete_form) }}*/
/* */
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
