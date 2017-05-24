<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_26f4eb1cb335f792d5c7f17120363cc7a4abc9121cc067efc497a7f740f167c9 extends Twig_Template
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
        $__internal_64f79a22434b71cd2d6e817456b44339da04b1b97c3150b2ab4fad3a8ca146b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64f79a22434b71cd2d6e817456b44339da04b1b97c3150b2ab4fad3a8ca146b0->enter($__internal_64f79a22434b71cd2d6e817456b44339da04b1b97c3150b2ab4fad3a8ca146b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_9c3c758fbe6f28bea9897a4f0f5b9ca84ee8683948210374ecc0028a341616dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c3c758fbe6f28bea9897a4f0f5b9ca84ee8683948210374ecc0028a341616dc->enter($__internal_9c3c758fbe6f28bea9897a4f0f5b9ca84ee8683948210374ecc0028a341616dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_64f79a22434b71cd2d6e817456b44339da04b1b97c3150b2ab4fad3a8ca146b0->leave($__internal_64f79a22434b71cd2d6e817456b44339da04b1b97c3150b2ab4fad3a8ca146b0_prof);

        
        $__internal_9c3c758fbe6f28bea9897a4f0f5b9ca84ee8683948210374ecc0028a341616dc->leave($__internal_9c3c758fbe6f28bea9897a4f0f5b9ca84ee8683948210374ecc0028a341616dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
