<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8729f9b900cecbe7961161cd39f8a14025f9a1099039bafcd0456894ed9dea40 extends Twig_Template
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
        $__internal_0aae6466c788dc39511da99394d61a809148a32fe639dcfc2df92a184727680b = $this->env->getExtension("native_profiler");
        $__internal_0aae6466c788dc39511da99394d61a809148a32fe639dcfc2df92a184727680b->enter($__internal_0aae6466c788dc39511da99394d61a809148a32fe639dcfc2df92a184727680b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0aae6466c788dc39511da99394d61a809148a32fe639dcfc2df92a184727680b->leave($__internal_0aae6466c788dc39511da99394d61a809148a32fe639dcfc2df92a184727680b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
