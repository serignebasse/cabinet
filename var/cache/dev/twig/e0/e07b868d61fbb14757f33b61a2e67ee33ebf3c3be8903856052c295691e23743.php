<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_1509eddc7193868d95004a683ddca41b95cf1467e5818cffb888bf26324ee4df extends Twig_Template
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
        $__internal_33fce87d8d1ceacb5f2f8bf675eb1a27a3c8cc6321ff03a7273b86711a14dfe8 = $this->env->getExtension("native_profiler");
        $__internal_33fce87d8d1ceacb5f2f8bf675eb1a27a3c8cc6321ff03a7273b86711a14dfe8->enter($__internal_33fce87d8d1ceacb5f2f8bf675eb1a27a3c8cc6321ff03a7273b86711a14dfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_33fce87d8d1ceacb5f2f8bf675eb1a27a3c8cc6321ff03a7273b86711a14dfe8->leave($__internal_33fce87d8d1ceacb5f2f8bf675eb1a27a3c8cc6321ff03a7273b86711a14dfe8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
