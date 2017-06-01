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
        $__internal_afed4b99a4cc7d2fd3d58595f79205cff3da8e4aecae6c76d9defef70102bdd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afed4b99a4cc7d2fd3d58595f79205cff3da8e4aecae6c76d9defef70102bdd7->enter($__internal_afed4b99a4cc7d2fd3d58595f79205cff3da8e4aecae6c76d9defef70102bdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_ab9eb03aa90830ecd33771d00b91e342ac3c3ceb5add188b0c62b5870af3ebb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab9eb03aa90830ecd33771d00b91e342ac3c3ceb5add188b0c62b5870af3ebb9->enter($__internal_ab9eb03aa90830ecd33771d00b91e342ac3c3ceb5add188b0c62b5870af3ebb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_afed4b99a4cc7d2fd3d58595f79205cff3da8e4aecae6c76d9defef70102bdd7->leave($__internal_afed4b99a4cc7d2fd3d58595f79205cff3da8e4aecae6c76d9defef70102bdd7_prof);

        
        $__internal_ab9eb03aa90830ecd33771d00b91e342ac3c3ceb5add188b0c62b5870af3ebb9->leave($__internal_ab9eb03aa90830ecd33771d00b91e342ac3c3ceb5add188b0c62b5870af3ebb9_prof);

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
