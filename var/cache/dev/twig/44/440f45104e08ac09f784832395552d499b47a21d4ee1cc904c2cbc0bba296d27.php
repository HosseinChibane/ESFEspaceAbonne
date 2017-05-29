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
        $__internal_0a994d1c5ec86e060f1c9d3851965e7f00afb9ba504e4cf908c9934b8aea1b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a994d1c5ec86e060f1c9d3851965e7f00afb9ba504e4cf908c9934b8aea1b02->enter($__internal_0a994d1c5ec86e060f1c9d3851965e7f00afb9ba504e4cf908c9934b8aea1b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_34a07bbbc77746df8013144fa2a851706f521e8166d49356163a71182ecd6600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a07bbbc77746df8013144fa2a851706f521e8166d49356163a71182ecd6600->enter($__internal_34a07bbbc77746df8013144fa2a851706f521e8166d49356163a71182ecd6600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_0a994d1c5ec86e060f1c9d3851965e7f00afb9ba504e4cf908c9934b8aea1b02->leave($__internal_0a994d1c5ec86e060f1c9d3851965e7f00afb9ba504e4cf908c9934b8aea1b02_prof);

        
        $__internal_34a07bbbc77746df8013144fa2a851706f521e8166d49356163a71182ecd6600->leave($__internal_34a07bbbc77746df8013144fa2a851706f521e8166d49356163a71182ecd6600_prof);

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
