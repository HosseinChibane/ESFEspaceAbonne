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
        $__internal_e2bff0045aa880fa6c9286aa241546390e62d8f1dd9d33e2ea852c0dc466cfe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2bff0045aa880fa6c9286aa241546390e62d8f1dd9d33e2ea852c0dc466cfe1->enter($__internal_e2bff0045aa880fa6c9286aa241546390e62d8f1dd9d33e2ea852c0dc466cfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_70cfc744937e5e5a23cf5c74cdd5c114419de72a57a996844393b3a12f3cd6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70cfc744937e5e5a23cf5c74cdd5c114419de72a57a996844393b3a12f3cd6e5->enter($__internal_70cfc744937e5e5a23cf5c74cdd5c114419de72a57a996844393b3a12f3cd6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e2bff0045aa880fa6c9286aa241546390e62d8f1dd9d33e2ea852c0dc466cfe1->leave($__internal_e2bff0045aa880fa6c9286aa241546390e62d8f1dd9d33e2ea852c0dc466cfe1_prof);

        
        $__internal_70cfc744937e5e5a23cf5c74cdd5c114419de72a57a996844393b3a12f3cd6e5->leave($__internal_70cfc744937e5e5a23cf5c74cdd5c114419de72a57a996844393b3a12f3cd6e5_prof);

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
