<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1ab0271bbaae5a075bbd93fdb6a5c83673fdec6d73459ad42dbe75e89ac5cbcc extends Twig_Template
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
        $__internal_8dd3fba43acfad22d57f6f5c45fb2b44a4e50d7b8a299e61d246b539b5cc601b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dd3fba43acfad22d57f6f5c45fb2b44a4e50d7b8a299e61d246b539b5cc601b->enter($__internal_8dd3fba43acfad22d57f6f5c45fb2b44a4e50d7b8a299e61d246b539b5cc601b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_3d48540b8dd63b9b8f9cd57d05ce7eab2828b4739bf99eb830c3e11da420b641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d48540b8dd63b9b8f9cd57d05ce7eab2828b4739bf99eb830c3e11da420b641->enter($__internal_3d48540b8dd63b9b8f9cd57d05ce7eab2828b4739bf99eb830c3e11da420b641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8dd3fba43acfad22d57f6f5c45fb2b44a4e50d7b8a299e61d246b539b5cc601b->leave($__internal_8dd3fba43acfad22d57f6f5c45fb2b44a4e50d7b8a299e61d246b539b5cc601b_prof);

        
        $__internal_3d48540b8dd63b9b8f9cd57d05ce7eab2828b4739bf99eb830c3e11da420b641->leave($__internal_3d48540b8dd63b9b8f9cd57d05ce7eab2828b4739bf99eb830c3e11da420b641_prof);

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
