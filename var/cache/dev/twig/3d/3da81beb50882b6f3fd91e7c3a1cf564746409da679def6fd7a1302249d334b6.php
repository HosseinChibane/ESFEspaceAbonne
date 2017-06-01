<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_85171fcd0a765346f5f5b2f264951f4e50ad76d934affcac4449a7682883257a extends Twig_Template
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
        $__internal_fd5c9e112089b6534dad9f36c4f821e86d5b300c31623a64db00eb5c28a1ab01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd5c9e112089b6534dad9f36c4f821e86d5b300c31623a64db00eb5c28a1ab01->enter($__internal_fd5c9e112089b6534dad9f36c4f821e86d5b300c31623a64db00eb5c28a1ab01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_a7f7d09f1710fd486428980b49b5fea5075a7e805ff9735a8db579840b1e2ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f7d09f1710fd486428980b49b5fea5075a7e805ff9735a8db579840b1e2ed5->enter($__internal_a7f7d09f1710fd486428980b49b5fea5075a7e805ff9735a8db579840b1e2ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_fd5c9e112089b6534dad9f36c4f821e86d5b300c31623a64db00eb5c28a1ab01->leave($__internal_fd5c9e112089b6534dad9f36c4f821e86d5b300c31623a64db00eb5c28a1ab01_prof);

        
        $__internal_a7f7d09f1710fd486428980b49b5fea5075a7e805ff9735a8db579840b1e2ed5->leave($__internal_a7f7d09f1710fd486428980b49b5fea5075a7e805ff9735a8db579840b1e2ed5_prof);

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
