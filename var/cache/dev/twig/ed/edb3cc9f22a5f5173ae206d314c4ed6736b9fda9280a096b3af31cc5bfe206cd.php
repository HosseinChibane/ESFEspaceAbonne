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
        $__internal_d813cf4871f7bcc4c03436e6f48183d2d88acf194597c1a51ac0fafc78f464dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d813cf4871f7bcc4c03436e6f48183d2d88acf194597c1a51ac0fafc78f464dc->enter($__internal_d813cf4871f7bcc4c03436e6f48183d2d88acf194597c1a51ac0fafc78f464dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_1dd4eb0e7d3b931903c3fe6ad115f5b68927eb9c3295dc7a121a4742199e3992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd4eb0e7d3b931903c3fe6ad115f5b68927eb9c3295dc7a121a4742199e3992->enter($__internal_1dd4eb0e7d3b931903c3fe6ad115f5b68927eb9c3295dc7a121a4742199e3992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d813cf4871f7bcc4c03436e6f48183d2d88acf194597c1a51ac0fafc78f464dc->leave($__internal_d813cf4871f7bcc4c03436e6f48183d2d88acf194597c1a51ac0fafc78f464dc_prof);

        
        $__internal_1dd4eb0e7d3b931903c3fe6ad115f5b68927eb9c3295dc7a121a4742199e3992->leave($__internal_1dd4eb0e7d3b931903c3fe6ad115f5b68927eb9c3295dc7a121a4742199e3992_prof);

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
