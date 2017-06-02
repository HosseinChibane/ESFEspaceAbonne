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
        $__internal_fe82b3c3f85ab3bb74a854e3c5dc96b9d73103fbf5de3ab18c4199bd240d8fa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe82b3c3f85ab3bb74a854e3c5dc96b9d73103fbf5de3ab18c4199bd240d8fa3->enter($__internal_fe82b3c3f85ab3bb74a854e3c5dc96b9d73103fbf5de3ab18c4199bd240d8fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_4b61d72b37f9c3bb4003aceb5a6662aad044385ecfe354db34c01d21d2e260f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b61d72b37f9c3bb4003aceb5a6662aad044385ecfe354db34c01d21d2e260f6->enter($__internal_4b61d72b37f9c3bb4003aceb5a6662aad044385ecfe354db34c01d21d2e260f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_fe82b3c3f85ab3bb74a854e3c5dc96b9d73103fbf5de3ab18c4199bd240d8fa3->leave($__internal_fe82b3c3f85ab3bb74a854e3c5dc96b9d73103fbf5de3ab18c4199bd240d8fa3_prof);

        
        $__internal_4b61d72b37f9c3bb4003aceb5a6662aad044385ecfe354db34c01d21d2e260f6->leave($__internal_4b61d72b37f9c3bb4003aceb5a6662aad044385ecfe354db34c01d21d2e260f6_prof);

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
