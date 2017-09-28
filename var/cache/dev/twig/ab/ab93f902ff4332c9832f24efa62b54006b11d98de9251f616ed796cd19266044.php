<?php

/* basse.html.twig */
class __TwigTemplate_3771c380b635d35427a63c706332ca11c2cf13490c6c399823dfa07f24d92dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a31526b25271cef6f7078c0f707da792a82b231a0874786508b55e99f951eda6 = $this->env->getExtension("native_profiler");
        $__internal_a31526b25271cef6f7078c0f707da792a82b231a0874786508b55e99f951eda6->enter($__internal_a31526b25271cef6f7078c0f707da792a82b231a0874786508b55e99f951eda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basse.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "</body>
</html>
";
        
        $__internal_a31526b25271cef6f7078c0f707da792a82b231a0874786508b55e99f951eda6->leave($__internal_a31526b25271cef6f7078c0f707da792a82b231a0874786508b55e99f951eda6_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_266e1b8315592951f7a875c638a787082542d22d017ddfdba05a55010dcaac55 = $this->env->getExtension("native_profiler");
        $__internal_266e1b8315592951f7a875c638a787082542d22d017ddfdba05a55010dcaac55->enter($__internal_266e1b8315592951f7a875c638a787082542d22d017ddfdba05a55010dcaac55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_266e1b8315592951f7a875c638a787082542d22d017ddfdba05a55010dcaac55->leave($__internal_266e1b8315592951f7a875c638a787082542d22d017ddfdba05a55010dcaac55_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_99ef25e62389de6d136ed673d6c6b4050b54e364094b310027be9ae915f9812b = $this->env->getExtension("native_profiler");
        $__internal_99ef25e62389de6d136ed673d6c6b4050b54e364094b310027be9ae915f9812b->enter($__internal_99ef25e62389de6d136ed673d6c6b4050b54e364094b310027be9ae915f9812b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_99ef25e62389de6d136ed673d6c6b4050b54e364094b310027be9ae915f9812b->leave($__internal_99ef25e62389de6d136ed673d6c6b4050b54e364094b310027be9ae915f9812b_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f4987e952926e40d4adc76c8ea2741fa19df38b2e059ace70615f77c147d5668 = $this->env->getExtension("native_profiler");
        $__internal_f4987e952926e40d4adc76c8ea2741fa19df38b2e059ace70615f77c147d5668->enter($__internal_f4987e952926e40d4adc76c8ea2741fa19df38b2e059ace70615f77c147d5668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f4987e952926e40d4adc76c8ea2741fa19df38b2e059ace70615f77c147d5668->leave($__internal_f4987e952926e40d4adc76c8ea2741fa19df38b2e059ace70615f77c147d5668_prof);

    }

    public function getTemplateName()
    {
        return "basse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 10,  64 => 9,  53 => 5,  44 => 11,  42 => 10,  40 => 9,  33 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* {% block body %}{% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
