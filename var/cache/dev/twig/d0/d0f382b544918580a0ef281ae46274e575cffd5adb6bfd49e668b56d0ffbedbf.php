<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a831c0061d5952deb29fa0b4204b09e53e978c5a929421bad99e327d55e224d1 extends Twig_Template
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
        $__internal_a5fdce4a54f4ea5fb085a057f55240fe2d9102e27b77aac783c4a395e079b4d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5fdce4a54f4ea5fb085a057f55240fe2d9102e27b77aac783c4a395e079b4d3->enter($__internal_a5fdce4a54f4ea5fb085a057f55240fe2d9102e27b77aac783c4a395e079b4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_f819252a8d69a54e05de8bc9fd69e2039f46a19f5b995e0fbdfced9a18d95567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f819252a8d69a54e05de8bc9fd69e2039f46a19f5b995e0fbdfced9a18d95567->enter($__internal_f819252a8d69a54e05de8bc9fd69e2039f46a19f5b995e0fbdfced9a18d95567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_a5fdce4a54f4ea5fb085a057f55240fe2d9102e27b77aac783c4a395e079b4d3->leave($__internal_a5fdce4a54f4ea5fb085a057f55240fe2d9102e27b77aac783c4a395e079b4d3_prof);

        
        $__internal_f819252a8d69a54e05de8bc9fd69e2039f46a19f5b995e0fbdfced9a18d95567->leave($__internal_f819252a8d69a54e05de8bc9fd69e2039f46a19f5b995e0fbdfced9a18d95567_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
