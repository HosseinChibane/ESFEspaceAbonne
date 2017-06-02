<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_31a9cad127ddcd79d1113d5cd0e6f89daa3f082421c68c1a986d1f9287c99c53 extends Twig_Template
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
        $__internal_587df423ed96ffd9257d1f86c84a471f6a27ddbc2cccc2c0a100ccaace346e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_587df423ed96ffd9257d1f86c84a471f6a27ddbc2cccc2c0a100ccaace346e0e->enter($__internal_587df423ed96ffd9257d1f86c84a471f6a27ddbc2cccc2c0a100ccaace346e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_a18fdb3a82cdad7b71d84ac4845c8e617d476313035c265457b0b3bce1f7d47d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18fdb3a82cdad7b71d84ac4845c8e617d476313035c265457b0b3bce1f7d47d->enter($__internal_a18fdb3a82cdad7b71d84ac4845c8e617d476313035c265457b0b3bce1f7d47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_587df423ed96ffd9257d1f86c84a471f6a27ddbc2cccc2c0a100ccaace346e0e->leave($__internal_587df423ed96ffd9257d1f86c84a471f6a27ddbc2cccc2c0a100ccaace346e0e_prof);

        
        $__internal_a18fdb3a82cdad7b71d84ac4845c8e617d476313035c265457b0b3bce1f7d47d->leave($__internal_a18fdb3a82cdad7b71d84ac4845c8e617d476313035c265457b0b3bce1f7d47d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
