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
        $__internal_c8cf10cc9e15804423fc6f75dcba954739f51bc00463c642071b135d6669338d = $this->env->getExtension("native_profiler");
        $__internal_c8cf10cc9e15804423fc6f75dcba954739f51bc00463c642071b135d6669338d->enter($__internal_c8cf10cc9e15804423fc6f75dcba954739f51bc00463c642071b135d6669338d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c8cf10cc9e15804423fc6f75dcba954739f51bc00463c642071b135d6669338d->leave($__internal_c8cf10cc9e15804423fc6f75dcba954739f51bc00463c642071b135d6669338d_prof);

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
