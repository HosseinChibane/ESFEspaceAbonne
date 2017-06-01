<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_f8d9129032c94531c8da88864dc5221ecc5c936a78aab4d2081250cde885ac99 extends Twig_Template
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
        $__internal_b0ec833f5681da11f625dd740fc929bcfb3eff4ff4bc92f342684727dd8e2473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0ec833f5681da11f625dd740fc929bcfb3eff4ff4bc92f342684727dd8e2473->enter($__internal_b0ec833f5681da11f625dd740fc929bcfb3eff4ff4bc92f342684727dd8e2473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_74b6317b6f87740ae775a175bb36bfaff1e34bca73ec5c9b87b01743db87265c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b6317b6f87740ae775a175bb36bfaff1e34bca73ec5c9b87b01743db87265c->enter($__internal_74b6317b6f87740ae775a175bb36bfaff1e34bca73ec5c9b87b01743db87265c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_b0ec833f5681da11f625dd740fc929bcfb3eff4ff4bc92f342684727dd8e2473->leave($__internal_b0ec833f5681da11f625dd740fc929bcfb3eff4ff4bc92f342684727dd8e2473_prof);

        
        $__internal_74b6317b6f87740ae775a175bb36bfaff1e34bca73ec5c9b87b01743db87265c->leave($__internal_74b6317b6f87740ae775a175bb36bfaff1e34bca73ec5c9b87b01743db87265c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
