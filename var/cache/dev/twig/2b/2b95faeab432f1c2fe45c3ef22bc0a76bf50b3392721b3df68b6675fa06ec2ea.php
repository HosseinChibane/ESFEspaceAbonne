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
        $__internal_c54376f08ad99e8102670d544d08974d0ce3d4b3d04c6fbc1d3c115ee298d8f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c54376f08ad99e8102670d544d08974d0ce3d4b3d04c6fbc1d3c115ee298d8f3->enter($__internal_c54376f08ad99e8102670d544d08974d0ce3d4b3d04c6fbc1d3c115ee298d8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_4e8c8b56b355b88a556995d07a4f8705d73a22838905604501aaec3e691a0f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8c8b56b355b88a556995d07a4f8705d73a22838905604501aaec3e691a0f9d->enter($__internal_4e8c8b56b355b88a556995d07a4f8705d73a22838905604501aaec3e691a0f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_c54376f08ad99e8102670d544d08974d0ce3d4b3d04c6fbc1d3c115ee298d8f3->leave($__internal_c54376f08ad99e8102670d544d08974d0ce3d4b3d04c6fbc1d3c115ee298d8f3_prof);

        
        $__internal_4e8c8b56b355b88a556995d07a4f8705d73a22838905604501aaec3e691a0f9d->leave($__internal_4e8c8b56b355b88a556995d07a4f8705d73a22838905604501aaec3e691a0f9d_prof);

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
