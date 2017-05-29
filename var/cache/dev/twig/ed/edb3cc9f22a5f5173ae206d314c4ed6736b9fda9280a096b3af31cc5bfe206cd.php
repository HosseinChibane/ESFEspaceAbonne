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
        $__internal_4ffb1ab47177cabdd60d8a7de6499949a195dabfadc0292d539311a3d28a7107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ffb1ab47177cabdd60d8a7de6499949a195dabfadc0292d539311a3d28a7107->enter($__internal_4ffb1ab47177cabdd60d8a7de6499949a195dabfadc0292d539311a3d28a7107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_4b9578ec0fcbb4fa5fbe606a3e94c51a16c9fdeb6614e00d29bc40602a95d836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9578ec0fcbb4fa5fbe606a3e94c51a16c9fdeb6614e00d29bc40602a95d836->enter($__internal_4b9578ec0fcbb4fa5fbe606a3e94c51a16c9fdeb6614e00d29bc40602a95d836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4ffb1ab47177cabdd60d8a7de6499949a195dabfadc0292d539311a3d28a7107->leave($__internal_4ffb1ab47177cabdd60d8a7de6499949a195dabfadc0292d539311a3d28a7107_prof);

        
        $__internal_4b9578ec0fcbb4fa5fbe606a3e94c51a16c9fdeb6614e00d29bc40602a95d836->leave($__internal_4b9578ec0fcbb4fa5fbe606a3e94c51a16c9fdeb6614e00d29bc40602a95d836_prof);

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
