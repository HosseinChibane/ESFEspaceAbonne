<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_77d36cc97d605e2b63fbb2dd1489a283a59cf9e0e75c7646bd92ffa5a2fb5f09 extends Twig_Template
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
        $__internal_2646c611964ebfdabd2fbf6f30dc6ce6fc73129f840bf6cbc7117d5e2208db4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2646c611964ebfdabd2fbf6f30dc6ce6fc73129f840bf6cbc7117d5e2208db4e->enter($__internal_2646c611964ebfdabd2fbf6f30dc6ce6fc73129f840bf6cbc7117d5e2208db4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_3f7a205bdbe00fdf872c44f5d557a73ccdb4f89d1758547049d5aa381c1eebb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7a205bdbe00fdf872c44f5d557a73ccdb4f89d1758547049d5aa381c1eebb1->enter($__internal_3f7a205bdbe00fdf872c44f5d557a73ccdb4f89d1758547049d5aa381c1eebb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_2646c611964ebfdabd2fbf6f30dc6ce6fc73129f840bf6cbc7117d5e2208db4e->leave($__internal_2646c611964ebfdabd2fbf6f30dc6ce6fc73129f840bf6cbc7117d5e2208db4e_prof);

        
        $__internal_3f7a205bdbe00fdf872c44f5d557a73ccdb4f89d1758547049d5aa381c1eebb1->leave($__internal_3f7a205bdbe00fdf872c44f5d557a73ccdb4f89d1758547049d5aa381c1eebb1_prof);

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
