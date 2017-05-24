<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_c887d2798da2486c7bd2d4eea95f6406761791e2088b6921e156fc32171fc4dd extends Twig_Template
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
        $__internal_f47101332fdc1deb163b7c2ee020040a71357cfe3da5093c2d74cc57f276e845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f47101332fdc1deb163b7c2ee020040a71357cfe3da5093c2d74cc57f276e845->enter($__internal_f47101332fdc1deb163b7c2ee020040a71357cfe3da5093c2d74cc57f276e845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_696645c1c5759d97ae57429dd0bbde9db74d28631ea0e7fc7c3c34145c80eb5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696645c1c5759d97ae57429dd0bbde9db74d28631ea0e7fc7c3c34145c80eb5c->enter($__internal_696645c1c5759d97ae57429dd0bbde9db74d28631ea0e7fc7c3c34145c80eb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f47101332fdc1deb163b7c2ee020040a71357cfe3da5093c2d74cc57f276e845->leave($__internal_f47101332fdc1deb163b7c2ee020040a71357cfe3da5093c2d74cc57f276e845_prof);

        
        $__internal_696645c1c5759d97ae57429dd0bbde9db74d28631ea0e7fc7c3c34145c80eb5c->leave($__internal_696645c1c5759d97ae57429dd0bbde9db74d28631ea0e7fc7c3c34145c80eb5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
