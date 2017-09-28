<?php

/* :medecin:show.html.twig */
class __TwigTemplate_1c49dc97b64a07532d14c5122582046024b954fb158e130f8cd9651d8b2789e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":medecin:show.html.twig", 1);
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
        $__internal_149aa434abe5da8232c47e4f279801e723484f7300e7f9c54d844e5674adb892 = $this->env->getExtension("native_profiler");
        $__internal_149aa434abe5da8232c47e4f279801e723484f7300e7f9c54d844e5674adb892->enter($__internal_149aa434abe5da8232c47e4f279801e723484f7300e7f9c54d844e5674adb892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":medecin:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_149aa434abe5da8232c47e4f279801e723484f7300e7f9c54d844e5674adb892->leave($__internal_149aa434abe5da8232c47e4f279801e723484f7300e7f9c54d844e5674adb892_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd47f3b2f6c4aeed653419537fea2a5d2d2a999326bd1fe1651cba983cdcb5e3 = $this->env->getExtension("native_profiler");
        $__internal_cd47f3b2f6c4aeed653419537fea2a5d2d2a999326bd1fe1651cba983cdcb5e3->enter($__internal_cd47f3b2f6c4aeed653419537fea2a5d2d2a999326bd1fe1651cba983cdcb5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cd47f3b2f6c4aeed653419537fea2a5d2d2a999326bd1fe1651cba983cdcb5e3->leave($__internal_cd47f3b2f6c4aeed653419537fea2a5d2d2a999326bd1fe1651cba983cdcb5e3_prof);

    }

    public function getTemplateName()
    {
        return ":medecin:show.html.twig";
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
