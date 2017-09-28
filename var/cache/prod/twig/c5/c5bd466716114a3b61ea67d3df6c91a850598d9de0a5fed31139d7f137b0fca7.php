<?php

/* ordonnance/index.html.twig */
class __TwigTemplate_c3ca5b09cf8b0b41c83763e23cedd18184d5feae4063632817e914afa40d0fb6 extends Twig_Template
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
        $__internal_fb2d630e60a472280368cc4c2922935743aa42cd05a54936c1818e2bc6bbe7b5 = $this->env->getExtension("native_profiler");
        $__internal_fb2d630e60a472280368cc4c2922935743aa42cd05a54936c1818e2bc6bbe7b5->enter($__internal_fb2d630e60a472280368cc4c2922935743aa42cd05a54936c1818e2bc6bbe7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ordonnance/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb2d630e60a472280368cc4c2922935743aa42cd05a54936c1818e2bc6bbe7b5->leave($__internal_fb2d630e60a472280368cc4c2922935743aa42cd05a54936c1818e2bc6bbe7b5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f5728f3d103bf66753f7227c39f331dbc3d6e7007624a7355608df28c6499e1 = $this->env->getExtension("native_profiler");
        $__internal_0f5728f3d103bf66753f7227c39f331dbc3d6e7007624a7355608df28c6499e1->enter($__internal_0f5728f3d103bf66753f7227c39f331dbc3d6e7007624a7355608df28c6499e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content-wrapper\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <h1>Ordonnance list</h1>

    <table>
        <thead>
            <tr>
                <th>Idordonn</th>
                <th>Dateordonn</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ordonnances"]) ? $context["ordonnances"] : $this->getContext($context, "ordonnances")));
        foreach ($context['_seq'] as $context["_key"] => $context["ordonnance"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordonnance_show", array("id" => $this->getAttribute($context["ordonnance"], "idordonn", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ordonnance"], "idordonn", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            if ($this->getAttribute($context["ordonnance"], "dateordonn", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ordonnance"], "dateordonn", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordonnance_show", array("id" => $this->getAttribute($context["ordonnance"], "idordonn", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ordonnance_edit", array("id" => $this->getAttribute($context["ordonnance"], "idordonn", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
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
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("ordonnance_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
</div>
";
        
        $__internal_0f5728f3d103bf66753f7227c39f331dbc3d6e7007624a7355608df28c6499e1->leave($__internal_0f5728f3d103bf66753f7227c39f331dbc3d6e7007624a7355608df28c6499e1_prof);

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
        return array (  105 => 38,  98 => 33,  86 => 27,  80 => 24,  71 => 20,  65 => 19,  62 => 18,  58 => 17,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="content-wrapper">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/*     <h1>Ordonnance list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idordonn</th>*/
/*                 <th>Dateordonn</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for ordonnance in ordonnances %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('ordonnance_show', { 'id': ordonnance.idordonn }) }}">{{ ordonnance.idordonn }}</a></td>*/
/*                 <td>{% if ordonnance.dateordonn %}{{ ordonnance.dateordonn|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('ordonnance_show', { 'id': ordonnance.idordonn }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('ordonnance_edit', { 'id': ordonnance.idordonn }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ordonnance_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
