<?php

/* base.html.twig */
class __TwigTemplate_d50f86de592388980c5c777d86328c83aa76538a8efcd51c698171c427c5783f extends Twig_Template
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
        $__internal_37dc42a861838f41a8a85edb509d49eb02a803a01b7b8d39f79dda353c4eade3 = $this->env->getExtension("native_profiler");
        $__internal_37dc42a861838f41a8a85edb509d49eb02a803a01b7b8d39f79dda353c4eade3->enter($__internal_37dc42a861838f41a8a85edb509d49eb02a803a01b7b8d39f79dda353c4eade3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
<div id=\"content\">
    ";
        // line 113
        $this->displayBlock('body', $context, $blocks);
        // line 115
        echo "</div>
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
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/popper/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Plugin JavaScript -->
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/datatables/dataTables.bootstrap4.js"), "html", null, true);
        echo "\"></script>

<!-- Custom scripts for this template -->
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/sb-admin.min.js"), "html", null, true);
        echo "\"> </script>

</body>

</html>
";
        
        $__internal_37dc42a861838f41a8a85edb509d49eb02a803a01b7b8d39f79dda353c4eade3->leave($__internal_37dc42a861838f41a8a85edb509d49eb02a803a01b7b8d39f79dda353c4eade3_prof);

    }

    // line 113
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b59eade718e26e5637b6dfba6c415dca6b6ca89a09685f7f5877b5cbf503c9c = $this->env->getExtension("native_profiler");
        $__internal_1b59eade718e26e5637b6dfba6c415dca6b6ca89a09685f7f5877b5cbf503c9c->enter($__internal_1b59eade718e26e5637b6dfba6c415dca6b6ca89a09685f7f5877b5cbf503c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 114
        echo "    ";
        
        $__internal_1b59eade718e26e5637b6dfba6c415dca6b6ca89a09685f7f5877b5cbf503c9c->leave($__internal_1b59eade718e26e5637b6dfba6c415dca6b6ca89a09685f7f5877b5cbf503c9c_prof);

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
        return array (  246 => 114,  240 => 113,  227 => 150,  221 => 147,  217 => 146,  213 => 145,  209 => 144,  203 => 141,  199 => 140,  195 => 139,  169 => 115,  167 => 113,  143 => 92,  133 => 85,  123 => 78,  113 => 71,  103 => 64,  92 => 56,  56 => 23,  50 => 20,  44 => 17,  38 => 14,  23 => 1,);
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
/* */
/* */
/* */
/*     </div>*/
/* </nav>*/
/* <div id="content">*/
/*     {% block body %}*/
/*     {% endblock %}*/
/* </div>*/
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
