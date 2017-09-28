<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_a0eb98e1e4c1a09dd6f0a21f0f3b67b2052c7140a5d89b9ea0428549b37ab103 extends Twig_Template
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
        $__internal_d8040fe8437018a2b41411d202aed8ce24ff57940e78e0c1a3db934fdb40e9b1 = $this->env->getExtension("native_profiler");
        $__internal_d8040fe8437018a2b41411d202aed8ce24ff57940e78e0c1a3db934fdb40e9b1->enter($__internal_d8040fe8437018a2b41411d202aed8ce24ff57940e78e0c1a3db934fdb40e9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d8040fe8437018a2b41411d202aed8ce24ff57940e78e0c1a3db934fdb40e9b1->leave($__internal_d8040fe8437018a2b41411d202aed8ce24ff57940e78e0c1a3db934fdb40e9b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
