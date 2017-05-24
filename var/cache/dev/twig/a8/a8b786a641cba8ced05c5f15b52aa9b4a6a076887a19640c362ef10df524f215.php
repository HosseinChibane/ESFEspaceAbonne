<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_95fa31a7e91d33adafadf43d97da662a616a86ec3a4b6409c8b7e485f8585744 extends Twig_Template
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
        $__internal_f2e5ffbf71073571479c544bb624d78c67218d89be8b95609a63dc7b9939b9d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e5ffbf71073571479c544bb624d78c67218d89be8b95609a63dc7b9939b9d8->enter($__internal_f2e5ffbf71073571479c544bb624d78c67218d89be8b95609a63dc7b9939b9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_3a2fddc04dfc5e502550e14ed07e0c23ec59239c5527ecabae7266770d214431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2fddc04dfc5e502550e14ed07e0c23ec59239c5527ecabae7266770d214431->enter($__internal_3a2fddc04dfc5e502550e14ed07e0c23ec59239c5527ecabae7266770d214431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f2e5ffbf71073571479c544bb624d78c67218d89be8b95609a63dc7b9939b9d8->leave($__internal_f2e5ffbf71073571479c544bb624d78c67218d89be8b95609a63dc7b9939b9d8_prof);

        
        $__internal_3a2fddc04dfc5e502550e14ed07e0c23ec59239c5527ecabae7266770d214431->leave($__internal_3a2fddc04dfc5e502550e14ed07e0c23ec59239c5527ecabae7266770d214431_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
