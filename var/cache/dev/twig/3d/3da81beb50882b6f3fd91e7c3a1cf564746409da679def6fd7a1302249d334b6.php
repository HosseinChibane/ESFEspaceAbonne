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
        $__internal_2719919e805fc6baf60139bf70a6a442200b211516bbd10b598f60497d680027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2719919e805fc6baf60139bf70a6a442200b211516bbd10b598f60497d680027->enter($__internal_2719919e805fc6baf60139bf70a6a442200b211516bbd10b598f60497d680027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_221413024121ae5be1e8950e5812ecbd401a77a1d9151384936e7d50d11b92aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_221413024121ae5be1e8950e5812ecbd401a77a1d9151384936e7d50d11b92aa->enter($__internal_221413024121ae5be1e8950e5812ecbd401a77a1d9151384936e7d50d11b92aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2719919e805fc6baf60139bf70a6a442200b211516bbd10b598f60497d680027->leave($__internal_2719919e805fc6baf60139bf70a6a442200b211516bbd10b598f60497d680027_prof);

        
        $__internal_221413024121ae5be1e8950e5812ecbd401a77a1d9151384936e7d50d11b92aa->leave($__internal_221413024121ae5be1e8950e5812ecbd401a77a1d9151384936e7d50d11b92aa_prof);

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
