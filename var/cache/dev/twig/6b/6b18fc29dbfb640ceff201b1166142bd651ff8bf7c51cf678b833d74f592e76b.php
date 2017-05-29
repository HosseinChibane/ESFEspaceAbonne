<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6716c4dfec09a59d8831e012a34a4cc3f7327e82da36e38416b69db277814ac1 extends Twig_Template
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
        $__internal_e90c9f6e281f8f8e180c3a15bb7f4c371ba6796795a5d190fd84340d452fd5d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e90c9f6e281f8f8e180c3a15bb7f4c371ba6796795a5d190fd84340d452fd5d1->enter($__internal_e90c9f6e281f8f8e180c3a15bb7f4c371ba6796795a5d190fd84340d452fd5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_cda107bc3471a57fd96176afd46aa6f661778b0e9422e74508203c1efd080629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda107bc3471a57fd96176afd46aa6f661778b0e9422e74508203c1efd080629->enter($__internal_cda107bc3471a57fd96176afd46aa6f661778b0e9422e74508203c1efd080629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e90c9f6e281f8f8e180c3a15bb7f4c371ba6796795a5d190fd84340d452fd5d1->leave($__internal_e90c9f6e281f8f8e180c3a15bb7f4c371ba6796795a5d190fd84340d452fd5d1_prof);

        
        $__internal_cda107bc3471a57fd96176afd46aa6f661778b0e9422e74508203c1efd080629->leave($__internal_cda107bc3471a57fd96176afd46aa6f661778b0e9422e74508203c1efd080629_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
