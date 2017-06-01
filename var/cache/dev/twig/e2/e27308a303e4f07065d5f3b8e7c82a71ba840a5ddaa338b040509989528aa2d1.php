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
        $__internal_fa9c31710e76ab057a432eac2b8a8b6efc2ff4c5b752857f0cb8ed9f508f6b89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9c31710e76ab057a432eac2b8a8b6efc2ff4c5b752857f0cb8ed9f508f6b89->enter($__internal_fa9c31710e76ab057a432eac2b8a8b6efc2ff4c5b752857f0cb8ed9f508f6b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_65cb50d19665e832ca3b03554ae09aaf6b93c903b395bfb213d29a024a5a1aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65cb50d19665e832ca3b03554ae09aaf6b93c903b395bfb213d29a024a5a1aea->enter($__internal_65cb50d19665e832ca3b03554ae09aaf6b93c903b395bfb213d29a024a5a1aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_fa9c31710e76ab057a432eac2b8a8b6efc2ff4c5b752857f0cb8ed9f508f6b89->leave($__internal_fa9c31710e76ab057a432eac2b8a8b6efc2ff4c5b752857f0cb8ed9f508f6b89_prof);

        
        $__internal_65cb50d19665e832ca3b03554ae09aaf6b93c903b395bfb213d29a024a5a1aea->leave($__internal_65cb50d19665e832ca3b03554ae09aaf6b93c903b395bfb213d29a024a5a1aea_prof);

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
