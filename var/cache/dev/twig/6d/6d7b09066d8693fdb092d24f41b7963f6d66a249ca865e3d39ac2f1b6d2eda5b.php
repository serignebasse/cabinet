<?php

/* ::base.html.twig */
class __TwigTemplate_41745215ea7e14d1dfbe332b73d495abddbe2249ccce784f688882815293fc4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9e43dcfa1b74374c47ee7b3831825b0d7177fd355f23f528c8b4cbe8cc99b89 = $this->env->getExtension("native_profiler");
        $__internal_c9e43dcfa1b74374c47ee7b3831825b0d7177fd355f23f528c8b4cbe8cc99b89->enter($__internal_c9e43dcfa1b74374c47ee7b3831825b0d7177fd355f23f528c8b4cbe8cc99b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>SamaCabinet</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom fonts for this template -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Plugin CSS -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/datatables/dataTables.bootstrap4.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


</head>

<body class=\"fixed-nav\" id=\"page-top\">

<!-- Navigation -->
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\" id=\"mainNav\">

    <a class=\"navbar-brand\" href=\"#\">Sama cabinet</a>

    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav navbar-sidenav\">
            <li class=\"nav-item active\" data-toggle=\"tooltip\" data-placement=\"right\" title=\" Tableau de bord\">
                <a class=\"nav-link\" href=\"#\">
                    <i class=\"fa fa-fw fa-dashboard\"></i>
                    <span class=\"nav-link-text\">
                Tableau de bord</span>
                </a>
            </li>
            <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\" Statistiques\">
                <a class=\"nav-link\" href=\"#\">
                    <i class=\"fa fa-fw fa-area-chart\"></i>
                    <span class=\"nav-link-text\">
                Statistiques</span>
                </a>
            </li>
            <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Listes\">
                <a class=\"nav-link\" href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("patient_index");
        echo "\">
                    <i class=\"fa fa-fw fa-table\" aria-hidden=\"true\"></i>
                    <span class=\"nav-link-text\">
                Patients</span>
                </a>
            </li>

            <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Medecin\">
                <a class=\"nav-link\" href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("medecin_index");
        echo "\">
                    <i class=\"fa fa-user-md\" aria-hidden=\"true\"></i>
                    <span class=\"nav-link-text\">
                Medecin</span>
                </a>
            </li>
            <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Rendez-vous\">
                <a class=\"nav-link\" href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("rendezvous_index");
        echo "\">
                    <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                    <span class=\"nav-link-text\">
               Rendez-vous</span>
                </a>
            </li>
            <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Consultation\">
                <a class=\"nav-link\" href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("consultation_index");
        echo "\">
                    <i class=\"fa fa-medkit\" aria-hidden=\"true\"></i>
                    <span class=\"nav-link-text\">
                Consultation</span>
                </a>
            </li>
            <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Ordonnance\">
                <a class=\"nav-link\" href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("ordonnance_index");
        echo "\">
                    <i class=\"fa fa-envira\" aria-hidden=\"true\"></i>
                    <span class=\"nav-link-text\">
                Ordonnance</span>
                </a>
            </li>
            <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Analyse\">
                <a class=\"nav-link\" href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("analyse_index");
        echo "\">
                    <i class=\"fa fa-file-text custom\" aria-hidden=\"true\"></i>
                    <span class=\"nav-link-text\">
                Analyse</span>
                </a>
            </li>

        </ul>
        <ul class=\"navbar-nav sidenav-toggler\">
            <li class=\"nav-item\">
                <a class=\"nav-link text-center\" id=\"sidenavToggler\">
                    <i class=\"fa fa-fw fa-angle-left\"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>

    ";
        // line 110
        $this->displayBlock('body', $context, $blocks);
        // line 112
        echo "     ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 114
        echo "
<!-- Scroll to Top Button -->
<a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fa fa-angle-up\"></i>
</a>

<!-- /menu footer buttons -->
<div class=\"sidebar-footer hidden-small\">
    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
    </a>
    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
        <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
    </a>
    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
        <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
    </a>
    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"login.html\">
        <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
    </a>
</div>
<!-- /menu footer buttons -->

<!-- Bootstrap core JavaScript -->
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/popper/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Plugin JavaScript -->
<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/datatables/dataTables.bootstrap4.js"), "html", null, true);
        echo "\"></script>

<!-- Custom scripts for this template -->
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/sb-admin.min.js"), "html", null, true);
        echo "\"> </script>

</body>

</html>
";
        
        $__internal_c9e43dcfa1b74374c47ee7b3831825b0d7177fd355f23f528c8b4cbe8cc99b89->leave($__internal_c9e43dcfa1b74374c47ee7b3831825b0d7177fd355f23f528c8b4cbe8cc99b89_prof);

    }

    // line 110
    public function block_body($context, array $blocks = array())
    {
        $__internal_af094081e86974afece403dc6797b9e65e2c1a31d48c3d75af3c7c980c1f4bbd = $this->env->getExtension("native_profiler");
        $__internal_af094081e86974afece403dc6797b9e65e2c1a31d48c3d75af3c7c980c1f4bbd->enter($__internal_af094081e86974afece403dc6797b9e65e2c1a31d48c3d75af3c7c980c1f4bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 111
        echo "    ";
        
        $__internal_af094081e86974afece403dc6797b9e65e2c1a31d48c3d75af3c7c980c1f4bbd->leave($__internal_af094081e86974afece403dc6797b9e65e2c1a31d48c3d75af3c7c980c1f4bbd_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5a01da16529db9944096bf777fe39e341bbdd9c0e54d039d51e64f13ad52d514 = $this->env->getExtension("native_profiler");
        $__internal_5a01da16529db9944096bf777fe39e341bbdd9c0e54d039d51e64f13ad52d514->enter($__internal_5a01da16529db9944096bf777fe39e341bbdd9c0e54d039d51e64f13ad52d514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        echo "    ";
        
        $__internal_5a01da16529db9944096bf777fe39e341bbdd9c0e54d039d51e64f13ad52d514->leave($__internal_5a01da16529db9944096bf777fe39e341bbdd9c0e54d039d51e64f13ad52d514_prof);

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
        return array (  260 => 113,  254 => 112,  247 => 111,  241 => 110,  228 => 149,  222 => 146,  218 => 145,  214 => 144,  210 => 143,  204 => 140,  200 => 139,  196 => 138,  170 => 114,  167 => 112,  165 => 110,  144 => 92,  134 => 85,  124 => 78,  114 => 71,  104 => 64,  93 => 56,  57 => 23,  51 => 20,  45 => 17,  39 => 14,  24 => 1,);
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
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <title>SamaCabinet</title>*/
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
/* */
/* </head>*/
/* */
/* <body class="fixed-nav" id="page-top">*/
/* */
/* <!-- Navigation -->*/
/* <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">*/
/* */
/*     <a class="navbar-brand" href="#">Sama cabinet</a>*/
/* */
/*     <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">*/
/*         <span class="navbar-toggler-icon"></span>*/
/*     </button>*/
/* */
/*     <div class="collapse navbar-collapse" id="navbarResponsive">*/
/*         <ul class="navbar-nav navbar-sidenav">*/
/*             <li class="nav-item active" data-toggle="tooltip" data-placement="right" title=" Tableau de bord">*/
/*                 <a class="nav-link" href="#">*/
/*                     <i class="fa fa-fw fa-dashboard"></i>*/
/*                     <span class="nav-link-text">*/
/*                 Tableau de bord</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li class="nav-item" data-toggle="tooltip" data-placement="right" title=" Statistiques">*/
/*                 <a class="nav-link" href="#">*/
/*                     <i class="fa fa-fw fa-area-chart"></i>*/
/*                     <span class="nav-link-text">*/
/*                 Statistiques</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Listes">*/
/*                 <a class="nav-link" href="{{ path('patient_index')}}">*/
/*                     <i class="fa fa-fw fa-table" aria-hidden="true"></i>*/
/*                     <span class="nav-link-text">*/
/*                 Patients</span>*/
/*                 </a>*/
/*             </li>*/
/* */
/*             <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Medecin">*/
/*                 <a class="nav-link" href="{{ path('medecin_index')}}">*/
/*                     <i class="fa fa-user-md" aria-hidden="true"></i>*/
/*                     <span class="nav-link-text">*/
/*                 Medecin</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Rendez-vous">*/
/*                 <a class="nav-link" href="{{ path('rendezvous_index')}}">*/
/*                     <i class="fa fa-calendar" aria-hidden="true"></i>*/
/*                     <span class="nav-link-text">*/
/*                Rendez-vous</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Consultation">*/
/*                 <a class="nav-link" href="{{ path('consultation_index')}}">*/
/*                     <i class="fa fa-medkit" aria-hidden="true"></i>*/
/*                     <span class="nav-link-text">*/
/*                 Consultation</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ordonnance">*/
/*                 <a class="nav-link" href="{{ path('ordonnance_index')}}">*/
/*                     <i class="fa fa-envira" aria-hidden="true"></i>*/
/*                     <span class="nav-link-text">*/
/*                 Ordonnance</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Analyse">*/
/*                 <a class="nav-link" href="{{ path('analyse_index')}}">*/
/*                     <i class="fa fa-file-text custom" aria-hidden="true"></i>*/
/*                     <span class="nav-link-text">*/
/*                 Analyse</span>*/
/*                 </a>*/
/*             </li>*/
/* */
/*         </ul>*/
/*         <ul class="navbar-nav sidenav-toggler">*/
/*             <li class="nav-item">*/
/*                 <a class="nav-link text-center" id="sidenavToggler">*/
/*                     <i class="fa fa-fw fa-angle-left"></i>*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* </nav>*/
/* */
/*     {% block body %}*/
/*     {% endblock %}*/
/*      {% block javascripts %}*/
/*     {% endblock %}*/
/* */
/* <!-- Scroll to Top Button -->*/
/* <a class="scroll-to-top rounded" href="#page-top">*/
/*     <i class="fa fa-angle-up"></i>*/
/* </a>*/
/* */
/* <!-- /menu footer buttons -->*/
/* <div class="sidebar-footer hidden-small">*/
/*     <a data-toggle="tooltip" data-placement="top" title="Settings">*/
/*         <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>*/
/*     </a>*/
/*     <a data-toggle="tooltip" data-placement="top" title="FullScreen">*/
/*         <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>*/
/*     </a>*/
/*     <a data-toggle="tooltip" data-placement="top" title="Lock">*/
/*         <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>*/
/*     </a>*/
/*     <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">*/
/*         <span class="glyphicon glyphicon-off" aria-hidden="true"></span>*/
/*     </a>*/
/* </div>*/
/* <!-- /menu footer buttons -->*/
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
