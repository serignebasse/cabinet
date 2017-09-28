<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ead19f4a184c21ba2e4395a1d37d159aaf731240e897a10778ee2e43c8d17316 extends Twig_Template
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
        $__internal_e5a9ec7c6bd47c15bf224c650d0186366fd0a170613f0ef735a988a3b8a42285 = $this->env->getExtension("native_profiler");
        $__internal_e5a9ec7c6bd47c15bf224c650d0186366fd0a170613f0ef735a988a3b8a42285->enter($__internal_e5a9ec7c6bd47c15bf224c650d0186366fd0a170613f0ef735a988a3b8a42285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e5a9ec7c6bd47c15bf224c650d0186366fd0a170613f0ef735a988a3b8a42285->leave($__internal_e5a9ec7c6bd47c15bf224c650d0186366fd0a170613f0ef735a988a3b8a42285_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
