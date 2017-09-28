<?php

/* ordonnance/index.html.twig */
class __TwigTemplate_6fe6bef6269544beb0a0603f3e493a252c52f9c4f42f8e506cc9205b24ab2fd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ordonnance/index.html.twig", 1);
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
        $__internal_da3b8fc4876d8c442d5dd3b2607a71555ec2ee044646774d533d7370daa7f88f = $this->env->getExtension("native_profiler");
        $__internal_da3b8fc4876d8c442d5dd3b2607a71555ec2ee044646774d533d7370daa7f88f->enter($__internal_da3b8fc4876d8c442d5dd3b2607a71555ec2ee044646774d533d7370daa7f88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ordonnance/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da3b8fc4876d8c442d5dd3b2607a71555ec2ee044646774d533d7370daa7f88f->leave($__internal_da3b8fc4876d8c442d5dd3b2607a71555ec2ee044646774d533d7370daa7f88f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f36dba8e60ccfe01de11e0678731447b33f0177b89b12b5b25ecc7c3a63e40b = $this->env->getExtension("native_profiler");
        $__internal_0f36dba8e60ccfe01de11e0678731447b33f0177b89b12b5b25ecc7c3a63e40b->enter($__internal_0f36dba8e60ccfe01de11e0678731447b33f0177b89b12b5b25ecc7c3a63e40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <h1>Liste des ordonnances</h1>

    <table  class=\"table table-sm table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ordonnances"]) ? $context["ordonnances"] : $this->getContext($context, "ordonnances")));
        foreach ($context['_seq'] as $context["_key"] => $context["ordonnance"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordonnance_show", array("id" => $this->getAttribute($context["ordonnance"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ordonnance"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            if ($this->getAttribute($context["ordonnance"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ordonnance"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                            <a class=\"btn btn-secondary btn-sm\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordonnance_show", array("id" => $this->getAttribute(            // line 25
$context["ordonnance"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">voir</a>
                            <a class=\"btn btn-success btn-sm\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordonnance_edit", array("id" => $this->getAttribute(            // line 27
$context["ordonnance"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">modifier</a>

                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ordonnance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
            <a class=\"btn btn-success btn-sm\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("ordonnance_new");
        echo "\" role=\"button\">Nouveau ordonnance</a>
    </ul>
</div>
";
        
        $__internal_0f36dba8e60ccfe01de11e0678731447b33f0177b89b12b5b25ecc7c3a63e40b->leave($__internal_0f36dba8e60ccfe01de11e0678731447b33f0177b89b12b5b25ecc7c3a63e40b_prof);

    }

    public function getTemplateName()
    {
        return "ordonnance/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 37,  98 => 33,  86 => 27,  85 => 26,  81 => 25,  80 => 24,  72 => 21,  66 => 20,  63 => 19,  59 => 18,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/* */
/*     <h1>Liste des ordonnances</h1>*/
/* */
/*     <table  class="table table-sm table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Date</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for ordonnance in ordonnances %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('ordonnance_show', { 'id': ordonnance.id }) }}">{{ ordonnance.id}}</a></td>*/
/*                 <td>{% if ordonnance.date %}{{ ordonnance.date|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                             <a class="btn btn-secondary btn-sm" href="{{ path('ordonnance_show',*/
/*                             { 'id': ordonnance.id }) }}" role="button">voir</a>*/
/*                             <a class="btn btn-success btn-sm" href="{{ path('ordonnance_edit',*/
/*                             { 'id': ordonnance.id }) }}" role="button">modifier</a>*/
/* */
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*             <a class="btn btn-success btn-sm" href="{{ path('ordonnance_new') }}" role="button">Nouveau ordonnance</a>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
