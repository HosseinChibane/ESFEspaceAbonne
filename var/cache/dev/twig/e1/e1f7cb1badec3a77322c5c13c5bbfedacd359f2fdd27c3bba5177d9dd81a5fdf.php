<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_a85918de05cbbd749cf63a17540aedffdcc4d7e03a2e5faa65d8a57d64d0e829 extends Twig_Template
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
        $__internal_23463feebbae1cc41c144db974941b2a34b2fe17e942d9550efd5b64930b8ee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23463feebbae1cc41c144db974941b2a34b2fe17e942d9550efd5b64930b8ee6->enter($__internal_23463feebbae1cc41c144db974941b2a34b2fe17e942d9550efd5b64930b8ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_3eaa977530d618dc34427647ca5cf756943cb69e0ca155bf313f73da348e75e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eaa977530d618dc34427647ca5cf756943cb69e0ca155bf313f73da348e75e6->enter($__internal_3eaa977530d618dc34427647ca5cf756943cb69e0ca155bf313f73da348e75e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_23463feebbae1cc41c144db974941b2a34b2fe17e942d9550efd5b64930b8ee6->leave($__internal_23463feebbae1cc41c144db974941b2a34b2fe17e942d9550efd5b64930b8ee6_prof);

        
        $__internal_3eaa977530d618dc34427647ca5cf756943cb69e0ca155bf313f73da348e75e6->leave($__internal_3eaa977530d618dc34427647ca5cf756943cb69e0ca155bf313f73da348e75e6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
