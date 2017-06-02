<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_838057315f24fbd97f4566945ee50153e504f3b10d05b2de259234622b4ef023 extends Twig_Template
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
        $__internal_9a57f84cd4f7ac9f92d0909ba9d30afda24c8bd2632895134b6ae8a12e69e378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a57f84cd4f7ac9f92d0909ba9d30afda24c8bd2632895134b6ae8a12e69e378->enter($__internal_9a57f84cd4f7ac9f92d0909ba9d30afda24c8bd2632895134b6ae8a12e69e378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_c6a507f19750069c291dea547b7a8f37c6cfc9aa02dd6042e29705ceeb0e405c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a507f19750069c291dea547b7a8f37c6cfc9aa02dd6042e29705ceeb0e405c->enter($__internal_c6a507f19750069c291dea547b7a8f37c6cfc9aa02dd6042e29705ceeb0e405c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9a57f84cd4f7ac9f92d0909ba9d30afda24c8bd2632895134b6ae8a12e69e378->leave($__internal_9a57f84cd4f7ac9f92d0909ba9d30afda24c8bd2632895134b6ae8a12e69e378_prof);

        
        $__internal_c6a507f19750069c291dea547b7a8f37c6cfc9aa02dd6042e29705ceeb0e405c->leave($__internal_c6a507f19750069c291dea547b7a8f37c6cfc9aa02dd6042e29705ceeb0e405c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
