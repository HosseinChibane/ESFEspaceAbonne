<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a831c0061d5952deb29fa0b4204b09e53e978c5a929421bad99e327d55e224d1 extends Twig_Template
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
        $__internal_569ef6d37fa08ddd540e62255dc7d7566eddb0e71c0e4918f8d7f58a9e20f874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_569ef6d37fa08ddd540e62255dc7d7566eddb0e71c0e4918f8d7f58a9e20f874->enter($__internal_569ef6d37fa08ddd540e62255dc7d7566eddb0e71c0e4918f8d7f58a9e20f874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_41c54355fc4d338aa94bbdcc15950031d8f1697dff9f7a66e1c4402dda4a101b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c54355fc4d338aa94bbdcc15950031d8f1697dff9f7a66e1c4402dda4a101b->enter($__internal_41c54355fc4d338aa94bbdcc15950031d8f1697dff9f7a66e1c4402dda4a101b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_569ef6d37fa08ddd540e62255dc7d7566eddb0e71c0e4918f8d7f58a9e20f874->leave($__internal_569ef6d37fa08ddd540e62255dc7d7566eddb0e71c0e4918f8d7f58a9e20f874_prof);

        
        $__internal_41c54355fc4d338aa94bbdcc15950031d8f1697dff9f7a66e1c4402dda4a101b->leave($__internal_41c54355fc4d338aa94bbdcc15950031d8f1697dff9f7a66e1c4402dda4a101b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
