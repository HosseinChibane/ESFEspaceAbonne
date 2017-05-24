<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_aade2d830bd47fd4680fbeb29a87a6453ab2a03151fdd188aa4ee8b3e7f45a7d extends Twig_Template
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
        $__internal_0f967d7f0074b011d8406f2b8d9aa34a8354ad81b98b006e882d97b218db43f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f967d7f0074b011d8406f2b8d9aa34a8354ad81b98b006e882d97b218db43f4->enter($__internal_0f967d7f0074b011d8406f2b8d9aa34a8354ad81b98b006e882d97b218db43f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_fb4d11c208f85753b8eb4a401fac20b630e57f943632317c594ea825761c6c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4d11c208f85753b8eb4a401fac20b630e57f943632317c594ea825761c6c56->enter($__internal_fb4d11c208f85753b8eb4a401fac20b630e57f943632317c594ea825761c6c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0f967d7f0074b011d8406f2b8d9aa34a8354ad81b98b006e882d97b218db43f4->leave($__internal_0f967d7f0074b011d8406f2b8d9aa34a8354ad81b98b006e882d97b218db43f4_prof);

        
        $__internal_fb4d11c208f85753b8eb4a401fac20b630e57f943632317c594ea825761c6c56->leave($__internal_fb4d11c208f85753b8eb4a401fac20b630e57f943632317c594ea825761c6c56_prof);

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
