<?php

/* base.html.twig */
class __TwigTemplate_4e7bcfd3513c3b0da0ff936c536f915ec50ee9a57e3a5bdf3411c1905b4dba0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7692f87931019050f38dfc20e94eee9560c92866954cfa9493eb32a3801f2c67 = $this->env->getExtension("native_profiler");
        $__internal_7692f87931019050f38dfc20e94eee9560c92866954cfa9493eb32a3801f2c67->enter($__internal_7692f87931019050f38dfc20e94eee9560c92866954cfa9493eb32a3801f2c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>SamaCabinetMédical</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom fonts for this template -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Plugin CSS -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/datatables/dataTables.bootstrap4.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body class=\"fixed-nav\" id=\"page-top\">

<!-- Navigation -->
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\" id=\"mainNav\">
    <a class=\"navbar-brand\" href=\"#\">NDIAYE Cabinet Médical</a>
    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav navbar-sidenav\">
            <li class=\"nav-item active\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Dashboard\">
                <a class=\"nav-link\" href=\"#\">
                    <i class=\"fa fa-fw fa-dashboard\"></i>
                    <span class=\"nav-link-text\">
                Tableau de bord</span>
                </a>
            </li>
            <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Charts\">
                <a class=\"nav-link\" href=\"#\">
                    <i class=\"fa fa-fw fa-area-chart\"></i>
                    <span class=\"nav-link-text\">
                Statistiques</span>
                </a>
            </li>
            <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Tables\">
                <a class=\"nav-link\" href=\"#\">
                    <i class=\"fa fa-fw fa-table\"></i>
                    <span class=\"nav-link-text\">
                Listes</span>
                </a>
            </li>
            <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Components\">
                <a class=\"nav-link nav-link-collapse collapsed\" data-toggle=\"collapse\" href=\"#collapseComponents\">
                    <i class=\"fa fa-fw fa-wrench\"></i>
                    <span class=\"nav-link-text\">
                Composants</span>
                </a>
                <ul class=\"sidenav-second-level collapse\" id=\"collapseComponents\">

                    <li>
                        <a href=\"#\">Custom Card </a>
                    </li>

                    <li>
                        <a href=\"#\">Login Page</a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Menu Levels\">
                <a class=\"nav-link nav-link-collapse collapsed\" data-toggle=\"collapse\" href=\"#collapseMulti\">
                    <i class=\"fa fa-fw fa-sitemap\"></i>
                    <span class=\"nav-link-text\">
                Menu</span>
                </a>
                <ul class=\"sidenav-second-level collapse\" id=\"collapseMulti\">
                    <li>
                        <a href=\"#\">Sécrétaire</a>
                    </li>
                    <li>
                        <a href=\"#\">Mèdecin</a>
                    </li>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class=\"navbar-nav sidenav-toggler\">
            <li class=\"nav-item\">
                <a class=\"nav-link text-center\" id=\"sidenavToggler\">
                    <i class=\"fa fa-fw fa-angle-left\"></i>
                </a>
            </li>
        </ul>
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
                <form class=\"form-inline my-2 my-lg-0 mr-lg-2\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                        <span class=\"input-group-btn\">
                  <button class=\"btn btn-primary\" type=\"button\">
                    <i class=\"fa fa-search\"></i>
                  </button>
                </span>
                    </div>
                </form>
            </li>
        </ul>
    </div>
</nav>
";
        // line 116
        $this->displayBlock('body', $context, $blocks);
        // line 119
        echo "<!-- Scroll to Top Button -->
<a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fa fa-angle-up\"></i>
</a>

<!-- Footer -->
<footer class=\"py-1 bg-dark flex-md-wrap\">
    <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; Cabinet Médical -SB 2017</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/popper/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Plugin JavaScript -->
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/datatables/dataTables.bootstrap4.js"), "html", null, true);
        echo "\"></script>

<!-- Custom scripts for this template -->
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/sb-admin.min.js"), "html", null, true);
        echo "\"> </script>

</body>

</html>
";
        
        $__internal_7692f87931019050f38dfc20e94eee9560c92866954cfa9493eb32a3801f2c67->leave($__internal_7692f87931019050f38dfc20e94eee9560c92866954cfa9493eb32a3801f2c67_prof);

    }

    // line 116
    public function block_body($context, array $blocks = array())
    {
        $__internal_a216deb67b802475ae4fedd004451b861e71c8ab106cc8e9bc59cf83c3b3222e = $this->env->getExtension("native_profiler");
        $__internal_a216deb67b802475ae4fedd004451b861e71c8ab106cc8e9bc59cf83c3b3222e->enter($__internal_a216deb67b802475ae4fedd004451b861e71c8ab106cc8e9bc59cf83c3b3222e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 117
        echo "
";
        
        $__internal_a216deb67b802475ae4fedd004451b861e71c8ab106cc8e9bc59cf83c3b3222e->leave($__internal_a216deb67b802475ae4fedd004451b861e71c8ab106cc8e9bc59cf83c3b3222e_prof);

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
        return array (  221 => 117,  215 => 116,  202 => 144,  196 => 141,  192 => 140,  188 => 139,  184 => 138,  178 => 135,  174 => 134,  170 => 133,  154 => 119,  152 => 116,  57 => 24,  51 => 21,  45 => 18,  39 => 15,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">*/
/* */
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <title>SamaCabinetMédical</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Custom fonts for this template -->*/
/*     <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">*/
/* */
/*     <!-- Plugin CSS -->*/
/*     <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Custom styles for this template -->*/
/*     <link href="{{ asset('css/sb-admin.css')}}" rel="stylesheet">*/
/* */
/* </head>*/
/* */
/* <body class="fixed-nav" id="page-top">*/
/* */
/* <!-- Navigation -->*/
/* <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">*/
/*     <a class="navbar-brand" href="#">NDIAYE Cabinet Médical</a>*/
/*     <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">*/
/*         <span class="navbar-toggler-icon"></span>*/
/*     </button>*/
/*     <div class="collapse navbar-collapse" id="navbarResponsive">*/
/*         <ul class="navbar-nav navbar-sidenav">*/
/*             <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">*/
/*                 <a class="nav-link" href="#">*/
/*                     <i class="fa fa-fw fa-dashboard"></i>*/
/*                     <span class="nav-link-text">*/
/*                 Tableau de bord</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">*/
/*                 <a class="nav-link" href="#">*/
/*                     <i class="fa fa-fw fa-area-chart"></i>*/
/*                     <span class="nav-link-text">*/
/*                 Statistiques</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">*/
/*                 <a class="nav-link" href="#">*/
/*                     <i class="fa fa-fw fa-table"></i>*/
/*                     <span class="nav-link-text">*/
/*                 Listes</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">*/
/*                 <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents">*/
/*                     <i class="fa fa-fw fa-wrench"></i>*/
/*                     <span class="nav-link-text">*/
/*                 Composants</span>*/
/*                 </a>*/
/*                 <ul class="sidenav-second-level collapse" id="collapseComponents">*/
/* */
/*                     <li>*/
/*                         <a href="#">Custom Card </a>*/
/*                     </li>*/
/* */
/*                     <li>*/
/*                         <a href="#">Login Page</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">*/
/*                 <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti">*/
/*                     <i class="fa fa-fw fa-sitemap"></i>*/
/*                     <span class="nav-link-text">*/
/*                 Menu</span>*/
/*                 </a>*/
/*                 <ul class="sidenav-second-level collapse" id="collapseMulti">*/
/*                     <li>*/
/*                         <a href="#">Sécrétaire</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">Mèdecin</a>*/
/*                     </li>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*         <ul class="navbar-nav sidenav-toggler">*/
/*             <li class="nav-item">*/
/*                 <a class="nav-link text-center" id="sidenavToggler">*/
/*                     <i class="fa fa-fw fa-angle-left"></i>*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*         <ul class="navbar-nav ml-auto">*/
/*             <li class="nav-item">*/
/*                 <form class="form-inline my-2 my-lg-0 mr-lg-2">*/
/*                     <div class="input-group">*/
/*                         <input type="text" class="form-control" placeholder="Search for...">*/
/*                         <span class="input-group-btn">*/
/*                   <button class="btn btn-primary" type="button">*/
/*                     <i class="fa fa-search"></i>*/
/*                   </button>*/
/*                 </span>*/
/*                     </div>*/
/*                 </form>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* </nav>*/
/* {% block body %}*/
/* */
/* {% endblock %}*/
/* <!-- Scroll to Top Button -->*/
/* <a class="scroll-to-top rounded" href="#page-top">*/
/*     <i class="fa fa-angle-up"></i>*/
/* </a>*/
/* */
/* <!-- Footer -->*/
/* <footer class="py-1 bg-dark flex-md-wrap">*/
/*     <div class="container">*/
/*         <p class="m-0 text-center text-white">Copyright &copy; Cabinet Médical -SB 2017</p>*/
/*     </div>*/
/*     <!-- /.container -->*/
/* </footer>*/
/* */
/* <!-- Bootstrap core JavaScript -->*/
/* <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>*/
/* <script src="{{ asset('vendor/popper/popper.min.js')}}"></script>*/
/* <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>*/
/* */
/* <!-- Plugin JavaScript -->*/
/* <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>*/
/* <script src="{{ asset('vendor/chart.js/Chart.min.js')}}"></script>*/
/* <script src="{{ asset('vendor/datatables/jquery.dataTables.js')}}"></script>*/
/* <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>*/
/* */
/* <!-- Custom scripts for this template -->*/
/* <script src="{{ asset('js/sb-admin.min.js')}}"> </script>*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
