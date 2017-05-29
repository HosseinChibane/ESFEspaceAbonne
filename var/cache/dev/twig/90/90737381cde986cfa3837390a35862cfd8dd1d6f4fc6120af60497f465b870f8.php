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
        $__internal_04e3f1b28cd7758c7711da6e1c81bb97618dccd25c27571cf0545725704f3eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04e3f1b28cd7758c7711da6e1c81bb97618dccd25c27571cf0545725704f3eec->enter($__internal_04e3f1b28cd7758c7711da6e1c81bb97618dccd25c27571cf0545725704f3eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_9d6e1109489d2edea79cd234088462cd9beae296075c27aa35e7487e7f0a01e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6e1109489d2edea79cd234088462cd9beae296075c27aa35e7487e7f0a01e5->enter($__internal_9d6e1109489d2edea79cd234088462cd9beae296075c27aa35e7487e7f0a01e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_04e3f1b28cd7758c7711da6e1c81bb97618dccd25c27571cf0545725704f3eec->leave($__internal_04e3f1b28cd7758c7711da6e1c81bb97618dccd25c27571cf0545725704f3eec_prof);

        
        $__internal_9d6e1109489d2edea79cd234088462cd9beae296075c27aa35e7487e7f0a01e5->leave($__internal_9d6e1109489d2edea79cd234088462cd9beae296075c27aa35e7487e7f0a01e5_prof);

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
