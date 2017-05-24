<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e714a2005216db4f8a11b94786daf673828f0144f5475251e066fa3f81239057 extends Twig_Template
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
        $__internal_70c0775673f7668fad68b331a2dcdac2198194aafe527361604be814443fb5a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70c0775673f7668fad68b331a2dcdac2198194aafe527361604be814443fb5a9->enter($__internal_70c0775673f7668fad68b331a2dcdac2198194aafe527361604be814443fb5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_24d8419aa6eb93b9b79b3e0ffd1a137e105075f5d9751589824f465d5c0ca8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d8419aa6eb93b9b79b3e0ffd1a137e105075f5d9751589824f465d5c0ca8cd->enter($__internal_24d8419aa6eb93b9b79b3e0ffd1a137e105075f5d9751589824f465d5c0ca8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_70c0775673f7668fad68b331a2dcdac2198194aafe527361604be814443fb5a9->leave($__internal_70c0775673f7668fad68b331a2dcdac2198194aafe527361604be814443fb5a9_prof);

        
        $__internal_24d8419aa6eb93b9b79b3e0ffd1a137e105075f5d9751589824f465d5c0ca8cd->leave($__internal_24d8419aa6eb93b9b79b3e0ffd1a137e105075f5d9751589824f465d5c0ca8cd_prof);

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
