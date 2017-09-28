<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f49d790044b9cd3174b6b6317983fa43bcb205188b25d30de1014199deab96d2 extends Twig_Template
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
        $__internal_e5cf1a43209dd139c1452191330dac3681e6d10f77a411268b05e75b85e716a2 = $this->env->getExtension("native_profiler");
        $__internal_e5cf1a43209dd139c1452191330dac3681e6d10f77a411268b05e75b85e716a2->enter($__internal_e5cf1a43209dd139c1452191330dac3681e6d10f77a411268b05e75b85e716a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_e5cf1a43209dd139c1452191330dac3681e6d10f77a411268b05e75b85e716a2->leave($__internal_e5cf1a43209dd139c1452191330dac3681e6d10f77a411268b05e75b85e716a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
