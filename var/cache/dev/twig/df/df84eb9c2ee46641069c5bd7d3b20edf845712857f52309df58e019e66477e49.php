<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_f3a02f95136a7f70b94020a1fb1175aba27b826cda6b0f477aea61670004bcb2 extends Twig_Template
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
        $__internal_6b097e28ae0a3f23211854c5b5afa8724af6fca230929bcf895320a986d84ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b097e28ae0a3f23211854c5b5afa8724af6fca230929bcf895320a986d84ac0->enter($__internal_6b097e28ae0a3f23211854c5b5afa8724af6fca230929bcf895320a986d84ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_11b01fed874f16bbcc7da4852b3605a65d073ae385e4be51a2f6254cd20e86f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b01fed874f16bbcc7da4852b3605a65d073ae385e4be51a2f6254cd20e86f7->enter($__internal_11b01fed874f16bbcc7da4852b3605a65d073ae385e4be51a2f6254cd20e86f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b097e28ae0a3f23211854c5b5afa8724af6fca230929bcf895320a986d84ac0->leave($__internal_6b097e28ae0a3f23211854c5b5afa8724af6fca230929bcf895320a986d84ac0_prof);

        
        $__internal_11b01fed874f16bbcc7da4852b3605a65d073ae385e4be51a2f6254cd20e86f7->leave($__internal_11b01fed874f16bbcc7da4852b3605a65d073ae385e4be51a2f6254cd20e86f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_22601ad815510aa1bbaf8c1cf416eb044cbf7651d1180ef6e15f61f119190d9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22601ad815510aa1bbaf8c1cf416eb044cbf7651d1180ef6e15f61f119190d9c->enter($__internal_22601ad815510aa1bbaf8c1cf416eb044cbf7651d1180ef6e15f61f119190d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5f37c23fca7e16474a644d2718c048ddd4c67fe6726f2ff7d4ba459d3068a519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f37c23fca7e16474a644d2718c048ddd4c67fe6726f2ff7d4ba459d3068a519->enter($__internal_5f37c23fca7e16474a644d2718c048ddd4c67fe6726f2ff7d4ba459d3068a519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5f37c23fca7e16474a644d2718c048ddd4c67fe6726f2ff7d4ba459d3068a519->leave($__internal_5f37c23fca7e16474a644d2718c048ddd4c67fe6726f2ff7d4ba459d3068a519_prof);

        
        $__internal_22601ad815510aa1bbaf8c1cf416eb044cbf7651d1180ef6e15f61f119190d9c->leave($__internal_22601ad815510aa1bbaf8c1cf416eb044cbf7651d1180ef6e15f61f119190d9c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1235296157ae318ee030e58ba617ea43159e07539fa66c539dba23ed320f9040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1235296157ae318ee030e58ba617ea43159e07539fa66c539dba23ed320f9040->enter($__internal_1235296157ae318ee030e58ba617ea43159e07539fa66c539dba23ed320f9040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd20540a71c9811352a7fb49716769a90cdffdce593a40fe1db9007a893cc22b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd20540a71c9811352a7fb49716769a90cdffdce593a40fe1db9007a893cc22b->enter($__internal_fd20540a71c9811352a7fb49716769a90cdffdce593a40fe1db9007a893cc22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fd20540a71c9811352a7fb49716769a90cdffdce593a40fe1db9007a893cc22b->leave($__internal_fd20540a71c9811352a7fb49716769a90cdffdce593a40fe1db9007a893cc22b_prof);

        
        $__internal_1235296157ae318ee030e58ba617ea43159e07539fa66c539dba23ed320f9040->leave($__internal_1235296157ae318ee030e58ba617ea43159e07539fa66c539dba23ed320f9040_prof);

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
