<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6f122d01da64860d0a33ce5c31f23410041fbe53547b2aba1efd9025a2916d98 extends Twig_Template
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
        $__internal_e3688b4d5093cdb368806aa80a3e835174a1c09ad093be9f6f12a7abb36817f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3688b4d5093cdb368806aa80a3e835174a1c09ad093be9f6f12a7abb36817f2->enter($__internal_e3688b4d5093cdb368806aa80a3e835174a1c09ad093be9f6f12a7abb36817f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_e019c08b4d158b24901a0103f6a16dd4ca1f21fa7c73356ded5d4de8bb0114cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e019c08b4d158b24901a0103f6a16dd4ca1f21fa7c73356ded5d4de8bb0114cc->enter($__internal_e019c08b4d158b24901a0103f6a16dd4ca1f21fa7c73356ded5d4de8bb0114cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e3688b4d5093cdb368806aa80a3e835174a1c09ad093be9f6f12a7abb36817f2->leave($__internal_e3688b4d5093cdb368806aa80a3e835174a1c09ad093be9f6f12a7abb36817f2_prof);

        
        $__internal_e019c08b4d158b24901a0103f6a16dd4ca1f21fa7c73356ded5d4de8bb0114cc->leave($__internal_e019c08b4d158b24901a0103f6a16dd4ca1f21fa7c73356ded5d4de8bb0114cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
