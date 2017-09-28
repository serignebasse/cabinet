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
        $__internal_27fda08e9b4762092e3d3b47d78e5883cddf82f6b8428e5083ca373adeaaddc1 = $this->env->getExtension("native_profiler");
        $__internal_27fda08e9b4762092e3d3b47d78e5883cddf82f6b8428e5083ca373adeaaddc1->enter($__internal_27fda08e9b4762092e3d3b47d78e5883cddf82f6b8428e5083ca373adeaaddc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_27fda08e9b4762092e3d3b47d78e5883cddf82f6b8428e5083ca373adeaaddc1->leave($__internal_27fda08e9b4762092e3d3b47d78e5883cddf82f6b8428e5083ca373adeaaddc1_prof);

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
