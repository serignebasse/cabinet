<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_18c9054cc64a0908d224d627997bd3b99a3c77ba1f7c6985f3a2faf1d2bb07aa extends Twig_Template
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
        $__internal_857c564cb3f42e800da297c2c81e559eacaa82084532cf5f7efbc37fe9b3d051 = $this->env->getExtension("native_profiler");
        $__internal_857c564cb3f42e800da297c2c81e559eacaa82084532cf5f7efbc37fe9b3d051->enter($__internal_857c564cb3f42e800da297c2c81e559eacaa82084532cf5f7efbc37fe9b3d051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_857c564cb3f42e800da297c2c81e559eacaa82084532cf5f7efbc37fe9b3d051->leave($__internal_857c564cb3f42e800da297c2c81e559eacaa82084532cf5f7efbc37fe9b3d051_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
