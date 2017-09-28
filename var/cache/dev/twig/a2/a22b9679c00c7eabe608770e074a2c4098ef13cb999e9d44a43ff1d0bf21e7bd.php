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
        $__internal_a421b65232b51d94a0820797766233a80b3519ae146e4d9b7c63ef080624a7d3 = $this->env->getExtension("native_profiler");
        $__internal_a421b65232b51d94a0820797766233a80b3519ae146e4d9b7c63ef080624a7d3->enter($__internal_a421b65232b51d94a0820797766233a80b3519ae146e4d9b7c63ef080624a7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a421b65232b51d94a0820797766233a80b3519ae146e4d9b7c63ef080624a7d3->leave($__internal_a421b65232b51d94a0820797766233a80b3519ae146e4d9b7c63ef080624a7d3_prof);

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
