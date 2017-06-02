<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b59bb51bb481da38efecdef105c41218636b5548eddd0bd8dc79f95085e82ec7 extends Twig_Template
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
        $__internal_8f645f2128f2b89eeb646210a3afe6b6fc66645061855d5024f8f8477791dc9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f645f2128f2b89eeb646210a3afe6b6fc66645061855d5024f8f8477791dc9c->enter($__internal_8f645f2128f2b89eeb646210a3afe6b6fc66645061855d5024f8f8477791dc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_82affdd9d125689f9f7776ca4d4086c097b85e22d54d0b0d7dfbb3a808c217b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82affdd9d125689f9f7776ca4d4086c097b85e22d54d0b0d7dfbb3a808c217b1->enter($__internal_82affdd9d125689f9f7776ca4d4086c097b85e22d54d0b0d7dfbb3a808c217b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8f645f2128f2b89eeb646210a3afe6b6fc66645061855d5024f8f8477791dc9c->leave($__internal_8f645f2128f2b89eeb646210a3afe6b6fc66645061855d5024f8f8477791dc9c_prof);

        
        $__internal_82affdd9d125689f9f7776ca4d4086c097b85e22d54d0b0d7dfbb3a808c217b1->leave($__internal_82affdd9d125689f9f7776ca4d4086c097b85e22d54d0b0d7dfbb3a808c217b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
