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
        $__internal_343525e7c8aac1884bc937bf0051402a797741e0100f1c6f94e9075071badd05 = $this->env->getExtension("native_profiler");
        $__internal_343525e7c8aac1884bc937bf0051402a797741e0100f1c6f94e9075071badd05->enter($__internal_343525e7c8aac1884bc937bf0051402a797741e0100f1c6f94e9075071badd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_343525e7c8aac1884bc937bf0051402a797741e0100f1c6f94e9075071badd05->leave($__internal_343525e7c8aac1884bc937bf0051402a797741e0100f1c6f94e9075071badd05_prof);

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
