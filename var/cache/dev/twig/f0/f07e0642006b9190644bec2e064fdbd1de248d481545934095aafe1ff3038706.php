<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_fc3da27b99cf847a3041418e15460e1fbcee6e3f40176d7e32d27adabb414f3a extends Twig_Template
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
        $__internal_cb6c67b14bcbf5c0a144b1626ce7c5425934981f7223c3038c4c6f7f156f5150 = $this->env->getExtension("native_profiler");
        $__internal_cb6c67b14bcbf5c0a144b1626ce7c5425934981f7223c3038c4c6f7f156f5150->enter($__internal_cb6c67b14bcbf5c0a144b1626ce7c5425934981f7223c3038c4c6f7f156f5150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_cb6c67b14bcbf5c0a144b1626ce7c5425934981f7223c3038c4c6f7f156f5150->leave($__internal_cb6c67b14bcbf5c0a144b1626ce7c5425934981f7223c3038c4c6f7f156f5150_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
