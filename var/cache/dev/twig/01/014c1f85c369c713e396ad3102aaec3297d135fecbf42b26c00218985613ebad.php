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
        $__internal_8f1a684b4ab94d6f9cc639640b484e7a7909cb8b44ec7948dfc277fe2c89d43c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f1a684b4ab94d6f9cc639640b484e7a7909cb8b44ec7948dfc277fe2c89d43c->enter($__internal_8f1a684b4ab94d6f9cc639640b484e7a7909cb8b44ec7948dfc277fe2c89d43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_67b57459131b60087d5407587217372e1a4effa755fa546bde371ff4af80355c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b57459131b60087d5407587217372e1a4effa755fa546bde371ff4af80355c->enter($__internal_67b57459131b60087d5407587217372e1a4effa755fa546bde371ff4af80355c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8f1a684b4ab94d6f9cc639640b484e7a7909cb8b44ec7948dfc277fe2c89d43c->leave($__internal_8f1a684b4ab94d6f9cc639640b484e7a7909cb8b44ec7948dfc277fe2c89d43c_prof);

        
        $__internal_67b57459131b60087d5407587217372e1a4effa755fa546bde371ff4af80355c->leave($__internal_67b57459131b60087d5407587217372e1a4effa755fa546bde371ff4af80355c_prof);

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
