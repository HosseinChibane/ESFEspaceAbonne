<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6f34015bf166514d5957cf3229b72d8f85cc5f00074a43fc7d4bb1165f5f3e6c extends Twig_Template
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
        $__internal_d48d32301baa62cc0cc50c80265b461a6100e3f28818378dee8e416111699db2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48d32301baa62cc0cc50c80265b461a6100e3f28818378dee8e416111699db2->enter($__internal_d48d32301baa62cc0cc50c80265b461a6100e3f28818378dee8e416111699db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_5cc19a0d2d0b70ac9833f25bc07eb4e985ae6cd10fac696a9fd21286c296c436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc19a0d2d0b70ac9833f25bc07eb4e985ae6cd10fac696a9fd21286c296c436->enter($__internal_5cc19a0d2d0b70ac9833f25bc07eb4e985ae6cd10fac696a9fd21286c296c436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d48d32301baa62cc0cc50c80265b461a6100e3f28818378dee8e416111699db2->leave($__internal_d48d32301baa62cc0cc50c80265b461a6100e3f28818378dee8e416111699db2_prof);

        
        $__internal_5cc19a0d2d0b70ac9833f25bc07eb4e985ae6cd10fac696a9fd21286c296c436->leave($__internal_5cc19a0d2d0b70ac9833f25bc07eb4e985ae6cd10fac696a9fd21286c296c436_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
