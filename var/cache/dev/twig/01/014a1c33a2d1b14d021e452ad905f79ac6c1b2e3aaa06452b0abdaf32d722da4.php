<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_fb5c719df74c79e40ad770ef37c9784fae6dff1669060f8b424766541bc68f80 extends Twig_Template
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
        $__internal_a283c26cf23340892c9cc68372a77dd22b1a403e4eb8bee8956ce758b22a52bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a283c26cf23340892c9cc68372a77dd22b1a403e4eb8bee8956ce758b22a52bd->enter($__internal_a283c26cf23340892c9cc68372a77dd22b1a403e4eb8bee8956ce758b22a52bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_f621b9fa15af2d2f09f6f0531f02938c236a9ba1c4b12aa1346722ba5a1f0a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f621b9fa15af2d2f09f6f0531f02938c236a9ba1c4b12aa1346722ba5a1f0a19->enter($__internal_f621b9fa15af2d2f09f6f0531f02938c236a9ba1c4b12aa1346722ba5a1f0a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_a283c26cf23340892c9cc68372a77dd22b1a403e4eb8bee8956ce758b22a52bd->leave($__internal_a283c26cf23340892c9cc68372a77dd22b1a403e4eb8bee8956ce758b22a52bd_prof);

        
        $__internal_f621b9fa15af2d2f09f6f0531f02938c236a9ba1c4b12aa1346722ba5a1f0a19->leave($__internal_f621b9fa15af2d2f09f6f0531f02938c236a9ba1c4b12aa1346722ba5a1f0a19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
