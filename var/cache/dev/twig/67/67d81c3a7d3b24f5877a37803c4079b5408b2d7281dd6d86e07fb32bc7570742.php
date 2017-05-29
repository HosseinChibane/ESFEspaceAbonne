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
        $__internal_38c38d9efb8bf2ce73d8f3650dd2f9f7434dd0788919f6a4143831c3ffe5bb5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c38d9efb8bf2ce73d8f3650dd2f9f7434dd0788919f6a4143831c3ffe5bb5c->enter($__internal_38c38d9efb8bf2ce73d8f3650dd2f9f7434dd0788919f6a4143831c3ffe5bb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_4fd92da348d7924295d2bc6c1b23fdd80486daec318e46aa2425baf011fd1c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd92da348d7924295d2bc6c1b23fdd80486daec318e46aa2425baf011fd1c33->enter($__internal_4fd92da348d7924295d2bc6c1b23fdd80486daec318e46aa2425baf011fd1c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38c38d9efb8bf2ce73d8f3650dd2f9f7434dd0788919f6a4143831c3ffe5bb5c->leave($__internal_38c38d9efb8bf2ce73d8f3650dd2f9f7434dd0788919f6a4143831c3ffe5bb5c_prof);

        
        $__internal_4fd92da348d7924295d2bc6c1b23fdd80486daec318e46aa2425baf011fd1c33->leave($__internal_4fd92da348d7924295d2bc6c1b23fdd80486daec318e46aa2425baf011fd1c33_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cd793e2c687b99a0e0f7596e909975d46aca665008e5020a1774a650f863cbc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd793e2c687b99a0e0f7596e909975d46aca665008e5020a1774a650f863cbc7->enter($__internal_cd793e2c687b99a0e0f7596e909975d46aca665008e5020a1774a650f863cbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_727e11a04793559ccd676df1f77d8bc7492e176a544c1859efd1d7d4f5f2dd46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727e11a04793559ccd676df1f77d8bc7492e176a544c1859efd1d7d4f5f2dd46->enter($__internal_727e11a04793559ccd676df1f77d8bc7492e176a544c1859efd1d7d4f5f2dd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_727e11a04793559ccd676df1f77d8bc7492e176a544c1859efd1d7d4f5f2dd46->leave($__internal_727e11a04793559ccd676df1f77d8bc7492e176a544c1859efd1d7d4f5f2dd46_prof);

        
        $__internal_cd793e2c687b99a0e0f7596e909975d46aca665008e5020a1774a650f863cbc7->leave($__internal_cd793e2c687b99a0e0f7596e909975d46aca665008e5020a1774a650f863cbc7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_97d38511fbc2d7320942b6e1992cf704d8e0cb3a3e4fcfe9b846ff1fa41f7740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d38511fbc2d7320942b6e1992cf704d8e0cb3a3e4fcfe9b846ff1fa41f7740->enter($__internal_97d38511fbc2d7320942b6e1992cf704d8e0cb3a3e4fcfe9b846ff1fa41f7740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_946212f138383dc46af7339ac1ed1845f616fa9f151aa054e17dfff25ece353f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946212f138383dc46af7339ac1ed1845f616fa9f151aa054e17dfff25ece353f->enter($__internal_946212f138383dc46af7339ac1ed1845f616fa9f151aa054e17dfff25ece353f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_946212f138383dc46af7339ac1ed1845f616fa9f151aa054e17dfff25ece353f->leave($__internal_946212f138383dc46af7339ac1ed1845f616fa9f151aa054e17dfff25ece353f_prof);

        
        $__internal_97d38511fbc2d7320942b6e1992cf704d8e0cb3a3e4fcfe9b846ff1fa41f7740->leave($__internal_97d38511fbc2d7320942b6e1992cf704d8e0cb3a3e4fcfe9b846ff1fa41f7740_prof);

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
