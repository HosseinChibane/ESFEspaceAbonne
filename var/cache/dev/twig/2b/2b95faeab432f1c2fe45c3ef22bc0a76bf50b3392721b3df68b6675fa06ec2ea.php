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
        $__internal_f6cbabb2ee4c31285d79064573f7c429e0706011cd41277b767f8902161c29c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6cbabb2ee4c31285d79064573f7c429e0706011cd41277b767f8902161c29c8->enter($__internal_f6cbabb2ee4c31285d79064573f7c429e0706011cd41277b767f8902161c29c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_cd6705108ba3bf3a2c6c29ec84d8e79d7b7b441541bbf0519e13e1f2e02972bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6705108ba3bf3a2c6c29ec84d8e79d7b7b441541bbf0519e13e1f2e02972bd->enter($__internal_cd6705108ba3bf3a2c6c29ec84d8e79d7b7b441541bbf0519e13e1f2e02972bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_f6cbabb2ee4c31285d79064573f7c429e0706011cd41277b767f8902161c29c8->leave($__internal_f6cbabb2ee4c31285d79064573f7c429e0706011cd41277b767f8902161c29c8_prof);

        
        $__internal_cd6705108ba3bf3a2c6c29ec84d8e79d7b7b441541bbf0519e13e1f2e02972bd->leave($__internal_cd6705108ba3bf3a2c6c29ec84d8e79d7b7b441541bbf0519e13e1f2e02972bd_prof);

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
