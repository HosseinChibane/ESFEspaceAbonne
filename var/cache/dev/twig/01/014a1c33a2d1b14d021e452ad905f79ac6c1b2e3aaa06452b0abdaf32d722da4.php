<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_fb5c719df74c79e40ad770ef37c9784fae6dff1669060f8b424766541bc68f80 extends Twig_Template
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
        $__internal_d51cb9a7e619494ba9776813db132a43e5f7ea0a7dd1a6aea3e3fb458f65191b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51cb9a7e619494ba9776813db132a43e5f7ea0a7dd1a6aea3e3fb458f65191b->enter($__internal_d51cb9a7e619494ba9776813db132a43e5f7ea0a7dd1a6aea3e3fb458f65191b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_2d935ce11aa9714d0ea80a5c3d2e79929b6b089a28eba1daa3db98f29b810e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d935ce11aa9714d0ea80a5c3d2e79929b6b089a28eba1daa3db98f29b810e2d->enter($__internal_2d935ce11aa9714d0ea80a5c3d2e79929b6b089a28eba1daa3db98f29b810e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d51cb9a7e619494ba9776813db132a43e5f7ea0a7dd1a6aea3e3fb458f65191b->leave($__internal_d51cb9a7e619494ba9776813db132a43e5f7ea0a7dd1a6aea3e3fb458f65191b_prof);

        
        $__internal_2d935ce11aa9714d0ea80a5c3d2e79929b6b089a28eba1daa3db98f29b810e2d->leave($__internal_2d935ce11aa9714d0ea80a5c3d2e79929b6b089a28eba1daa3db98f29b810e2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
