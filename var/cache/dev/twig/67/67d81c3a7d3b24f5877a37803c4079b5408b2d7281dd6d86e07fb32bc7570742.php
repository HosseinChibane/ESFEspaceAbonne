<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_a38ed4bd13cf24d29969f059666f7e4194c2af6c94f3096ca2950a046a54ad2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_cb7bba381fcbde2222685cd8f68b08570154598525e685b7ff2a7f845fe4bdc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb7bba381fcbde2222685cd8f68b08570154598525e685b7ff2a7f845fe4bdc3->enter($__internal_cb7bba381fcbde2222685cd8f68b08570154598525e685b7ff2a7f845fe4bdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_3f2b8824819c26b0fcdc59760cdf097831a39de7e381a9c1ee3bc9e9d8a834b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2b8824819c26b0fcdc59760cdf097831a39de7e381a9c1ee3bc9e9d8a834b1->enter($__internal_3f2b8824819c26b0fcdc59760cdf097831a39de7e381a9c1ee3bc9e9d8a834b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb7bba381fcbde2222685cd8f68b08570154598525e685b7ff2a7f845fe4bdc3->leave($__internal_cb7bba381fcbde2222685cd8f68b08570154598525e685b7ff2a7f845fe4bdc3_prof);

        
        $__internal_3f2b8824819c26b0fcdc59760cdf097831a39de7e381a9c1ee3bc9e9d8a834b1->leave($__internal_3f2b8824819c26b0fcdc59760cdf097831a39de7e381a9c1ee3bc9e9d8a834b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f0a21f01c6f7a4debb6ba0fdf5ed61108ed37ebada7be0166d4f66ca659dd672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0a21f01c6f7a4debb6ba0fdf5ed61108ed37ebada7be0166d4f66ca659dd672->enter($__internal_f0a21f01c6f7a4debb6ba0fdf5ed61108ed37ebada7be0166d4f66ca659dd672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ea70a3353fc1b7e83822d40e35f450735db09c7481c2fd196d2ffb7a41aa4098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea70a3353fc1b7e83822d40e35f450735db09c7481c2fd196d2ffb7a41aa4098->enter($__internal_ea70a3353fc1b7e83822d40e35f450735db09c7481c2fd196d2ffb7a41aa4098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ea70a3353fc1b7e83822d40e35f450735db09c7481c2fd196d2ffb7a41aa4098->leave($__internal_ea70a3353fc1b7e83822d40e35f450735db09c7481c2fd196d2ffb7a41aa4098_prof);

        
        $__internal_f0a21f01c6f7a4debb6ba0fdf5ed61108ed37ebada7be0166d4f66ca659dd672->leave($__internal_f0a21f01c6f7a4debb6ba0fdf5ed61108ed37ebada7be0166d4f66ca659dd672_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d22328c46dbd31a415447aca2c07dfebaf418dd693dd6afb83db3d84734c9a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d22328c46dbd31a415447aca2c07dfebaf418dd693dd6afb83db3d84734c9a7->enter($__internal_1d22328c46dbd31a415447aca2c07dfebaf418dd693dd6afb83db3d84734c9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_47a3c78df0b1fdafd56b4d5bb2f323542f6b99a106ad3d9608cd0bf221a0b489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a3c78df0b1fdafd56b4d5bb2f323542f6b99a106ad3d9608cd0bf221a0b489->enter($__internal_47a3c78df0b1fdafd56b4d5bb2f323542f6b99a106ad3d9608cd0bf221a0b489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_47a3c78df0b1fdafd56b4d5bb2f323542f6b99a106ad3d9608cd0bf221a0b489->leave($__internal_47a3c78df0b1fdafd56b4d5bb2f323542f6b99a106ad3d9608cd0bf221a0b489_prof);

        
        $__internal_1d22328c46dbd31a415447aca2c07dfebaf418dd693dd6afb83db3d84734c9a7->leave($__internal_1d22328c46dbd31a415447aca2c07dfebaf418dd693dd6afb83db3d84734c9a7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
