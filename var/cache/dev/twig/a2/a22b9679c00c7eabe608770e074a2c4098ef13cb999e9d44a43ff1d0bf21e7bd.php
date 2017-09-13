<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_1c8bf2bf4641c872d370138604fb793cff0f44f4aac1e63c346ad347d3e332ca extends Twig_Template
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
        $__internal_e384b420c318355be36306568e7216e9c44e100168375c05e061ced1f237e489 = $this->env->getExtension("native_profiler");
        $__internal_e384b420c318355be36306568e7216e9c44e100168375c05e061ced1f237e489->enter($__internal_e384b420c318355be36306568e7216e9c44e100168375c05e061ced1f237e489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e384b420c318355be36306568e7216e9c44e100168375c05e061ced1f237e489->leave($__internal_e384b420c318355be36306568e7216e9c44e100168375c05e061ced1f237e489_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
