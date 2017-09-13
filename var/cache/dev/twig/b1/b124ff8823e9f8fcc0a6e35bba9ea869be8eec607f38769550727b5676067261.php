<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_cc52e6c6d81f245a965629968ec97ddec7151ae7e6334e0bdbc689be71513797 extends Twig_Template
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
        $__internal_79742650f5bae10fee6536ed2c7d3c275732754271a724576c48ec28c7ab6e97 = $this->env->getExtension("native_profiler");
        $__internal_79742650f5bae10fee6536ed2c7d3c275732754271a724576c48ec28c7ab6e97->enter($__internal_79742650f5bae10fee6536ed2c7d3c275732754271a724576c48ec28c7ab6e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_79742650f5bae10fee6536ed2c7d3c275732754271a724576c48ec28c7ab6e97->leave($__internal_79742650f5bae10fee6536ed2c7d3c275732754271a724576c48ec28c7ab6e97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
