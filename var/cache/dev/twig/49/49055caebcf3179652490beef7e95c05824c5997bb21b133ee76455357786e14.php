<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b4600fb806b3f66ad98a5c5c49beb9783cbf18bf9a4d36f3f305f33a097f870e extends Twig_Template
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
        $__internal_0ed2f93eade731bf31a88a85fddd26034d54c23756df1546b7139f41ce757d21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed2f93eade731bf31a88a85fddd26034d54c23756df1546b7139f41ce757d21->enter($__internal_0ed2f93eade731bf31a88a85fddd26034d54c23756df1546b7139f41ce757d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_dd42813513514de2b03fc94b9154fb81df669bbe917c630193bcb9b9fac550fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd42813513514de2b03fc94b9154fb81df669bbe917c630193bcb9b9fac550fd->enter($__internal_dd42813513514de2b03fc94b9154fb81df669bbe917c630193bcb9b9fac550fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0ed2f93eade731bf31a88a85fddd26034d54c23756df1546b7139f41ce757d21->leave($__internal_0ed2f93eade731bf31a88a85fddd26034d54c23756df1546b7139f41ce757d21_prof);

        
        $__internal_dd42813513514de2b03fc94b9154fb81df669bbe917c630193bcb9b9fac550fd->leave($__internal_dd42813513514de2b03fc94b9154fb81df669bbe917c630193bcb9b9fac550fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
