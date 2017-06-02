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
        $__internal_367caca7a961c6c20c8ae14540bdf49d53be958b18c4a82386a8089c1931097b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_367caca7a961c6c20c8ae14540bdf49d53be958b18c4a82386a8089c1931097b->enter($__internal_367caca7a961c6c20c8ae14540bdf49d53be958b18c4a82386a8089c1931097b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_393c8f4878835e15cf2ef7a33710efb4afe90d17efe648fe59f3b2d9afdfff24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_393c8f4878835e15cf2ef7a33710efb4afe90d17efe648fe59f3b2d9afdfff24->enter($__internal_393c8f4878835e15cf2ef7a33710efb4afe90d17efe648fe59f3b2d9afdfff24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_367caca7a961c6c20c8ae14540bdf49d53be958b18c4a82386a8089c1931097b->leave($__internal_367caca7a961c6c20c8ae14540bdf49d53be958b18c4a82386a8089c1931097b_prof);

        
        $__internal_393c8f4878835e15cf2ef7a33710efb4afe90d17efe648fe59f3b2d9afdfff24->leave($__internal_393c8f4878835e15cf2ef7a33710efb4afe90d17efe648fe59f3b2d9afdfff24_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d3a3a28b4a7333cdac633bcbe2c9386904c453ebec947c1123553600487a3515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a3a28b4a7333cdac633bcbe2c9386904c453ebec947c1123553600487a3515->enter($__internal_d3a3a28b4a7333cdac633bcbe2c9386904c453ebec947c1123553600487a3515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2b18d0a619eafce1f206857101c12211f4d43d3aab3b8103766a0a7c2bc0ddc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b18d0a619eafce1f206857101c12211f4d43d3aab3b8103766a0a7c2bc0ddc9->enter($__internal_2b18d0a619eafce1f206857101c12211f4d43d3aab3b8103766a0a7c2bc0ddc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2b18d0a619eafce1f206857101c12211f4d43d3aab3b8103766a0a7c2bc0ddc9->leave($__internal_2b18d0a619eafce1f206857101c12211f4d43d3aab3b8103766a0a7c2bc0ddc9_prof);

        
        $__internal_d3a3a28b4a7333cdac633bcbe2c9386904c453ebec947c1123553600487a3515->leave($__internal_d3a3a28b4a7333cdac633bcbe2c9386904c453ebec947c1123553600487a3515_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_49644f4961651902a986c11df06e3fd0e3906d9f85616a426874bc07807fd6bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49644f4961651902a986c11df06e3fd0e3906d9f85616a426874bc07807fd6bc->enter($__internal_49644f4961651902a986c11df06e3fd0e3906d9f85616a426874bc07807fd6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a92e9c7c17e72f3219faefa79c0268c0c90a7a3c4086c19bb71512fae1a2e6a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a92e9c7c17e72f3219faefa79c0268c0c90a7a3c4086c19bb71512fae1a2e6a1->enter($__internal_a92e9c7c17e72f3219faefa79c0268c0c90a7a3c4086c19bb71512fae1a2e6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a92e9c7c17e72f3219faefa79c0268c0c90a7a3c4086c19bb71512fae1a2e6a1->leave($__internal_a92e9c7c17e72f3219faefa79c0268c0c90a7a3c4086c19bb71512fae1a2e6a1_prof);

        
        $__internal_49644f4961651902a986c11df06e3fd0e3906d9f85616a426874bc07807fd6bc->leave($__internal_49644f4961651902a986c11df06e3fd0e3906d9f85616a426874bc07807fd6bc_prof);

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
