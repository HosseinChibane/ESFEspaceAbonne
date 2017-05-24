<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_28b320218723d821e90adbd23ff5e3886a5e6561e9afac739bb0a0f83a28f91e extends Twig_Template
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
        $__internal_601860bd7f6ed9b816c2e3b281b5c480c21f23dd11012340e063cf849f24b591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_601860bd7f6ed9b816c2e3b281b5c480c21f23dd11012340e063cf849f24b591->enter($__internal_601860bd7f6ed9b816c2e3b281b5c480c21f23dd11012340e063cf849f24b591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ba00a57da0b45b78abff3c8d6bdd9e76ce6af6f1bfcb5c617439252bb217f52c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba00a57da0b45b78abff3c8d6bdd9e76ce6af6f1bfcb5c617439252bb217f52c->enter($__internal_ba00a57da0b45b78abff3c8d6bdd9e76ce6af6f1bfcb5c617439252bb217f52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_601860bd7f6ed9b816c2e3b281b5c480c21f23dd11012340e063cf849f24b591->leave($__internal_601860bd7f6ed9b816c2e3b281b5c480c21f23dd11012340e063cf849f24b591_prof);

        
        $__internal_ba00a57da0b45b78abff3c8d6bdd9e76ce6af6f1bfcb5c617439252bb217f52c->leave($__internal_ba00a57da0b45b78abff3c8d6bdd9e76ce6af6f1bfcb5c617439252bb217f52c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
