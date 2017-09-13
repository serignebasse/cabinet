<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8b124af8bbf09b1ea652a55b9ab42af741f6016a15c6db7d4a9f9227198b3e77 extends Twig_Template
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
        $__internal_0638b9a629dfb4389b514d6641970a7d677200b62262d59de60542c2a96f317d = $this->env->getExtension("native_profiler");
        $__internal_0638b9a629dfb4389b514d6641970a7d677200b62262d59de60542c2a96f317d->enter($__internal_0638b9a629dfb4389b514d6641970a7d677200b62262d59de60542c2a96f317d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0638b9a629dfb4389b514d6641970a7d677200b62262d59de60542c2a96f317d->leave($__internal_0638b9a629dfb4389b514d6641970a7d677200b62262d59de60542c2a96f317d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
