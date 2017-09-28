<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5df38b9460f857a65388403dc9975aeb36cf390ac08bf6977e69578247c22c1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_416f752c7d4e325a653a8b3a85944b35b045a3d393462c968f8bef8510b71b1e = $this->env->getExtension("native_profiler");
        $__internal_416f752c7d4e325a653a8b3a85944b35b045a3d393462c968f8bef8510b71b1e->enter($__internal_416f752c7d4e325a653a8b3a85944b35b045a3d393462c968f8bef8510b71b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_416f752c7d4e325a653a8b3a85944b35b045a3d393462c968f8bef8510b71b1e->leave($__internal_416f752c7d4e325a653a8b3a85944b35b045a3d393462c968f8bef8510b71b1e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
