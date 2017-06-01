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
        $__internal_642bef4db5acca8f1e9bca14b83d66329649be12945d26938e16a9a3e82ff163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_642bef4db5acca8f1e9bca14b83d66329649be12945d26938e16a9a3e82ff163->enter($__internal_642bef4db5acca8f1e9bca14b83d66329649be12945d26938e16a9a3e82ff163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8f156948510875c15c8e40ac949d0654cafe2e749f84d5f699f09368a80db601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f156948510875c15c8e40ac949d0654cafe2e749f84d5f699f09368a80db601->enter($__internal_8f156948510875c15c8e40ac949d0654cafe2e749f84d5f699f09368a80db601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_642bef4db5acca8f1e9bca14b83d66329649be12945d26938e16a9a3e82ff163->leave($__internal_642bef4db5acca8f1e9bca14b83d66329649be12945d26938e16a9a3e82ff163_prof);

        
        $__internal_8f156948510875c15c8e40ac949d0654cafe2e749f84d5f699f09368a80db601->leave($__internal_8f156948510875c15c8e40ac949d0654cafe2e749f84d5f699f09368a80db601_prof);

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
