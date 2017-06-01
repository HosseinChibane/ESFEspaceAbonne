<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_fb5c719df74c79e40ad770ef37c9784fae6dff1669060f8b424766541bc68f80 extends Twig_Template
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
        $__internal_e8e5c052b8ffab0535a7f70043533a86ae8f279c6ffbe7e32eda1cc50a4f6e5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e5c052b8ffab0535a7f70043533a86ae8f279c6ffbe7e32eda1cc50a4f6e5c->enter($__internal_e8e5c052b8ffab0535a7f70043533a86ae8f279c6ffbe7e32eda1cc50a4f6e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_b2c58a58ba720f4946b2ecd2bbcae15aebbe75e141cb07584780d8245841d2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c58a58ba720f4946b2ecd2bbcae15aebbe75e141cb07584780d8245841d2bd->enter($__internal_b2c58a58ba720f4946b2ecd2bbcae15aebbe75e141cb07584780d8245841d2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_e8e5c052b8ffab0535a7f70043533a86ae8f279c6ffbe7e32eda1cc50a4f6e5c->leave($__internal_e8e5c052b8ffab0535a7f70043533a86ae8f279c6ffbe7e32eda1cc50a4f6e5c_prof);

        
        $__internal_b2c58a58ba720f4946b2ecd2bbcae15aebbe75e141cb07584780d8245841d2bd->leave($__internal_b2c58a58ba720f4946b2ecd2bbcae15aebbe75e141cb07584780d8245841d2bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
