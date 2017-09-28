<?php

/* ordonnance/show.html.twig */
class __TwigTemplate_83fbf18cd88ded2c90b48fa861f872e1bcf39075c1ec2f1b6757753969fb99e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ordonnance/show.html.twig", 1);
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
        $__internal_8b49ba467974b15d4582daf150f93220eb85d2a808ae3aa9f94d68ac548f23c0 = $this->env->getExtension("native_profiler");
        $__internal_8b49ba467974b15d4582daf150f93220eb85d2a808ae3aa9f94d68ac548f23c0->enter($__internal_8b49ba467974b15d4582daf150f93220eb85d2a808ae3aa9f94d68ac548f23c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ordonnance/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b49ba467974b15d4582daf150f93220eb85d2a808ae3aa9f94d68ac548f23c0->leave($__internal_8b49ba467974b15d4582daf150f93220eb85d2a808ae3aa9f94d68ac548f23c0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_13b341067fa26d1ea25258ad34788d82510d21f57784cf16be770798457e84ea = $this->env->getExtension("native_profiler");
        $__internal_13b341067fa26d1ea25258ad34788d82510d21f57784cf16be770798457e84ea->enter($__internal_13b341067fa26d1ea25258ad34788d82510d21f57784cf16be770798457e84ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Ordonnance</h1>

    <table class=\"table table-responsive table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ordonnance"]) ? $context["ordonnance"] : $this->getContext($context, "ordonnance")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 17
        if ($this->getAttribute((isset($context["ordonnance"]) ? $context["ordonnance"] : $this->getContext($context, "ordonnance")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ordonnance"]) ? $context["ordonnance"] : $this->getContext($context, "ordonnance")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("ordonnance_index");
        echo "\" role=\"button\">Retour</a>
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordonnance_edit", array("id" => $this->getAttribute((isset($context["ordonnance"]) ? $context["ordonnance"] : $this->getContext($context, "ordonnance")), "id", array()))), "html", null, true);
        // line 25
        echo "\" role=\"button\">Modifier</a>
    </ul>
    <ul>
        ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-outline-danger btn-sm\" type=\"submit\" value=\"Supprimer\">
            ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </ul>
</div>
";
        
        $__internal_13b341067fa26d1ea25258ad34788d82510d21f57784cf16be770798457e84ea->leave($__internal_13b341067fa26d1ea25258ad34788d82510d21f57784cf16be770798457e84ea_prof);

    }

    public function getTemplateName()
    {
        return "ordonnance/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 30,  83 => 28,  78 => 25,  76 => 24,  72 => 23,  61 => 17,  54 => 13,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Ordonnance</h1>*/
/* */
/*     <table class="table table-responsive table-hover">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ ordonnance.id}}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Date</th>*/
/*                 <td>{% if ordonnance.date %}{{ ordonnance.date|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*             <a class="btn btn-success btn-sm" href="{{ path('ordonnance_index') }}" role="button">Retour</a>*/
/*             <a class="btn btn-success btn-sm" href="{{ path('ordonnance_edit', { 'id': ordonnance.id })*/
/*             }}" role="button">Modifier</a>*/
/*     </ul>*/
/*     <ul>*/
/*         {{ form_start(delete_form) }}*/
/*                 <input class="btn btn-outline-danger btn-sm" type="submit" value="Supprimer">*/
/*             {{ form_end(delete_form) }}*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
