<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_30648726eeb526026c54a954a7332891f6882ea2fd9d4bd82b68c2360b9d6b05 extends Twig_Template
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
        $__internal_662ae888a1df7578a51d4ccb59f16df98e9d1e9a4b66c7fa5190961ef321efcd = $this->env->getExtension("native_profiler");
        $__internal_662ae888a1df7578a51d4ccb59f16df98e9d1e9a4b66c7fa5190961ef321efcd->enter($__internal_662ae888a1df7578a51d4ccb59f16df98e9d1e9a4b66c7fa5190961ef321efcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_662ae888a1df7578a51d4ccb59f16df98e9d1e9a4b66c7fa5190961ef321efcd->leave($__internal_662ae888a1df7578a51d4ccb59f16df98e9d1e9a4b66c7fa5190961ef321efcd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
