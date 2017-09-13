<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_1676396e3239b0b904544a170387d7cdd5476811b96027d8be65e92628c846ad extends Twig_Template
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
        $__internal_f88e7bba8c4599a70366147b4de164fa619c8253ce56f1682021d82e49da166e = $this->env->getExtension("native_profiler");
        $__internal_f88e7bba8c4599a70366147b4de164fa619c8253ce56f1682021d82e49da166e->enter($__internal_f88e7bba8c4599a70366147b4de164fa619c8253ce56f1682021d82e49da166e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f88e7bba8c4599a70366147b4de164fa619c8253ce56f1682021d82e49da166e->leave($__internal_f88e7bba8c4599a70366147b4de164fa619c8253ce56f1682021d82e49da166e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
