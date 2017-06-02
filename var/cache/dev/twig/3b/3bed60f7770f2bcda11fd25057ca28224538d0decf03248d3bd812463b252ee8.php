<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_0a40c7c5e904a0359b32959b1d13aa2cae7d1605ef51d84f69d920e78ff16a6f extends Twig_Template
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
        $__internal_0823e6ec5cdf605f6b2702bfafdf91ed6bf84c676c50ffbab9bbfd26c2b97066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0823e6ec5cdf605f6b2702bfafdf91ed6bf84c676c50ffbab9bbfd26c2b97066->enter($__internal_0823e6ec5cdf605f6b2702bfafdf91ed6bf84c676c50ffbab9bbfd26c2b97066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_4dbc6b49872993ef2679dfb1a5a7fac1cfde513ca095e8c1a8a5694a32711bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dbc6b49872993ef2679dfb1a5a7fac1cfde513ca095e8c1a8a5694a32711bc3->enter($__internal_4dbc6b49872993ef2679dfb1a5a7fac1cfde513ca095e8c1a8a5694a32711bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_0823e6ec5cdf605f6b2702bfafdf91ed6bf84c676c50ffbab9bbfd26c2b97066->leave($__internal_0823e6ec5cdf605f6b2702bfafdf91ed6bf84c676c50ffbab9bbfd26c2b97066_prof);

        
        $__internal_4dbc6b49872993ef2679dfb1a5a7fac1cfde513ca095e8c1a8a5694a32711bc3->leave($__internal_4dbc6b49872993ef2679dfb1a5a7fac1cfde513ca095e8c1a8a5694a32711bc3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
