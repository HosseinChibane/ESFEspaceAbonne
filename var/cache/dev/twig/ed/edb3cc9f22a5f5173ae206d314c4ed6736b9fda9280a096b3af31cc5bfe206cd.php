<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_90b1be05e1efb265ec184d9c7cb953498576c622250d62e2ed13f4acf416c7e9 extends Twig_Template
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
        $__internal_28906c7ba1cc8ce6161b8d7352ef2179a8f27212c65336e2abd0feb66f9e8858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28906c7ba1cc8ce6161b8d7352ef2179a8f27212c65336e2abd0feb66f9e8858->enter($__internal_28906c7ba1cc8ce6161b8d7352ef2179a8f27212c65336e2abd0feb66f9e8858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_e66c47b45437fc4b4bf6323e2ebb09eb757cf535fc6e79f7f6faf125923dcdc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66c47b45437fc4b4bf6323e2ebb09eb757cf535fc6e79f7f6faf125923dcdc2->enter($__internal_e66c47b45437fc4b4bf6323e2ebb09eb757cf535fc6e79f7f6faf125923dcdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_28906c7ba1cc8ce6161b8d7352ef2179a8f27212c65336e2abd0feb66f9e8858->leave($__internal_28906c7ba1cc8ce6161b8d7352ef2179a8f27212c65336e2abd0feb66f9e8858_prof);

        
        $__internal_e66c47b45437fc4b4bf6323e2ebb09eb757cf535fc6e79f7f6faf125923dcdc2->leave($__internal_e66c47b45437fc4b4bf6323e2ebb09eb757cf535fc6e79f7f6faf125923dcdc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
