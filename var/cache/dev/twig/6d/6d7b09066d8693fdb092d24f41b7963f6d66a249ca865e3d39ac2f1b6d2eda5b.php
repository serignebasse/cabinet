<?php

/* ::base.html.twig */
class __TwigTemplate_41745215ea7e14d1dfbe332b73d495abddbe2249ccce784f688882815293fc4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b1a81b3f612a5d9a597ca4e25afb62f4f7ccc01f65c5191350c4b153aab4bf4 = $this->env->getExtension("native_profiler");
        $__internal_1b1a81b3f612a5d9a597ca4e25afb62f4f7ccc01f65c5191350c4b153aab4bf4->enter($__internal_1b1a81b3f612a5d9a597ca4e25afb62f4f7ccc01f65c5191350c4b153aab4bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1b1a81b3f612a5d9a597ca4e25afb62f4f7ccc01f65c5191350c4b153aab4bf4->leave($__internal_1b1a81b3f612a5d9a597ca4e25afb62f4f7ccc01f65c5191350c4b153aab4bf4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_42672b673531c2f863e705b31d3919c394b2c9ec89c24076c822f81901b6c89d = $this->env->getExtension("native_profiler");
        $__internal_42672b673531c2f863e705b31d3919c394b2c9ec89c24076c822f81901b6c89d->enter($__internal_42672b673531c2f863e705b31d3919c394b2c9ec89c24076c822f81901b6c89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_42672b673531c2f863e705b31d3919c394b2c9ec89c24076c822f81901b6c89d->leave($__internal_42672b673531c2f863e705b31d3919c394b2c9ec89c24076c822f81901b6c89d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a0e7f1cf3434f4d5b939bedd8b5f59442b976732335a29ab7c197c30e4ecb80 = $this->env->getExtension("native_profiler");
        $__internal_5a0e7f1cf3434f4d5b939bedd8b5f59442b976732335a29ab7c197c30e4ecb80->enter($__internal_5a0e7f1cf3434f4d5b939bedd8b5f59442b976732335a29ab7c197c30e4ecb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5a0e7f1cf3434f4d5b939bedd8b5f59442b976732335a29ab7c197c30e4ecb80->leave($__internal_5a0e7f1cf3434f4d5b939bedd8b5f59442b976732335a29ab7c197c30e4ecb80_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3ac41ce686e9ae07b86849166df73d5071e551bd174039f4b23dd227085534c = $this->env->getExtension("native_profiler");
        $__internal_f3ac41ce686e9ae07b86849166df73d5071e551bd174039f4b23dd227085534c->enter($__internal_f3ac41ce686e9ae07b86849166df73d5071e551bd174039f4b23dd227085534c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f3ac41ce686e9ae07b86849166df73d5071e551bd174039f4b23dd227085534c->leave($__internal_f3ac41ce686e9ae07b86849166df73d5071e551bd174039f4b23dd227085534c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6ed92e85b1ccfbdacd7127190975ad8b1c409a681d0a2ac124f9e9db255b3873 = $this->env->getExtension("native_profiler");
        $__internal_6ed92e85b1ccfbdacd7127190975ad8b1c409a681d0a2ac124f9e9db255b3873->enter($__internal_6ed92e85b1ccfbdacd7127190975ad8b1c409a681d0a2ac124f9e9db255b3873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6ed92e85b1ccfbdacd7127190975ad8b1c409a681d0a2ac124f9e9db255b3873->leave($__internal_6ed92e85b1ccfbdacd7127190975ad8b1c409a681d0a2ac124f9e9db255b3873_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 11,  81 => 10,  70 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
