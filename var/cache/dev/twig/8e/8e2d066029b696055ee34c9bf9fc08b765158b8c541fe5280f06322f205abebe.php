<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_e7afdeb0b5b6de0bdcc2d0bb0325811549c5adf1012508a20ed3229ec4816c42 extends Twig_Template
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
        $__internal_1d98e9c4436f2234673f99a06cc2b9f86b0b4844a1c3f1791a44dc872f229135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d98e9c4436f2234673f99a06cc2b9f86b0b4844a1c3f1791a44dc872f229135->enter($__internal_1d98e9c4436f2234673f99a06cc2b9f86b0b4844a1c3f1791a44dc872f229135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_5f2b82c0adc15f5017479e3e7b4e41593ef523a22b18a9ed6cde3c77943fbd9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2b82c0adc15f5017479e3e7b4e41593ef523a22b18a9ed6cde3c77943fbd9e->enter($__internal_5f2b82c0adc15f5017479e3e7b4e41593ef523a22b18a9ed6cde3c77943fbd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_1d98e9c4436f2234673f99a06cc2b9f86b0b4844a1c3f1791a44dc872f229135->leave($__internal_1d98e9c4436f2234673f99a06cc2b9f86b0b4844a1c3f1791a44dc872f229135_prof);

        
        $__internal_5f2b82c0adc15f5017479e3e7b4e41593ef523a22b18a9ed6cde3c77943fbd9e->leave($__internal_5f2b82c0adc15f5017479e3e7b4e41593ef523a22b18a9ed6cde3c77943fbd9e_prof);

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