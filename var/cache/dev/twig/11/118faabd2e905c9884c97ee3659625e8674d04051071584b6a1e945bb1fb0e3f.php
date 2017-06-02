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
        $__internal_79d741abe94ff09595fe4cc3dce4a647ae5c950637ea404f2e118d45921b5c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d741abe94ff09595fe4cc3dce4a647ae5c950637ea404f2e118d45921b5c7c->enter($__internal_79d741abe94ff09595fe4cc3dce4a647ae5c950637ea404f2e118d45921b5c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_495b3047d3d4777e884fc1b0b52c3d328c9699a42e580b865e7289a28bf3fff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495b3047d3d4777e884fc1b0b52c3d328c9699a42e580b865e7289a28bf3fff9->enter($__internal_495b3047d3d4777e884fc1b0b52c3d328c9699a42e580b865e7289a28bf3fff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_79d741abe94ff09595fe4cc3dce4a647ae5c950637ea404f2e118d45921b5c7c->leave($__internal_79d741abe94ff09595fe4cc3dce4a647ae5c950637ea404f2e118d45921b5c7c_prof);

        
        $__internal_495b3047d3d4777e884fc1b0b52c3d328c9699a42e580b865e7289a28bf3fff9->leave($__internal_495b3047d3d4777e884fc1b0b52c3d328c9699a42e580b865e7289a28bf3fff9_prof);

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
