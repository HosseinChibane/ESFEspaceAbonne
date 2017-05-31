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
        $__internal_ea29e06dd29cffe9d3ed64bb2d8e985495a3b224463b3fb24963708999832f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea29e06dd29cffe9d3ed64bb2d8e985495a3b224463b3fb24963708999832f9f->enter($__internal_ea29e06dd29cffe9d3ed64bb2d8e985495a3b224463b3fb24963708999832f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_41e3cd8165ae1e4f6edcad3556f132d430ca334259b7651cb06b12a5e88ec30a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e3cd8165ae1e4f6edcad3556f132d430ca334259b7651cb06b12a5e88ec30a->enter($__internal_41e3cd8165ae1e4f6edcad3556f132d430ca334259b7651cb06b12a5e88ec30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ea29e06dd29cffe9d3ed64bb2d8e985495a3b224463b3fb24963708999832f9f->leave($__internal_ea29e06dd29cffe9d3ed64bb2d8e985495a3b224463b3fb24963708999832f9f_prof);

        
        $__internal_41e3cd8165ae1e4f6edcad3556f132d430ca334259b7651cb06b12a5e88ec30a->leave($__internal_41e3cd8165ae1e4f6edcad3556f132d430ca334259b7651cb06b12a5e88ec30a_prof);

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
