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
        $__internal_e9abde104f68863d665ff06645e62437a2bfd1f79c950efdc33cfaeb2211c5d6 = $this->env->getExtension("native_profiler");
        $__internal_e9abde104f68863d665ff06645e62437a2bfd1f79c950efdc33cfaeb2211c5d6->enter($__internal_e9abde104f68863d665ff06645e62437a2bfd1f79c950efdc33cfaeb2211c5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e9abde104f68863d665ff06645e62437a2bfd1f79c950efdc33cfaeb2211c5d6->leave($__internal_e9abde104f68863d665ff06645e62437a2bfd1f79c950efdc33cfaeb2211c5d6_prof);

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
