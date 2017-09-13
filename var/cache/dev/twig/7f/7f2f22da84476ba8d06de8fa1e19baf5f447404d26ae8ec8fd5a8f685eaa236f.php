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
        $__internal_e72ef17a5e56d2b5851bfeb70d4aa6f548ac420de98801b299344d197f5d983f = $this->env->getExtension("native_profiler");
        $__internal_e72ef17a5e56d2b5851bfeb70d4aa6f548ac420de98801b299344d197f5d983f->enter($__internal_e72ef17a5e56d2b5851bfeb70d4aa6f548ac420de98801b299344d197f5d983f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e72ef17a5e56d2b5851bfeb70d4aa6f548ac420de98801b299344d197f5d983f->leave($__internal_e72ef17a5e56d2b5851bfeb70d4aa6f548ac420de98801b299344d197f5d983f_prof);

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
