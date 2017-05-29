<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_01cb822665c92ef2982e132ca3a44caa5fd0b0ad93639015a17e6a0b16a2048b extends Twig_Template
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
        $__internal_b58b08f521445d98001af8df61eb39f5e00baf555dbbefd50905727dbffb2501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b58b08f521445d98001af8df61eb39f5e00baf555dbbefd50905727dbffb2501->enter($__internal_b58b08f521445d98001af8df61eb39f5e00baf555dbbefd50905727dbffb2501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_864e0af8b48b5b5070014ad6f8b8cb2ce47427529a76d81d0437eac0c1caf209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864e0af8b48b5b5070014ad6f8b8cb2ce47427529a76d81d0437eac0c1caf209->enter($__internal_864e0af8b48b5b5070014ad6f8b8cb2ce47427529a76d81d0437eac0c1caf209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_b58b08f521445d98001af8df61eb39f5e00baf555dbbefd50905727dbffb2501->leave($__internal_b58b08f521445d98001af8df61eb39f5e00baf555dbbefd50905727dbffb2501_prof);

        
        $__internal_864e0af8b48b5b5070014ad6f8b8cb2ce47427529a76d81d0437eac0c1caf209->leave($__internal_864e0af8b48b5b5070014ad6f8b8cb2ce47427529a76d81d0437eac0c1caf209_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
