<?php

/* medecin/show.html.twig */
class __TwigTemplate_b603e1c9801c1dcf7b15e97f30d0f59e998bfce6f66a6d8d569668a1de7e95d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "medecin/show.html.twig", 1);
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
        $__internal_e570d26b21a2c06f533cfffb8a4225c2c867e0dd6d47819612574b8de8d242ef = $this->env->getExtension("native_profiler");
        $__internal_e570d26b21a2c06f533cfffb8a4225c2c867e0dd6d47819612574b8de8d242ef->enter($__internal_e570d26b21a2c06f533cfffb8a4225c2c867e0dd6d47819612574b8de8d242ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "medecin/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e570d26b21a2c06f533cfffb8a4225c2c867e0dd6d47819612574b8de8d242ef->leave($__internal_e570d26b21a2c06f533cfffb8a4225c2c867e0dd6d47819612574b8de8d242ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4158d3d0e0c9629e11cd8bf409801f598fc238f6bafddb9a800dc9f98d38f71 = $this->env->getExtension("native_profiler");
        $__internal_f4158d3d0e0c9629e11cd8bf409801f598fc238f6bafddb9a800dc9f98d38f71->enter($__internal_f4158d3d0e0c9629e11cd8bf409801f598fc238f6bafddb9a800dc9f98d38f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Medecin</h1>

    <table class=\"table table-responsive table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Addresse</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "addresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Télèphone</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "sexe", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cabinet</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "cabinet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Specialité</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "specialite", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>

            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("medecin_index");
        echo "\" role=\"button\">Retour</a>

            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medecin_edit", array("id" => $this->getAttribute(        // line 55
(isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "id", array()))), "html", null, true);
        echo "\" role=\"button\">Modifier</a>
    </ul>
    <ul>
            ";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-outline-danger btn-sm\" type=\"submit\" value=\"Supprimer\">
            ";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

    </ul>
</div>
";
        
        $__internal_f4158d3d0e0c9629e11cd8bf409801f598fc238f6bafddb9a800dc9f98d38f71->leave($__internal_f4158d3d0e0c9629e11cd8bf409801f598fc238f6bafddb9a800dc9f98d38f71_prof);

    }

    public function getTemplateName()
    {
        return "medecin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 60,  132 => 58,  126 => 55,  125 => 54,  120 => 52,  110 => 45,  103 => 41,  96 => 37,  89 => 33,  82 => 29,  75 => 25,  68 => 21,  61 => 17,  54 => 13,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Medecin</h1>*/
/* */
/*     <table class="table table-responsive table-hover">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ medecin.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ medecin.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prenom</th>*/
/*                 <td>{{ medecin.prenom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Addresse</th>*/
/*                 <td>{{ medecin.addresse }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ medecin.email }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Télèphone</th>*/
/*                 <td>{{ medecin.telephone }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Sexe</th>*/
/*                 <td>{{ medecin.sexe }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cabinet</th>*/
/*                 <td>{{ medecin.cabinet }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Specialité</th>*/
/*                 <td>{{ medecin.specialite }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/* */
/*             <a class="btn btn-success btn-sm" href="{{ path('medecin_index') }}" role="button">Retour</a>*/
/* */
/*             <a class="btn btn-success btn-sm" href="{{ path('medecin_edit',*/
/*             { 'id': medecin.id }) }}" role="button">Modifier</a>*/
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
