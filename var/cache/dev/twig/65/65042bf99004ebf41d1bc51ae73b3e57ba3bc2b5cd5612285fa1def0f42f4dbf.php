<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_d0d652fee2a38c3ac13d4181a48654502c213f04c6cb47be032cad625aca8386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5acf8e9577be8d770420c946dae38c0264643f0f31e59791f3db689de346d25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5acf8e9577be8d770420c946dae38c0264643f0f31e59791f3db689de346d25->enter($__internal_d5acf8e9577be8d770420c946dae38c0264643f0f31e59791f3db689de346d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_06bf24763fd8dc2f039ffb415177b81fa11dcbb6d3c4f0fd8d03eeb8176105d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bf24763fd8dc2f039ffb415177b81fa11dcbb6d3c4f0fd8d03eeb8176105d2->enter($__internal_06bf24763fd8dc2f039ffb415177b81fa11dcbb6d3c4f0fd8d03eeb8176105d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5acf8e9577be8d770420c946dae38c0264643f0f31e59791f3db689de346d25->leave($__internal_d5acf8e9577be8d770420c946dae38c0264643f0f31e59791f3db689de346d25_prof);

        
        $__internal_06bf24763fd8dc2f039ffb415177b81fa11dcbb6d3c4f0fd8d03eeb8176105d2->leave($__internal_06bf24763fd8dc2f039ffb415177b81fa11dcbb6d3c4f0fd8d03eeb8176105d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_439f9016e8ad9789e15ec826d4442d78d0baddeea959dd327655001bc34ccbee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_439f9016e8ad9789e15ec826d4442d78d0baddeea959dd327655001bc34ccbee->enter($__internal_439f9016e8ad9789e15ec826d4442d78d0baddeea959dd327655001bc34ccbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e5bb674dab9e82f9e99417e087a6c1e7089c1c32bb0bff0cb36f7ae395d4b693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5bb674dab9e82f9e99417e087a6c1e7089c1c32bb0bff0cb36f7ae395d4b693->enter($__internal_e5bb674dab9e82f9e99417e087a6c1e7089c1c32bb0bff0cb36f7ae395d4b693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e5bb674dab9e82f9e99417e087a6c1e7089c1c32bb0bff0cb36f7ae395d4b693->leave($__internal_e5bb674dab9e82f9e99417e087a6c1e7089c1c32bb0bff0cb36f7ae395d4b693_prof);

        
        $__internal_439f9016e8ad9789e15ec826d4442d78d0baddeea959dd327655001bc34ccbee->leave($__internal_439f9016e8ad9789e15ec826d4442d78d0baddeea959dd327655001bc34ccbee_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f6994da1532c9cfcab2ed988f37978fc7a05164d1a3f19a0afd748c6047d103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f6994da1532c9cfcab2ed988f37978fc7a05164d1a3f19a0afd748c6047d103->enter($__internal_1f6994da1532c9cfcab2ed988f37978fc7a05164d1a3f19a0afd748c6047d103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ebb07abe674d2d2aec5da3334a116d66304160986b75d7ca68e2c732ddf8f4d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb07abe674d2d2aec5da3334a116d66304160986b75d7ca68e2c732ddf8f4d7->enter($__internal_ebb07abe674d2d2aec5da3334a116d66304160986b75d7ca68e2c732ddf8f4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_ebb07abe674d2d2aec5da3334a116d66304160986b75d7ca68e2c732ddf8f4d7->leave($__internal_ebb07abe674d2d2aec5da3334a116d66304160986b75d7ca68e2c732ddf8f4d7_prof);

        
        $__internal_1f6994da1532c9cfcab2ed988f37978fc7a05164d1a3f19a0afd748c6047d103->leave($__internal_1f6994da1532c9cfcab2ed988f37978fc7a05164d1a3f19a0afd748c6047d103_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
