<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_325a0164ab02f80d8652bbe2882bbe151121b7924e61f123a406c1ebe04238c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_040cf2af49d1d7cdc625f9d4c9df514a143e4f3eeaca2b7539ca52cc82a66ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040cf2af49d1d7cdc625f9d4c9df514a143e4f3eeaca2b7539ca52cc82a66ef0->enter($__internal_040cf2af49d1d7cdc625f9d4c9df514a143e4f3eeaca2b7539ca52cc82a66ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d70cd1fa2fb079c215266be5096e8e754e6ffb5aa776b5da4de318437b5aa0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70cd1fa2fb079c215266be5096e8e754e6ffb5aa776b5da4de318437b5aa0a9->enter($__internal_d70cd1fa2fb079c215266be5096e8e754e6ffb5aa776b5da4de318437b5aa0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_040cf2af49d1d7cdc625f9d4c9df514a143e4f3eeaca2b7539ca52cc82a66ef0->leave($__internal_040cf2af49d1d7cdc625f9d4c9df514a143e4f3eeaca2b7539ca52cc82a66ef0_prof);

        
        $__internal_d70cd1fa2fb079c215266be5096e8e754e6ffb5aa776b5da4de318437b5aa0a9->leave($__internal_d70cd1fa2fb079c215266be5096e8e754e6ffb5aa776b5da4de318437b5aa0a9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_29329580cea00fc319e6bec6001fab81212320dfb3876e4b9f4908b495d759b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29329580cea00fc319e6bec6001fab81212320dfb3876e4b9f4908b495d759b1->enter($__internal_29329580cea00fc319e6bec6001fab81212320dfb3876e4b9f4908b495d759b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e3736d3561296c029512c55be3d502773a773ddd8b080964730dbffa67445ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3736d3561296c029512c55be3d502773a773ddd8b080964730dbffa67445ab4->enter($__internal_e3736d3561296c029512c55be3d502773a773ddd8b080964730dbffa67445ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e3736d3561296c029512c55be3d502773a773ddd8b080964730dbffa67445ab4->leave($__internal_e3736d3561296c029512c55be3d502773a773ddd8b080964730dbffa67445ab4_prof);

        
        $__internal_29329580cea00fc319e6bec6001fab81212320dfb3876e4b9f4908b495d759b1->leave($__internal_29329580cea00fc319e6bec6001fab81212320dfb3876e4b9f4908b495d759b1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
