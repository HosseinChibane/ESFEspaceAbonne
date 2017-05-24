<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_38942c6e09ee5ffd4090946a40de6b27cf6dfb714e0a110f50604832f9498a69 extends Twig_Template
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
        $__internal_00a1251992af03f0017bccb5e5d2518b09c4ebb5d98fb7654f0c824ca2750380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00a1251992af03f0017bccb5e5d2518b09c4ebb5d98fb7654f0c824ca2750380->enter($__internal_00a1251992af03f0017bccb5e5d2518b09c4ebb5d98fb7654f0c824ca2750380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_e6f1354ee9c258ef9bafa3b3e9fe236be66c0a6800056508c00132a4c348d1b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f1354ee9c258ef9bafa3b3e9fe236be66c0a6800056508c00132a4c348d1b5->enter($__internal_e6f1354ee9c258ef9bafa3b3e9fe236be66c0a6800056508c00132a4c348d1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_00a1251992af03f0017bccb5e5d2518b09c4ebb5d98fb7654f0c824ca2750380->leave($__internal_00a1251992af03f0017bccb5e5d2518b09c4ebb5d98fb7654f0c824ca2750380_prof);

        
        $__internal_e6f1354ee9c258ef9bafa3b3e9fe236be66c0a6800056508c00132a4c348d1b5->leave($__internal_e6f1354ee9c258ef9bafa3b3e9fe236be66c0a6800056508c00132a4c348d1b5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
