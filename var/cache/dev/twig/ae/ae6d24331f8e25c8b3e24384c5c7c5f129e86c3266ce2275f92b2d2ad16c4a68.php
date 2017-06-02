<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_957122e9d63545888627eab81d514424f2ce009427ed968769e7c0361b8a1412 extends Twig_Template
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
        $__internal_783a06dcd719ba9375d8c2c01766c6c9bae8493691d48a52f774df4aade9e92b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_783a06dcd719ba9375d8c2c01766c6c9bae8493691d48a52f774df4aade9e92b->enter($__internal_783a06dcd719ba9375d8c2c01766c6c9bae8493691d48a52f774df4aade9e92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_7fc5078754ff6456e52a8d4d2750599eda19b1315ac1d597eeee1145ff9ddb14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc5078754ff6456e52a8d4d2750599eda19b1315ac1d597eeee1145ff9ddb14->enter($__internal_7fc5078754ff6456e52a8d4d2750599eda19b1315ac1d597eeee1145ff9ddb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_783a06dcd719ba9375d8c2c01766c6c9bae8493691d48a52f774df4aade9e92b->leave($__internal_783a06dcd719ba9375d8c2c01766c6c9bae8493691d48a52f774df4aade9e92b_prof);

        
        $__internal_7fc5078754ff6456e52a8d4d2750599eda19b1315ac1d597eeee1145ff9ddb14->leave($__internal_7fc5078754ff6456e52a8d4d2750599eda19b1315ac1d597eeee1145ff9ddb14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
