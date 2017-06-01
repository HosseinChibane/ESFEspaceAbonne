<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_bceb2bb600305e049496c5959ca0fa317ce7b7692f2a53d085c5e47193d5f8cf extends Twig_Template
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
        $__internal_88f6942560a3d22511b955e3b9a123a438a8670954895a0626ac2ac8667f516d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88f6942560a3d22511b955e3b9a123a438a8670954895a0626ac2ac8667f516d->enter($__internal_88f6942560a3d22511b955e3b9a123a438a8670954895a0626ac2ac8667f516d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_444556ede44e972ce2451025a4d85f919c04c75e7694d572f3cc54d9aa83b7ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444556ede44e972ce2451025a4d85f919c04c75e7694d572f3cc54d9aa83b7ae->enter($__internal_444556ede44e972ce2451025a4d85f919c04c75e7694d572f3cc54d9aa83b7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_88f6942560a3d22511b955e3b9a123a438a8670954895a0626ac2ac8667f516d->leave($__internal_88f6942560a3d22511b955e3b9a123a438a8670954895a0626ac2ac8667f516d_prof);

        
        $__internal_444556ede44e972ce2451025a4d85f919c04c75e7694d572f3cc54d9aa83b7ae->leave($__internal_444556ede44e972ce2451025a4d85f919c04c75e7694d572f3cc54d9aa83b7ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
