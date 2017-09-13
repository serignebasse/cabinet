<?php

/* base.html.twig */
class __TwigTemplate_5b4839994f4aa12f30fd3f4f61b3931ec456b3c8e596d35f319ef9ff5bc6b71c extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/thumbnail-gallery.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
<!-- Navigation -->
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">Start Bootstrap</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Home
                        <span class=\"sr-only\">(current)</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">About</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Services</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "

<!-- Footer -->
<footer class=\"py-5 bg-dark\">
    <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/popper/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

</body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "    <!-- Page Content -->
    <div class=\"container\">


    </div>
    <!-- /.container -->
";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 56,  134 => 49,  131 => 48,  126 => 10,  121 => 9,  112 => 70,  108 => 69,  104 => 68,  91 => 57,  89 => 56,  87 => 48,  53 => 17,  48 => 15,  42 => 12,  39 => 11,  37 => 10,  33 => 9,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>{% block title %}{% endblock %}</title>*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Custom styles for this template -->*/
/*     <link href="{{ asset('css/thumbnail-gallery.css')}}" rel="stylesheet">*/
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* <!-- Navigation -->*/
/* <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">*/
/*     <div class="container">*/
/*         <a class="navbar-brand" href="#">Start Bootstrap</a>*/
/*         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">*/
/*             <span class="navbar-toggler-icon"></span>*/
/*         </button>*/
/*         <div class="collapse navbar-collapse" id="navbarResponsive">*/
/*             <ul class="navbar-nav ml-auto">*/
/*                 <li class="nav-item active">*/
/*                     <a class="nav-link" href="#">Home*/
/*                         <span class="sr-only">(current)</span>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link" href="#">About</a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link" href="#">Services</a>*/
/*                 </li>*/
/*                 <li class="nav-item">*/
/*                     <a class="nav-link" href="#">Contact</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* */
/* {% block body %}*/
/*     <!-- Page Content -->*/
/*     <div class="container">*/
/* */
/* */
/*     </div>*/
/*     <!-- /.container -->*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* */
/* */
/* <!-- Footer -->*/
/* <footer class="py-5 bg-dark">*/
/*     <div class="container">*/
/*         <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>*/
/*     </div>*/
/*     <!-- /.container -->*/
/* </footer>*/
/* */
/* <!-- Bootstrap core JavaScript -->*/
/* <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>*/
/* <script src="{{ asset('vendor/popper/popper.min.js')}}"></script>*/
/* <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>*/
/* */
/* </body>*/
/* </html>*/
/* */
