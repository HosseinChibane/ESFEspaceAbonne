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
        $__internal_d9e457a8005c25709ab8e693f53e7c563ac3ac56442f2f67ab93c756ea1d2558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e457a8005c25709ab8e693f53e7c563ac3ac56442f2f67ab93c756ea1d2558->enter($__internal_d9e457a8005c25709ab8e693f53e7c563ac3ac56442f2f67ab93c756ea1d2558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_a0d6df291e2a0867983ccf73feeabd51f66aa7e7c2d9bcdd2758c7871b263609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d6df291e2a0867983ccf73feeabd51f66aa7e7c2d9bcdd2758c7871b263609->enter($__internal_a0d6df291e2a0867983ccf73feeabd51f66aa7e7c2d9bcdd2758c7871b263609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d9e457a8005c25709ab8e693f53e7c563ac3ac56442f2f67ab93c756ea1d2558->leave($__internal_d9e457a8005c25709ab8e693f53e7c563ac3ac56442f2f67ab93c756ea1d2558_prof);

        
        $__internal_a0d6df291e2a0867983ccf73feeabd51f66aa7e7c2d9bcdd2758c7871b263609->leave($__internal_a0d6df291e2a0867983ccf73feeabd51f66aa7e7c2d9bcdd2758c7871b263609_prof);

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
