<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b7b7f28eb197315dda2c71a4e3352233258b35d9d09f523e91ea93917e06da2a extends Twig_Template
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
        $__internal_8a3eb0031e710960f41c842e7ac0f44b408c229aad89c15dae4d052940412394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a3eb0031e710960f41c842e7ac0f44b408c229aad89c15dae4d052940412394->enter($__internal_8a3eb0031e710960f41c842e7ac0f44b408c229aad89c15dae4d052940412394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_5895cdaa2e09eaa80a428636545af2779709e860791417f87ce833748a95d1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5895cdaa2e09eaa80a428636545af2779709e860791417f87ce833748a95d1b0->enter($__internal_5895cdaa2e09eaa80a428636545af2779709e860791417f87ce833748a95d1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_8a3eb0031e710960f41c842e7ac0f44b408c229aad89c15dae4d052940412394->leave($__internal_8a3eb0031e710960f41c842e7ac0f44b408c229aad89c15dae4d052940412394_prof);

        
        $__internal_5895cdaa2e09eaa80a428636545af2779709e860791417f87ce833748a95d1b0->leave($__internal_5895cdaa2e09eaa80a428636545af2779709e860791417f87ce833748a95d1b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
