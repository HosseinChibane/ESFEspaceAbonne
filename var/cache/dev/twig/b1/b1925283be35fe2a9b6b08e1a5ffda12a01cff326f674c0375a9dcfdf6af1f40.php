<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_970dbb895424323a023d8667c652dda617311916a928b6e5f9b6159eaa646153 extends Twig_Template
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
        $__internal_47baa5d7d83e467783e0ef36a1b4b0c03a1ee919c48c0eca629679b5fcf76554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47baa5d7d83e467783e0ef36a1b4b0c03a1ee919c48c0eca629679b5fcf76554->enter($__internal_47baa5d7d83e467783e0ef36a1b4b0c03a1ee919c48c0eca629679b5fcf76554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_8ee9304bd7f850a73e696acf2b84d50754207dd35cd50ec53a2b4033902bf545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee9304bd7f850a73e696acf2b84d50754207dd35cd50ec53a2b4033902bf545->enter($__internal_8ee9304bd7f850a73e696acf2b84d50754207dd35cd50ec53a2b4033902bf545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_47baa5d7d83e467783e0ef36a1b4b0c03a1ee919c48c0eca629679b5fcf76554->leave($__internal_47baa5d7d83e467783e0ef36a1b4b0c03a1ee919c48c0eca629679b5fcf76554_prof);

        
        $__internal_8ee9304bd7f850a73e696acf2b84d50754207dd35cd50ec53a2b4033902bf545->leave($__internal_8ee9304bd7f850a73e696acf2b84d50754207dd35cd50ec53a2b4033902bf545_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
