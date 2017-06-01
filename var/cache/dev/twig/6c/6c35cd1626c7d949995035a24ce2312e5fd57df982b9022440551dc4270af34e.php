<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b30134b5e33f81e22bfad011feb4f0e86a5931e8ba4ffaa0308162da0d8042d2 extends Twig_Template
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
        $__internal_68089565ea0d20bfbea3f48b0205ed8ccbbbfdd559de87110c32743a292f001b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68089565ea0d20bfbea3f48b0205ed8ccbbbfdd559de87110c32743a292f001b->enter($__internal_68089565ea0d20bfbea3f48b0205ed8ccbbbfdd559de87110c32743a292f001b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_764b36faabd33c1e85ea9b0c8334696b4aab48fc50ab524eafd61ccc1f504833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764b36faabd33c1e85ea9b0c8334696b4aab48fc50ab524eafd61ccc1f504833->enter($__internal_764b36faabd33c1e85ea9b0c8334696b4aab48fc50ab524eafd61ccc1f504833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_68089565ea0d20bfbea3f48b0205ed8ccbbbfdd559de87110c32743a292f001b->leave($__internal_68089565ea0d20bfbea3f48b0205ed8ccbbbfdd559de87110c32743a292f001b_prof);

        
        $__internal_764b36faabd33c1e85ea9b0c8334696b4aab48fc50ab524eafd61ccc1f504833->leave($__internal_764b36faabd33c1e85ea9b0c8334696b4aab48fc50ab524eafd61ccc1f504833_prof);

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
