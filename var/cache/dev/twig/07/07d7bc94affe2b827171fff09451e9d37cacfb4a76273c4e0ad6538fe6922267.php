<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_2f228084e4f9c82f10dbc98bca931351a9ffe36f319529f9e75031973f15e299 extends Twig_Template
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
        $__internal_38a934ef062bfe22844e875ff248c7cc428866e12aa6328c09aa3048c0e9444e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a934ef062bfe22844e875ff248c7cc428866e12aa6328c09aa3048c0e9444e->enter($__internal_38a934ef062bfe22844e875ff248c7cc428866e12aa6328c09aa3048c0e9444e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_38661485afd0d329311a7c0071a8848e20276456f8547434fdc1dded5769a7fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38661485afd0d329311a7c0071a8848e20276456f8547434fdc1dded5769a7fb->enter($__internal_38661485afd0d329311a7c0071a8848e20276456f8547434fdc1dded5769a7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_38a934ef062bfe22844e875ff248c7cc428866e12aa6328c09aa3048c0e9444e->leave($__internal_38a934ef062bfe22844e875ff248c7cc428866e12aa6328c09aa3048c0e9444e_prof);

        
        $__internal_38661485afd0d329311a7c0071a8848e20276456f8547434fdc1dded5769a7fb->leave($__internal_38661485afd0d329311a7c0071a8848e20276456f8547434fdc1dded5769a7fb_prof);

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
