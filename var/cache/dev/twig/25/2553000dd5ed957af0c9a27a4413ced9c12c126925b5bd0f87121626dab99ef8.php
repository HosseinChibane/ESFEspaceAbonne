<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1a974130bb256025ebebf3b01571b6dfce70f6c570330f2fc4191d528595a91e extends Twig_Template
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
        $__internal_2fb6ed815bef7c08b9824a12932a1da264edb086b276de2855815dfe4f48fedc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fb6ed815bef7c08b9824a12932a1da264edb086b276de2855815dfe4f48fedc->enter($__internal_2fb6ed815bef7c08b9824a12932a1da264edb086b276de2855815dfe4f48fedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_9c3f9eb2c0e100edb72ae026fa0d1fbe48abd218a7b2e88a59c08a87a1b53e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c3f9eb2c0e100edb72ae026fa0d1fbe48abd218a7b2e88a59c08a87a1b53e34->enter($__internal_9c3f9eb2c0e100edb72ae026fa0d1fbe48abd218a7b2e88a59c08a87a1b53e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_2fb6ed815bef7c08b9824a12932a1da264edb086b276de2855815dfe4f48fedc->leave($__internal_2fb6ed815bef7c08b9824a12932a1da264edb086b276de2855815dfe4f48fedc_prof);

        
        $__internal_9c3f9eb2c0e100edb72ae026fa0d1fbe48abd218a7b2e88a59c08a87a1b53e34->leave($__internal_9c3f9eb2c0e100edb72ae026fa0d1fbe48abd218a7b2e88a59c08a87a1b53e34_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
