<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b7b7f28eb197315dda2c71a4e3352233258b35d9d09f523e91ea93917e06da2a extends Twig_Template
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
        $__internal_da333b0613452126532d0775850b30ef1055d09f603f5601a74d486ff9e6fb38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da333b0613452126532d0775850b30ef1055d09f603f5601a74d486ff9e6fb38->enter($__internal_da333b0613452126532d0775850b30ef1055d09f603f5601a74d486ff9e6fb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_494fb946f564415d063b089b326d42c034534e51fb1abed299818bb74a72170d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494fb946f564415d063b089b326d42c034534e51fb1abed299818bb74a72170d->enter($__internal_494fb946f564415d063b089b326d42c034534e51fb1abed299818bb74a72170d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_da333b0613452126532d0775850b30ef1055d09f603f5601a74d486ff9e6fb38->leave($__internal_da333b0613452126532d0775850b30ef1055d09f603f5601a74d486ff9e6fb38_prof);

        
        $__internal_494fb946f564415d063b089b326d42c034534e51fb1abed299818bb74a72170d->leave($__internal_494fb946f564415d063b089b326d42c034534e51fb1abed299818bb74a72170d_prof);

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
