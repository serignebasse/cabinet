<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b524f5f7ac210af3ff545df01e84c2990dc7a120ab809ed38d65dd20ec4c65be extends Twig_Template
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
        $__internal_5c70d81fe799807d3d671481b8204e0ac7c03ba9c22fcb0b675448fb4484ab55 = $this->env->getExtension("native_profiler");
        $__internal_5c70d81fe799807d3d671481b8204e0ac7c03ba9c22fcb0b675448fb4484ab55->enter($__internal_5c70d81fe799807d3d671481b8204e0ac7c03ba9c22fcb0b675448fb4484ab55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5c70d81fe799807d3d671481b8204e0ac7c03ba9c22fcb0b675448fb4484ab55->leave($__internal_5c70d81fe799807d3d671481b8204e0ac7c03ba9c22fcb0b675448fb4484ab55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
