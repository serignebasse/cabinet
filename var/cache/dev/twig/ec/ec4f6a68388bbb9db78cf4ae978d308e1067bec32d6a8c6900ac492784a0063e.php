<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_683a43172b68bb3e16937550a96f9df0b718adb3de21e0ad32ae59d093fe15f0 extends Twig_Template
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
        $__internal_fdbb0bce5a691a50f1aebb113e93fb248aad8bd8b74651d62abff033d5f3c7bb = $this->env->getExtension("native_profiler");
        $__internal_fdbb0bce5a691a50f1aebb113e93fb248aad8bd8b74651d62abff033d5f3c7bb->enter($__internal_fdbb0bce5a691a50f1aebb113e93fb248aad8bd8b74651d62abff033d5f3c7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_fdbb0bce5a691a50f1aebb113e93fb248aad8bd8b74651d62abff033d5f3c7bb->leave($__internal_fdbb0bce5a691a50f1aebb113e93fb248aad8bd8b74651d62abff033d5f3c7bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
