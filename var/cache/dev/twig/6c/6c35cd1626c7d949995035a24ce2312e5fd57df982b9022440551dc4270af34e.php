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
        $__internal_ac5b53b92d18eba1d0c77207933bd05aec5d263cf4a7cb923acce169270f81a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac5b53b92d18eba1d0c77207933bd05aec5d263cf4a7cb923acce169270f81a4->enter($__internal_ac5b53b92d18eba1d0c77207933bd05aec5d263cf4a7cb923acce169270f81a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b8e7c4a60b8d1892369958b182e8011c93ba54daee0d8d97546b0effd1f8b782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e7c4a60b8d1892369958b182e8011c93ba54daee0d8d97546b0effd1f8b782->enter($__internal_b8e7c4a60b8d1892369958b182e8011c93ba54daee0d8d97546b0effd1f8b782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ac5b53b92d18eba1d0c77207933bd05aec5d263cf4a7cb923acce169270f81a4->leave($__internal_ac5b53b92d18eba1d0c77207933bd05aec5d263cf4a7cb923acce169270f81a4_prof);

        
        $__internal_b8e7c4a60b8d1892369958b182e8011c93ba54daee0d8d97546b0effd1f8b782->leave($__internal_b8e7c4a60b8d1892369958b182e8011c93ba54daee0d8d97546b0effd1f8b782_prof);

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
