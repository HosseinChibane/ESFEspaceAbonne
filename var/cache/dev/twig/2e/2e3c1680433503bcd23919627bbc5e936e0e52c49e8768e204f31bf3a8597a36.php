<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4c36caa496ea4d5b3a670a4a6db11775cdb05530be57534cf29e179c6acb3f89 extends Twig_Template
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
        $__internal_58e73f54d5e75ae5fd8eec943d68da7efc18915f7d01509b5bc567d0c3345933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58e73f54d5e75ae5fd8eec943d68da7efc18915f7d01509b5bc567d0c3345933->enter($__internal_58e73f54d5e75ae5fd8eec943d68da7efc18915f7d01509b5bc567d0c3345933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_ffd6da9355e125b54f70dae1ee951560d9497d47e51d6be9abc85e6eda84fc27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd6da9355e125b54f70dae1ee951560d9497d47e51d6be9abc85e6eda84fc27->enter($__internal_ffd6da9355e125b54f70dae1ee951560d9497d47e51d6be9abc85e6eda84fc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_58e73f54d5e75ae5fd8eec943d68da7efc18915f7d01509b5bc567d0c3345933->leave($__internal_58e73f54d5e75ae5fd8eec943d68da7efc18915f7d01509b5bc567d0c3345933_prof);

        
        $__internal_ffd6da9355e125b54f70dae1ee951560d9497d47e51d6be9abc85e6eda84fc27->leave($__internal_ffd6da9355e125b54f70dae1ee951560d9497d47e51d6be9abc85e6eda84fc27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
