<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_02a1eba65c8b8cc3a77b22323f68ca288e7b8efe78c2adf2f8bd0751d7076a24 extends Twig_Template
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
        $__internal_3fbba379b8f2b28bbbf0c009ca92e79e2fc4cc0d0f9b02fc7b55660cb45320ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fbba379b8f2b28bbbf0c009ca92e79e2fc4cc0d0f9b02fc7b55660cb45320ff->enter($__internal_3fbba379b8f2b28bbbf0c009ca92e79e2fc4cc0d0f9b02fc7b55660cb45320ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_a6afd0c3cc0ead6daf512081be002c6f9482401359b3f1c85ce1445e0249715e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6afd0c3cc0ead6daf512081be002c6f9482401359b3f1c85ce1445e0249715e->enter($__internal_a6afd0c3cc0ead6daf512081be002c6f9482401359b3f1c85ce1445e0249715e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3fbba379b8f2b28bbbf0c009ca92e79e2fc4cc0d0f9b02fc7b55660cb45320ff->leave($__internal_3fbba379b8f2b28bbbf0c009ca92e79e2fc4cc0d0f9b02fc7b55660cb45320ff_prof);

        
        $__internal_a6afd0c3cc0ead6daf512081be002c6f9482401359b3f1c85ce1445e0249715e->leave($__internal_a6afd0c3cc0ead6daf512081be002c6f9482401359b3f1c85ce1445e0249715e_prof);

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
