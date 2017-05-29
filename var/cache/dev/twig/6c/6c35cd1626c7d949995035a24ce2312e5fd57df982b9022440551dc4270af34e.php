<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b30134b5e33f81e22bfad011feb4f0e86a5931e8ba4ffaa0308162da0d8042d2 extends Twig_Template
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
        $__internal_e8a4ada6d1a24c872310295a46541902427f6ce6e4c9ea39f6c2b7bcfffbebb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a4ada6d1a24c872310295a46541902427f6ce6e4c9ea39f6c2b7bcfffbebb5->enter($__internal_e8a4ada6d1a24c872310295a46541902427f6ce6e4c9ea39f6c2b7bcfffbebb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_1321f93314f3dda0adcbd75425ba83202dd5ce4ec8c0e9678fc6b30ee6f03a26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1321f93314f3dda0adcbd75425ba83202dd5ce4ec8c0e9678fc6b30ee6f03a26->enter($__internal_1321f93314f3dda0adcbd75425ba83202dd5ce4ec8c0e9678fc6b30ee6f03a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e8a4ada6d1a24c872310295a46541902427f6ce6e4c9ea39f6c2b7bcfffbebb5->leave($__internal_e8a4ada6d1a24c872310295a46541902427f6ce6e4c9ea39f6c2b7bcfffbebb5_prof);

        
        $__internal_1321f93314f3dda0adcbd75425ba83202dd5ce4ec8c0e9678fc6b30ee6f03a26->leave($__internal_1321f93314f3dda0adcbd75425ba83202dd5ce4ec8c0e9678fc6b30ee6f03a26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
