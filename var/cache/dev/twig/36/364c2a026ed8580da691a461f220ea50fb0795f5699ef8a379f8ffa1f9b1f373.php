<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_ff7f553640dc6d21f52b324f932363227a4e41831f0e13ab8152bbfb11cda778 extends Twig_Template
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
        $__internal_52cedbcc392b9b2628d7cb7a8dd0dc05b1fc2801f46ddb98f11fee6c7b3238c4 = $this->env->getExtension("native_profiler");
        $__internal_52cedbcc392b9b2628d7cb7a8dd0dc05b1fc2801f46ddb98f11fee6c7b3238c4->enter($__internal_52cedbcc392b9b2628d7cb7a8dd0dc05b1fc2801f46ddb98f11fee6c7b3238c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_52cedbcc392b9b2628d7cb7a8dd0dc05b1fc2801f46ddb98f11fee6c7b3238c4->leave($__internal_52cedbcc392b9b2628d7cb7a8dd0dc05b1fc2801f46ddb98f11fee6c7b3238c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
