<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_fee94444557892131a8423ad87763913c6b5f9bede5a0c09995597f7f9007dc2 extends Twig_Template
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
        $__internal_9accad0be91d2c2b017d9c2315c7df7aaed7411adce1c43ac16c41e0da659323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9accad0be91d2c2b017d9c2315c7df7aaed7411adce1c43ac16c41e0da659323->enter($__internal_9accad0be91d2c2b017d9c2315c7df7aaed7411adce1c43ac16c41e0da659323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_50427b1d5946e19653e6e789ae816602c8004e51628782a48ebfa7d1a40f1d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50427b1d5946e19653e6e789ae816602c8004e51628782a48ebfa7d1a40f1d3a->enter($__internal_50427b1d5946e19653e6e789ae816602c8004e51628782a48ebfa7d1a40f1d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_9accad0be91d2c2b017d9c2315c7df7aaed7411adce1c43ac16c41e0da659323->leave($__internal_9accad0be91d2c2b017d9c2315c7df7aaed7411adce1c43ac16c41e0da659323_prof);

        
        $__internal_50427b1d5946e19653e6e789ae816602c8004e51628782a48ebfa7d1a40f1d3a->leave($__internal_50427b1d5946e19653e6e789ae816602c8004e51628782a48ebfa7d1a40f1d3a_prof);

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
