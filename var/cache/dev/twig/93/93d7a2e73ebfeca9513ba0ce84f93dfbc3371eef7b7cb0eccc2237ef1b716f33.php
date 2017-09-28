<?php

/* secretaire/show.html.twig */
class __TwigTemplate_9a6e4af693bba3a89c9c139625a7d96c8fde00e5f4737223c5aa960257b809d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "secretaire/show.html.twig", 1);
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
        $__internal_a3fd145095a04d1002b9b38df22be7fded9a695f967ca7043683efd037cd4fc6 = $this->env->getExtension("native_profiler");
        $__internal_a3fd145095a04d1002b9b38df22be7fded9a695f967ca7043683efd037cd4fc6->enter($__internal_a3fd145095a04d1002b9b38df22be7fded9a695f967ca7043683efd037cd4fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "secretaire/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3fd145095a04d1002b9b38df22be7fded9a695f967ca7043683efd037cd4fc6->leave($__internal_a3fd145095a04d1002b9b38df22be7fded9a695f967ca7043683efd037cd4fc6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4f5cd5e6a5e1450e151d3f76d7e2a6d826f8f0bfd4b86148cfa14bbbab11398 = $this->env->getExtension("native_profiler");
        $__internal_c4f5cd5e6a5e1450e151d3f76d7e2a6d826f8f0bfd4b86148cfa14bbbab11398->enter($__internal_c4f5cd5e6a5e1450e151d3f76d7e2a6d826f8f0bfd4b86148cfa14bbbab11398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper col-lg-3\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <h1>Secretaire</h1>

    <table class=\"table table-responsive table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["secretaire"]) ? $context["secretaire"] : $this->getContext($context, "secretaire")), "idsecretaire", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["secretaire"]) ? $context["secretaire"] : $this->getContext($context, "secretaire")), "nomsecretaire", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["secretaire"]) ? $context["secretaire"] : $this->getContext($context, "secretaire")), "prenomsecretaire", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Téléphone</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["secretaire"]) ? $context["secretaire"] : $this->getContext($context, "secretaire")), "telsecretaire", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["secretaire"]) ? $context["secretaire"] : $this->getContext($context, "secretaire")), "emailsecretaire", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["secretaire"]) ? $context["secretaire"] : $this->getContext($context, "secretaire")), "sexesecretaire", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Addresse</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["secretaire"]) ? $context["secretaire"] : $this->getContext($context, "secretaire")), "addressesecretaire", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <a class=\"btn btn-success btn-sm\" href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("secretaire_index");
        echo "\" role=\"button\">Retour</a>
        <a class=\"btn btn-success btn-sm\"  href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("secretaire_edit", array("id" => $this->getAttribute(        // line 44
(isset($context["secretaire"]) ? $context["secretaire"] : $this->getContext($context, "secretaire")), "idsecretaire", array()))), "html", null, true);
        echo "\">Modifier</a>
    </ul>
    <ul>
        ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input  class=\"btn btn-outline-danger btn-sm\" type=\"submit\" value=\"Supprimer\">
        ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </ul>
</div>
";
        
        $__internal_c4f5cd5e6a5e1450e151d3f76d7e2a6d826f8f0bfd4b86148cfa14bbbab11398->leave($__internal_c4f5cd5e6a5e1450e151d3f76d7e2a6d826f8f0bfd4b86148cfa14bbbab11398_prof);

    }

    public function getTemplateName()
    {
        return "secretaire/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 49,  115 => 47,  109 => 44,  108 => 43,  104 => 42,  95 => 36,  88 => 32,  81 => 28,  74 => 24,  67 => 20,  60 => 16,  53 => 12,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper col-lg-3">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/*     <h1>Secretaire</h1>*/
/* */
/*     <table class="table table-responsive table-hover">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ secretaire.idsecretaire }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ secretaire.nomsecretaire }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prenom</th>*/
/*                 <td>{{ secretaire.prenomsecretaire }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Téléphone</th>*/
/*                 <td>{{ secretaire.telsecretaire }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ secretaire.emailsecretaire }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Sexe</th>*/
/*                 <td>{{ secretaire.sexesecretaire }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Addresse</th>*/
/*                 <td>{{ secretaire.addressesecretaire }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <a class="btn btn-success btn-sm" href="{{ path('secretaire_index') }}" role="button">Retour</a>*/
/*         <a class="btn btn-success btn-sm"  href="{{ path('secretaire_edit',*/
/*         { 'id': secretaire.idsecretaire }) }}">Modifier</a>*/
/*     </ul>*/
/*     <ul>*/
/*         {{ form_start(delete_form) }}*/
/*         <input  class="btn btn-outline-danger btn-sm" type="submit" value="Supprimer">*/
/*         {{ form_end(delete_form) }}*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
