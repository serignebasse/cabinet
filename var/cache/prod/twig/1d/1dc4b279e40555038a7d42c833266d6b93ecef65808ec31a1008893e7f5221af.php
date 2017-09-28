<?php

/* medecin/show.html.twig */
class __TwigTemplate_c6bef7d1a1c3f8b296ea4fd6a25e97c4301cde5551d7c7528bfdebcbcb3dd796 extends Twig_Template
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
        $__internal_e73b7fdb5aa6466c8b883c338aa9930a5038b23ad50960bb25ee6a0f8abe6dbd = $this->env->getExtension("native_profiler");
        $__internal_e73b7fdb5aa6466c8b883c338aa9930a5038b23ad50960bb25ee6a0f8abe6dbd->enter($__internal_e73b7fdb5aa6466c8b883c338aa9930a5038b23ad50960bb25ee6a0f8abe6dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "medecin/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e73b7fdb5aa6466c8b883c338aa9930a5038b23ad50960bb25ee6a0f8abe6dbd->leave($__internal_e73b7fdb5aa6466c8b883c338aa9930a5038b23ad50960bb25ee6a0f8abe6dbd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f01d89a22f1668df491ea3476154cd627ed7436b14d500fac1019163856ae13 = $this->env->getExtension("native_profiler");
        $__internal_0f01d89a22f1668df491ea3476154cd627ed7436b14d500fac1019163856ae13->enter($__internal_0f01d89a22f1668df491ea3476154cd627ed7436b14d500fac1019163856ae13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0f01d89a22f1668df491ea3476154cd627ed7436b14d500fac1019163856ae13->leave($__internal_0f01d89a22f1668df491ea3476154cd627ed7436b14d500fac1019163856ae13_prof);

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
