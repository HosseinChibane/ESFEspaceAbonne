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
        $__internal_4cbb98719710028d6e307f89825f3a174885d87be8f76afb9b0cf8b1f1b3aa68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cbb98719710028d6e307f89825f3a174885d87be8f76afb9b0cf8b1f1b3aa68->enter($__internal_4cbb98719710028d6e307f89825f3a174885d87be8f76afb9b0cf8b1f1b3aa68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_a8d93268d153c89f7143242b8aa19ec436ab480093d54a5d9c4a67b5c7bdd81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d93268d153c89f7143242b8aa19ec436ab480093d54a5d9c4a67b5c7bdd81b->enter($__internal_a8d93268d153c89f7143242b8aa19ec436ab480093d54a5d9c4a67b5c7bdd81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_4cbb98719710028d6e307f89825f3a174885d87be8f76afb9b0cf8b1f1b3aa68->leave($__internal_4cbb98719710028d6e307f89825f3a174885d87be8f76afb9b0cf8b1f1b3aa68_prof);

        
        $__internal_a8d93268d153c89f7143242b8aa19ec436ab480093d54a5d9c4a67b5c7bdd81b->leave($__internal_a8d93268d153c89f7143242b8aa19ec436ab480093d54a5d9c4a67b5c7bdd81b_prof);

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
