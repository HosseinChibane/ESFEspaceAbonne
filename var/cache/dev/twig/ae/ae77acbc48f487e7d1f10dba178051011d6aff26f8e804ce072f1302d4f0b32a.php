<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_a4fea3e4c55b8c0558d10ee73612e29bdb1e9a9be33f0d6e8b510f0b02b9befc extends Twig_Template
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
        $__internal_0dbdeaacc75027f9ca9c29f8c8b32f8bdb63d070b1d67924828cf195e17c1065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dbdeaacc75027f9ca9c29f8c8b32f8bdb63d070b1d67924828cf195e17c1065->enter($__internal_0dbdeaacc75027f9ca9c29f8c8b32f8bdb63d070b1d67924828cf195e17c1065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a9e89aa8714742d94e91830f3e2cd8c7f647986d177e7f1989d58e61effdf607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e89aa8714742d94e91830f3e2cd8c7f647986d177e7f1989d58e61effdf607->enter($__internal_a9e89aa8714742d94e91830f3e2cd8c7f647986d177e7f1989d58e61effdf607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_0dbdeaacc75027f9ca9c29f8c8b32f8bdb63d070b1d67924828cf195e17c1065->leave($__internal_0dbdeaacc75027f9ca9c29f8c8b32f8bdb63d070b1d67924828cf195e17c1065_prof);

        
        $__internal_a9e89aa8714742d94e91830f3e2cd8c7f647986d177e7f1989d58e61effdf607->leave($__internal_a9e89aa8714742d94e91830f3e2cd8c7f647986d177e7f1989d58e61effdf607_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
