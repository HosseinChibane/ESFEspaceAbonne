<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a379409ddc17e52af0ebf06c69b535a17e088c8b33bbb9e37b72402fbf9884ab extends Twig_Template
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
        $__internal_56915ee9ed53f650a5277f133561f97c676d4c97b57d67524a742b721f0e42fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56915ee9ed53f650a5277f133561f97c676d4c97b57d67524a742b721f0e42fb->enter($__internal_56915ee9ed53f650a5277f133561f97c676d4c97b57d67524a742b721f0e42fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_87ff198a462fe83c5719f317062383faf827fef04948605600c2acb973375390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ff198a462fe83c5719f317062383faf827fef04948605600c2acb973375390->enter($__internal_87ff198a462fe83c5719f317062383faf827fef04948605600c2acb973375390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_56915ee9ed53f650a5277f133561f97c676d4c97b57d67524a742b721f0e42fb->leave($__internal_56915ee9ed53f650a5277f133561f97c676d4c97b57d67524a742b721f0e42fb_prof);

        
        $__internal_87ff198a462fe83c5719f317062383faf827fef04948605600c2acb973375390->leave($__internal_87ff198a462fe83c5719f317062383faf827fef04948605600c2acb973375390_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
