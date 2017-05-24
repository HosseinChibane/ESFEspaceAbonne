<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_089b7cad19afcfcec79dc98d718ed612e5a2c89c3542532ec55f33918a123a24 extends Twig_Template
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
        $__internal_98df0120e6cc41773b2f0a78db01a82a4fb9a62be508856022cb01205cc5733a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98df0120e6cc41773b2f0a78db01a82a4fb9a62be508856022cb01205cc5733a->enter($__internal_98df0120e6cc41773b2f0a78db01a82a4fb9a62be508856022cb01205cc5733a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_0bd2b89b7a0c6a2655768b95ec1cc2a0b2eb5118fa5656c61858ff9b2507665d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd2b89b7a0c6a2655768b95ec1cc2a0b2eb5118fa5656c61858ff9b2507665d->enter($__internal_0bd2b89b7a0c6a2655768b95ec1cc2a0b2eb5118fa5656c61858ff9b2507665d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_98df0120e6cc41773b2f0a78db01a82a4fb9a62be508856022cb01205cc5733a->leave($__internal_98df0120e6cc41773b2f0a78db01a82a4fb9a62be508856022cb01205cc5733a_prof);

        
        $__internal_0bd2b89b7a0c6a2655768b95ec1cc2a0b2eb5118fa5656c61858ff9b2507665d->leave($__internal_0bd2b89b7a0c6a2655768b95ec1cc2a0b2eb5118fa5656c61858ff9b2507665d_prof);

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
