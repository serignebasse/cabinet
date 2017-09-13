<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9a0f8a06680a19a3a89b1d0dd054ca8f40c48918473311c14f6447d01e7b5d32 extends Twig_Template
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
        $__internal_3bdc70cf668e1cba67b4e12362dac7b22f0de7df56cd384aefcd4c98d0fbb00b = $this->env->getExtension("native_profiler");
        $__internal_3bdc70cf668e1cba67b4e12362dac7b22f0de7df56cd384aefcd4c98d0fbb00b->enter($__internal_3bdc70cf668e1cba67b4e12362dac7b22f0de7df56cd384aefcd4c98d0fbb00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3bdc70cf668e1cba67b4e12362dac7b22f0de7df56cd384aefcd4c98d0fbb00b->leave($__internal_3bdc70cf668e1cba67b4e12362dac7b22f0de7df56cd384aefcd4c98d0fbb00b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
