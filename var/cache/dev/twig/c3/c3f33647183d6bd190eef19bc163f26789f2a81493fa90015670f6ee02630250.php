<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_fb5665a87824754491320ddaf62a25a52339aae9760d32b71688fa454bb61359 extends Twig_Template
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
        $__internal_963c6d2406335461850fff96b401bcb8d54d86c8d7adcff5f2c7721aef48d761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963c6d2406335461850fff96b401bcb8d54d86c8d7adcff5f2c7721aef48d761->enter($__internal_963c6d2406335461850fff96b401bcb8d54d86c8d7adcff5f2c7721aef48d761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_0894a2f1e4bc546766c1ea7f60a63165079e6185de38fca17308d7ca189ad446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0894a2f1e4bc546766c1ea7f60a63165079e6185de38fca17308d7ca189ad446->enter($__internal_0894a2f1e4bc546766c1ea7f60a63165079e6185de38fca17308d7ca189ad446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_963c6d2406335461850fff96b401bcb8d54d86c8d7adcff5f2c7721aef48d761->leave($__internal_963c6d2406335461850fff96b401bcb8d54d86c8d7adcff5f2c7721aef48d761_prof);

        
        $__internal_0894a2f1e4bc546766c1ea7f60a63165079e6185de38fca17308d7ca189ad446->leave($__internal_0894a2f1e4bc546766c1ea7f60a63165079e6185de38fca17308d7ca189ad446_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
