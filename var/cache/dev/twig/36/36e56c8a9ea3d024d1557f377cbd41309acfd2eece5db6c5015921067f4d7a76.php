<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5858d47cf693c47e1c5dc07e7478c7ebd47d325a2a2032c8ee714c5d113e387e extends Twig_Template
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
        $__internal_462d434eb12274225062e8c175d6c7a6668e7d4a073bdd99c56178c3b7a57de9 = $this->env->getExtension("native_profiler");
        $__internal_462d434eb12274225062e8c175d6c7a6668e7d4a073bdd99c56178c3b7a57de9->enter($__internal_462d434eb12274225062e8c175d6c7a6668e7d4a073bdd99c56178c3b7a57de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_462d434eb12274225062e8c175d6c7a6668e7d4a073bdd99c56178c3b7a57de9->leave($__internal_462d434eb12274225062e8c175d6c7a6668e7d4a073bdd99c56178c3b7a57de9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
