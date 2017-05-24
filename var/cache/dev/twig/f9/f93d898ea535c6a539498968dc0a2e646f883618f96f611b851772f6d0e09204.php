<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e24e58cc748cbda8711ecd98425112f3ea6e8eb80a73bb74342ed43c3b5e245e extends Twig_Template
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
        $__internal_5a1377780fb406da7b2a5a712a0019a57c860c46ede1aad37711896c7c21d7ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a1377780fb406da7b2a5a712a0019a57c860c46ede1aad37711896c7c21d7ad->enter($__internal_5a1377780fb406da7b2a5a712a0019a57c860c46ede1aad37711896c7c21d7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_6c975fa1d96441ede24cad0d7cbf2795a74b2072b2e02b2875e1eed158351078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c975fa1d96441ede24cad0d7cbf2795a74b2072b2e02b2875e1eed158351078->enter($__internal_6c975fa1d96441ede24cad0d7cbf2795a74b2072b2e02b2875e1eed158351078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5a1377780fb406da7b2a5a712a0019a57c860c46ede1aad37711896c7c21d7ad->leave($__internal_5a1377780fb406da7b2a5a712a0019a57c860c46ede1aad37711896c7c21d7ad_prof);

        
        $__internal_6c975fa1d96441ede24cad0d7cbf2795a74b2072b2e02b2875e1eed158351078->leave($__internal_6c975fa1d96441ede24cad0d7cbf2795a74b2072b2e02b2875e1eed158351078_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
