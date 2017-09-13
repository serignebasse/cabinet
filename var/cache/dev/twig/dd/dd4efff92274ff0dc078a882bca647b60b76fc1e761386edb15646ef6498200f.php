<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c708d05bb2fda7c81c63a5af7ae53c400760da54d98f8b86d9c2cfc5564a3473 extends Twig_Template
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
        $__internal_b0fe3d329d2ee8280441e4f92fc45d001f3344e088ecdd7714734d516211491d = $this->env->getExtension("native_profiler");
        $__internal_b0fe3d329d2ee8280441e4f92fc45d001f3344e088ecdd7714734d516211491d->enter($__internal_b0fe3d329d2ee8280441e4f92fc45d001f3344e088ecdd7714734d516211491d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b0fe3d329d2ee8280441e4f92fc45d001f3344e088ecdd7714734d516211491d->leave($__internal_b0fe3d329d2ee8280441e4f92fc45d001f3344e088ecdd7714734d516211491d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
