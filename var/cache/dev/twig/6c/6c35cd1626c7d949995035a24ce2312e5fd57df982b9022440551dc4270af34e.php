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
        $__internal_ef2a20a4c8c79af35d4b5e824f6c5ecd56229df8fe3e9cdacbb08481bab70b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef2a20a4c8c79af35d4b5e824f6c5ecd56229df8fe3e9cdacbb08481bab70b8b->enter($__internal_ef2a20a4c8c79af35d4b5e824f6c5ecd56229df8fe3e9cdacbb08481bab70b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_9345d907718f8ab15c00b9292a1a0ccaa753ada71876da54f5d2ef1d08df8ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9345d907718f8ab15c00b9292a1a0ccaa753ada71876da54f5d2ef1d08df8ee3->enter($__internal_9345d907718f8ab15c00b9292a1a0ccaa753ada71876da54f5d2ef1d08df8ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ef2a20a4c8c79af35d4b5e824f6c5ecd56229df8fe3e9cdacbb08481bab70b8b->leave($__internal_ef2a20a4c8c79af35d4b5e824f6c5ecd56229df8fe3e9cdacbb08481bab70b8b_prof);

        
        $__internal_9345d907718f8ab15c00b9292a1a0ccaa753ada71876da54f5d2ef1d08df8ee3->leave($__internal_9345d907718f8ab15c00b9292a1a0ccaa753ada71876da54f5d2ef1d08df8ee3_prof);

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
