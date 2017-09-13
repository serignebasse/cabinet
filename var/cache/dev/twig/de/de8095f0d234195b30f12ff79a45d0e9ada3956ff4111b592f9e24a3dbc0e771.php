<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0d54c6d653e5f68562631e9c69f4929be31017985100ca63e0a433867bfb01cf extends Twig_Template
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
        $__internal_8047896ab59399a26344cc08468d26c7707bc9674e0112555bb258ec007cf429 = $this->env->getExtension("native_profiler");
        $__internal_8047896ab59399a26344cc08468d26c7707bc9674e0112555bb258ec007cf429->enter($__internal_8047896ab59399a26344cc08468d26c7707bc9674e0112555bb258ec007cf429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8047896ab59399a26344cc08468d26c7707bc9674e0112555bb258ec007cf429->leave($__internal_8047896ab59399a26344cc08468d26c7707bc9674e0112555bb258ec007cf429_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
