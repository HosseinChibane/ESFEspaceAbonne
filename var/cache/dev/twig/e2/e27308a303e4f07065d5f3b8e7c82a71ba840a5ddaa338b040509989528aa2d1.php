<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_9d21a8e78a8550bf370ecfa92ff5a7de446c20a2453714ae36c673b88e9cbf39 extends Twig_Template
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
        $__internal_199986f1e5aa32fdd35133cdc429a4d5b1f9cb5202ec26b7d531a8d8ea20ffd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_199986f1e5aa32fdd35133cdc429a4d5b1f9cb5202ec26b7d531a8d8ea20ffd7->enter($__internal_199986f1e5aa32fdd35133cdc429a4d5b1f9cb5202ec26b7d531a8d8ea20ffd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_d023985e07a86943e786a98c358470cb9fc50e63a40b76e70e718b91c39f0a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d023985e07a86943e786a98c358470cb9fc50e63a40b76e70e718b91c39f0a12->enter($__internal_d023985e07a86943e786a98c358470cb9fc50e63a40b76e70e718b91c39f0a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_199986f1e5aa32fdd35133cdc429a4d5b1f9cb5202ec26b7d531a8d8ea20ffd7->leave($__internal_199986f1e5aa32fdd35133cdc429a4d5b1f9cb5202ec26b7d531a8d8ea20ffd7_prof);

        
        $__internal_d023985e07a86943e786a98c358470cb9fc50e63a40b76e70e718b91c39f0a12->leave($__internal_d023985e07a86943e786a98c358470cb9fc50e63a40b76e70e718b91c39f0a12_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
