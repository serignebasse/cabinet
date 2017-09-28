<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_cb9ea464a52c4bb817c7ec7760cce20b8fe1542a7f6aafb7e9d88006806ff525 extends Twig_Template
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
        $__internal_f5cd008995f8e48fd4318860057a3d70581c8672be4a077acbb1b8e9b86808fb = $this->env->getExtension("native_profiler");
        $__internal_f5cd008995f8e48fd4318860057a3d70581c8672be4a077acbb1b8e9b86808fb->enter($__internal_f5cd008995f8e48fd4318860057a3d70581c8672be4a077acbb1b8e9b86808fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f5cd008995f8e48fd4318860057a3d70581c8672be4a077acbb1b8e9b86808fb->leave($__internal_f5cd008995f8e48fd4318860057a3d70581c8672be4a077acbb1b8e9b86808fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
