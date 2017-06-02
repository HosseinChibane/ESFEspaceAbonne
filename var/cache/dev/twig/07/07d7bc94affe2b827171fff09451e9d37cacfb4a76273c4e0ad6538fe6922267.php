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
        $__internal_ddc93829d4b6330cbb95b3dcac766d17db3917603f994bc6f1486d5ed1d35d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc93829d4b6330cbb95b3dcac766d17db3917603f994bc6f1486d5ed1d35d4b->enter($__internal_ddc93829d4b6330cbb95b3dcac766d17db3917603f994bc6f1486d5ed1d35d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c680eb2373e4204314f49d0288ccd40f57053ad13675d7666da5c8b5ae61dbf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c680eb2373e4204314f49d0288ccd40f57053ad13675d7666da5c8b5ae61dbf1->enter($__internal_c680eb2373e4204314f49d0288ccd40f57053ad13675d7666da5c8b5ae61dbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ddc93829d4b6330cbb95b3dcac766d17db3917603f994bc6f1486d5ed1d35d4b->leave($__internal_ddc93829d4b6330cbb95b3dcac766d17db3917603f994bc6f1486d5ed1d35d4b_prof);

        
        $__internal_c680eb2373e4204314f49d0288ccd40f57053ad13675d7666da5c8b5ae61dbf1->leave($__internal_c680eb2373e4204314f49d0288ccd40f57053ad13675d7666da5c8b5ae61dbf1_prof);

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
