<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_30ac28712bc624a22ec1228d1b19eec349b76e03ac37a1b9ace74695a05f0b36 extends Twig_Template
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
        $__internal_56fa5e3bd499dc5772815d726c23a8b1cad3902a99fcbb65ee89209889beb706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56fa5e3bd499dc5772815d726c23a8b1cad3902a99fcbb65ee89209889beb706->enter($__internal_56fa5e3bd499dc5772815d726c23a8b1cad3902a99fcbb65ee89209889beb706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_ba66d9fcda58c2f051c098a193652854781cafb334526214b487edbea4c930b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba66d9fcda58c2f051c098a193652854781cafb334526214b487edbea4c930b9->enter($__internal_ba66d9fcda58c2f051c098a193652854781cafb334526214b487edbea4c930b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_56fa5e3bd499dc5772815d726c23a8b1cad3902a99fcbb65ee89209889beb706->leave($__internal_56fa5e3bd499dc5772815d726c23a8b1cad3902a99fcbb65ee89209889beb706_prof);

        
        $__internal_ba66d9fcda58c2f051c098a193652854781cafb334526214b487edbea4c930b9->leave($__internal_ba66d9fcda58c2f051c098a193652854781cafb334526214b487edbea4c930b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
