<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1b684c12d5ac18e76f3e2a69cdbf78937885ff4f08b5f21e84251e9e7b7e8bb2 extends Twig_Template
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
        $__internal_525bfe1878d8c288f38f64dd1c355430c0168e05493ab695a0cd3879c1a8208f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_525bfe1878d8c288f38f64dd1c355430c0168e05493ab695a0cd3879c1a8208f->enter($__internal_525bfe1878d8c288f38f64dd1c355430c0168e05493ab695a0cd3879c1a8208f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_6d24075ae1ec55f0d128f43bf622de9341ac560ab3811f6cf99d16a67e974e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d24075ae1ec55f0d128f43bf622de9341ac560ab3811f6cf99d16a67e974e63->enter($__internal_6d24075ae1ec55f0d128f43bf622de9341ac560ab3811f6cf99d16a67e974e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_525bfe1878d8c288f38f64dd1c355430c0168e05493ab695a0cd3879c1a8208f->leave($__internal_525bfe1878d8c288f38f64dd1c355430c0168e05493ab695a0cd3879c1a8208f_prof);

        
        $__internal_6d24075ae1ec55f0d128f43bf622de9341ac560ab3811f6cf99d16a67e974e63->leave($__internal_6d24075ae1ec55f0d128f43bf622de9341ac560ab3811f6cf99d16a67e974e63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
