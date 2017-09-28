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
        $__internal_de93a6c235c78c96955040933c2826c1673217b90c2cdd16d10fe95f5413c79b = $this->env->getExtension("native_profiler");
        $__internal_de93a6c235c78c96955040933c2826c1673217b90c2cdd16d10fe95f5413c79b->enter($__internal_de93a6c235c78c96955040933c2826c1673217b90c2cdd16d10fe95f5413c79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_de93a6c235c78c96955040933c2826c1673217b90c2cdd16d10fe95f5413c79b->leave($__internal_de93a6c235c78c96955040933c2826c1673217b90c2cdd16d10fe95f5413c79b_prof);

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
