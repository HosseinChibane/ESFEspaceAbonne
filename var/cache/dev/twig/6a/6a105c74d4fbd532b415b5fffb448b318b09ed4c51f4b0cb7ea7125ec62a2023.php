<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_396fc7b03e8e62cb4302b128282d1b5776c0ac9223b84c459391ce3b2c140592 extends Twig_Template
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
        $__internal_ddc24311656adb24d707074e1435a23bcaf68c522efa0a48d3441c5f1ff096e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc24311656adb24d707074e1435a23bcaf68c522efa0a48d3441c5f1ff096e0->enter($__internal_ddc24311656adb24d707074e1435a23bcaf68c522efa0a48d3441c5f1ff096e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_1d46792dec798bf7891e78a5fb4f92210108894ab7ea30133694c1ff2cf900f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d46792dec798bf7891e78a5fb4f92210108894ab7ea30133694c1ff2cf900f7->enter($__internal_1d46792dec798bf7891e78a5fb4f92210108894ab7ea30133694c1ff2cf900f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_ddc24311656adb24d707074e1435a23bcaf68c522efa0a48d3441c5f1ff096e0->leave($__internal_ddc24311656adb24d707074e1435a23bcaf68c522efa0a48d3441c5f1ff096e0_prof);

        
        $__internal_1d46792dec798bf7891e78a5fb4f92210108894ab7ea30133694c1ff2cf900f7->leave($__internal_1d46792dec798bf7891e78a5fb4f92210108894ab7ea30133694c1ff2cf900f7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
