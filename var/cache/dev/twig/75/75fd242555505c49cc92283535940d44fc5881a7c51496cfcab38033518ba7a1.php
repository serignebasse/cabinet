<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8729f9b900cecbe7961161cd39f8a14025f9a1099039bafcd0456894ed9dea40 extends Twig_Template
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
        $__internal_d4aff1d87b6dd297ae53c351021025190a90c36660b479f7e2d9306293e6f7f3 = $this->env->getExtension("native_profiler");
        $__internal_d4aff1d87b6dd297ae53c351021025190a90c36660b479f7e2d9306293e6f7f3->enter($__internal_d4aff1d87b6dd297ae53c351021025190a90c36660b479f7e2d9306293e6f7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d4aff1d87b6dd297ae53c351021025190a90c36660b479f7e2d9306293e6f7f3->leave($__internal_d4aff1d87b6dd297ae53c351021025190a90c36660b479f7e2d9306293e6f7f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
