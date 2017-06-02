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
        $__internal_42e294e08843167990ecba4dd7da04c32064538d896e3e518eca2b72d34bc2ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e294e08843167990ecba4dd7da04c32064538d896e3e518eca2b72d34bc2ca->enter($__internal_42e294e08843167990ecba4dd7da04c32064538d896e3e518eca2b72d34bc2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_ff7068859511f4a439c4a300d3cad8e886c812332ddadda1d65abae12835eea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7068859511f4a439c4a300d3cad8e886c812332ddadda1d65abae12835eea2->enter($__internal_ff7068859511f4a439c4a300d3cad8e886c812332ddadda1d65abae12835eea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_42e294e08843167990ecba4dd7da04c32064538d896e3e518eca2b72d34bc2ca->leave($__internal_42e294e08843167990ecba4dd7da04c32064538d896e3e518eca2b72d34bc2ca_prof);

        
        $__internal_ff7068859511f4a439c4a300d3cad8e886c812332ddadda1d65abae12835eea2->leave($__internal_ff7068859511f4a439c4a300d3cad8e886c812332ddadda1d65abae12835eea2_prof);

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
