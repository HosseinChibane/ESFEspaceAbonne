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
        $__internal_3da3d84f1a355ae76c3f349442732e8eeed8bfe21b320584af28f0c2dd6f1f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3da3d84f1a355ae76c3f349442732e8eeed8bfe21b320584af28f0c2dd6f1f00->enter($__internal_3da3d84f1a355ae76c3f349442732e8eeed8bfe21b320584af28f0c2dd6f1f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_f1a8082c9db688cd8ee9de235fd9a666e38254276176a3ee88e620553d2764f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a8082c9db688cd8ee9de235fd9a666e38254276176a3ee88e620553d2764f4->enter($__internal_f1a8082c9db688cd8ee9de235fd9a666e38254276176a3ee88e620553d2764f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_3da3d84f1a355ae76c3f349442732e8eeed8bfe21b320584af28f0c2dd6f1f00->leave($__internal_3da3d84f1a355ae76c3f349442732e8eeed8bfe21b320584af28f0c2dd6f1f00_prof);

        
        $__internal_f1a8082c9db688cd8ee9de235fd9a666e38254276176a3ee88e620553d2764f4->leave($__internal_f1a8082c9db688cd8ee9de235fd9a666e38254276176a3ee88e620553d2764f4_prof);

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
