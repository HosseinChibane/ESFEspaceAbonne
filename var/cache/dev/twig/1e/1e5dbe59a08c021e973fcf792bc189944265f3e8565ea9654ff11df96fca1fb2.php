<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_9fe0a63a5f2da3f200cf749c4366d53a6cc3f976d49a7897516eecd65a2a7d26 extends Twig_Template
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
        $__internal_1bdcc69394343f83b93829bc9aa8778e022a0d368f038cbe17337725f1130ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bdcc69394343f83b93829bc9aa8778e022a0d368f038cbe17337725f1130ca6->enter($__internal_1bdcc69394343f83b93829bc9aa8778e022a0d368f038cbe17337725f1130ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_da55837ab16b573a0f31d79f232a7751064f994614d381877930a71184faf20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da55837ab16b573a0f31d79f232a7751064f994614d381877930a71184faf20f->enter($__internal_da55837ab16b573a0f31d79f232a7751064f994614d381877930a71184faf20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_1bdcc69394343f83b93829bc9aa8778e022a0d368f038cbe17337725f1130ca6->leave($__internal_1bdcc69394343f83b93829bc9aa8778e022a0d368f038cbe17337725f1130ca6_prof);

        
        $__internal_da55837ab16b573a0f31d79f232a7751064f994614d381877930a71184faf20f->leave($__internal_da55837ab16b573a0f31d79f232a7751064f994614d381877930a71184faf20f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
