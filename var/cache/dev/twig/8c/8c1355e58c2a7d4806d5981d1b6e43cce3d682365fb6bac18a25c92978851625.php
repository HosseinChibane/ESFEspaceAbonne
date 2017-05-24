<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b45563925c9a64e740976b7b813a2fae76154c496a78f03a35871892599d2706 extends Twig_Template
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
        $__internal_3a469bcfbe1ac5eb3fbd9e8828297c293b805be04ef47f11afb6bf29cba739a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a469bcfbe1ac5eb3fbd9e8828297c293b805be04ef47f11afb6bf29cba739a6->enter($__internal_3a469bcfbe1ac5eb3fbd9e8828297c293b805be04ef47f11afb6bf29cba739a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_fcc3719d0cd5053883ea2a3ea838d977b0949c0a5022fea3f5592c6a928093dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc3719d0cd5053883ea2a3ea838d977b0949c0a5022fea3f5592c6a928093dd->enter($__internal_fcc3719d0cd5053883ea2a3ea838d977b0949c0a5022fea3f5592c6a928093dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_3a469bcfbe1ac5eb3fbd9e8828297c293b805be04ef47f11afb6bf29cba739a6->leave($__internal_3a469bcfbe1ac5eb3fbd9e8828297c293b805be04ef47f11afb6bf29cba739a6_prof);

        
        $__internal_fcc3719d0cd5053883ea2a3ea838d977b0949c0a5022fea3f5592c6a928093dd->leave($__internal_fcc3719d0cd5053883ea2a3ea838d977b0949c0a5022fea3f5592c6a928093dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
