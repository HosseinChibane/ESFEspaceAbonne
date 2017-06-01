<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_adaaba6852753e3968e06870b3f11f98f178234da6acab0b41589d54546f0256 extends Twig_Template
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
        $__internal_984272f15776b9c52c5453c31fe636dda2fc2b03cda5b141a3f75ffc9a766b64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_984272f15776b9c52c5453c31fe636dda2fc2b03cda5b141a3f75ffc9a766b64->enter($__internal_984272f15776b9c52c5453c31fe636dda2fc2b03cda5b141a3f75ffc9a766b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a936d3ce9f4e1ee491bcb3984ffe93cdfeba0d5c3a62514a24216940f63d2006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a936d3ce9f4e1ee491bcb3984ffe93cdfeba0d5c3a62514a24216940f63d2006->enter($__internal_a936d3ce9f4e1ee491bcb3984ffe93cdfeba0d5c3a62514a24216940f63d2006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_984272f15776b9c52c5453c31fe636dda2fc2b03cda5b141a3f75ffc9a766b64->leave($__internal_984272f15776b9c52c5453c31fe636dda2fc2b03cda5b141a3f75ffc9a766b64_prof);

        
        $__internal_a936d3ce9f4e1ee491bcb3984ffe93cdfeba0d5c3a62514a24216940f63d2006->leave($__internal_a936d3ce9f4e1ee491bcb3984ffe93cdfeba0d5c3a62514a24216940f63d2006_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
