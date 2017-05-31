<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_566a3a984e769d5508da6a0fcfad072462d2a8a3288346f99b100dc3ece2f8cb extends Twig_Template
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
        $__internal_f89138d75a1ddcda7fa716dda3e8454207abd72928507edfabbae57752612dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f89138d75a1ddcda7fa716dda3e8454207abd72928507edfabbae57752612dfd->enter($__internal_f89138d75a1ddcda7fa716dda3e8454207abd72928507edfabbae57752612dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_8454b4b502d8de3dfd593ef689723983b7afb89b112f9db63839f3a77f268246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8454b4b502d8de3dfd593ef689723983b7afb89b112f9db63839f3a77f268246->enter($__internal_8454b4b502d8de3dfd593ef689723983b7afb89b112f9db63839f3a77f268246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f89138d75a1ddcda7fa716dda3e8454207abd72928507edfabbae57752612dfd->leave($__internal_f89138d75a1ddcda7fa716dda3e8454207abd72928507edfabbae57752612dfd_prof);

        
        $__internal_8454b4b502d8de3dfd593ef689723983b7afb89b112f9db63839f3a77f268246->leave($__internal_8454b4b502d8de3dfd593ef689723983b7afb89b112f9db63839f3a77f268246_prof);

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
