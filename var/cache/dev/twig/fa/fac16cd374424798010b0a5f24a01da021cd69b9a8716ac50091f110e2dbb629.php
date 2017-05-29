<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_1fbc5e5d021862dc9d3d41270fbc789352e58c2eedbce42a8030d5e6dce96bca extends Twig_Template
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
        $__internal_7622f1f9b2c4c8f616d16c33a3fda970046faaaf76b5ee929bcd07a1e48085f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7622f1f9b2c4c8f616d16c33a3fda970046faaaf76b5ee929bcd07a1e48085f6->enter($__internal_7622f1f9b2c4c8f616d16c33a3fda970046faaaf76b5ee929bcd07a1e48085f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_e16176b722d847f051b9856d3b96a9e0988707c787884b14e782c12219e67b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e16176b722d847f051b9856d3b96a9e0988707c787884b14e782c12219e67b93->enter($__internal_e16176b722d847f051b9856d3b96a9e0988707c787884b14e782c12219e67b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7622f1f9b2c4c8f616d16c33a3fda970046faaaf76b5ee929bcd07a1e48085f6->leave($__internal_7622f1f9b2c4c8f616d16c33a3fda970046faaaf76b5ee929bcd07a1e48085f6_prof);

        
        $__internal_e16176b722d847f051b9856d3b96a9e0988707c787884b14e782c12219e67b93->leave($__internal_e16176b722d847f051b9856d3b96a9e0988707c787884b14e782c12219e67b93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
