<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_411da547c96079767d1ef75e1084bb03664a1a0896e384aab2fe96dc8555ac8c extends Twig_Template
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
        $__internal_99995a93d587ffbf8e1f54b9c447599aebfd59aec5debd32c1721be8c9948d69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99995a93d587ffbf8e1f54b9c447599aebfd59aec5debd32c1721be8c9948d69->enter($__internal_99995a93d587ffbf8e1f54b9c447599aebfd59aec5debd32c1721be8c9948d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_aef645c70db831f1d899811cc326fa7f713d019703677d00eecac6432f7fbc04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef645c70db831f1d899811cc326fa7f713d019703677d00eecac6432f7fbc04->enter($__internal_aef645c70db831f1d899811cc326fa7f713d019703677d00eecac6432f7fbc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_99995a93d587ffbf8e1f54b9c447599aebfd59aec5debd32c1721be8c9948d69->leave($__internal_99995a93d587ffbf8e1f54b9c447599aebfd59aec5debd32c1721be8c9948d69_prof);

        
        $__internal_aef645c70db831f1d899811cc326fa7f713d019703677d00eecac6432f7fbc04->leave($__internal_aef645c70db831f1d899811cc326fa7f713d019703677d00eecac6432f7fbc04_prof);

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
