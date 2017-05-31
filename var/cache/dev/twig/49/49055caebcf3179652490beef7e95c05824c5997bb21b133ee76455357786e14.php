<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b4600fb806b3f66ad98a5c5c49beb9783cbf18bf9a4d36f3f305f33a097f870e extends Twig_Template
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
        $__internal_6e7373e743ddc60fba8090496432589941d4b2352d290f00d876e3b78b21e166 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e7373e743ddc60fba8090496432589941d4b2352d290f00d876e3b78b21e166->enter($__internal_6e7373e743ddc60fba8090496432589941d4b2352d290f00d876e3b78b21e166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ad5a6fd5bb225ab21b3767b44b9131fff8de5669477ca7d0f52f5b2c4b61fb72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5a6fd5bb225ab21b3767b44b9131fff8de5669477ca7d0f52f5b2c4b61fb72->enter($__internal_ad5a6fd5bb225ab21b3767b44b9131fff8de5669477ca7d0f52f5b2c4b61fb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6e7373e743ddc60fba8090496432589941d4b2352d290f00d876e3b78b21e166->leave($__internal_6e7373e743ddc60fba8090496432589941d4b2352d290f00d876e3b78b21e166_prof);

        
        $__internal_ad5a6fd5bb225ab21b3767b44b9131fff8de5669477ca7d0f52f5b2c4b61fb72->leave($__internal_ad5a6fd5bb225ab21b3767b44b9131fff8de5669477ca7d0f52f5b2c4b61fb72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
