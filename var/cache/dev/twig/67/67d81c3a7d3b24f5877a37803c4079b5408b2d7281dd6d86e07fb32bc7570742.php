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
        $__internal_08af7045b079a9badaad715286cec8649a79dcc3f2e52aaef6b496aa10d983e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08af7045b079a9badaad715286cec8649a79dcc3f2e52aaef6b496aa10d983e1->enter($__internal_08af7045b079a9badaad715286cec8649a79dcc3f2e52aaef6b496aa10d983e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_07e05622522ddea8b42617457d832cc6866238c6930dd71419b0d8b4b92fdc98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e05622522ddea8b42617457d832cc6866238c6930dd71419b0d8b4b92fdc98->enter($__internal_07e05622522ddea8b42617457d832cc6866238c6930dd71419b0d8b4b92fdc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08af7045b079a9badaad715286cec8649a79dcc3f2e52aaef6b496aa10d983e1->leave($__internal_08af7045b079a9badaad715286cec8649a79dcc3f2e52aaef6b496aa10d983e1_prof);

        
        $__internal_07e05622522ddea8b42617457d832cc6866238c6930dd71419b0d8b4b92fdc98->leave($__internal_07e05622522ddea8b42617457d832cc6866238c6930dd71419b0d8b4b92fdc98_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6aed251bdf8a7ea592dd2ce9b21f7f8d0242f8ef7a5c8cbeac22179bbb3e49e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6aed251bdf8a7ea592dd2ce9b21f7f8d0242f8ef7a5c8cbeac22179bbb3e49e->enter($__internal_a6aed251bdf8a7ea592dd2ce9b21f7f8d0242f8ef7a5c8cbeac22179bbb3e49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b8613f69ea7258aa6620d07c4a11e818e20ab9523108bf2b97324e39f760aede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8613f69ea7258aa6620d07c4a11e818e20ab9523108bf2b97324e39f760aede->enter($__internal_b8613f69ea7258aa6620d07c4a11e818e20ab9523108bf2b97324e39f760aede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b8613f69ea7258aa6620d07c4a11e818e20ab9523108bf2b97324e39f760aede->leave($__internal_b8613f69ea7258aa6620d07c4a11e818e20ab9523108bf2b97324e39f760aede_prof);

        
        $__internal_a6aed251bdf8a7ea592dd2ce9b21f7f8d0242f8ef7a5c8cbeac22179bbb3e49e->leave($__internal_a6aed251bdf8a7ea592dd2ce9b21f7f8d0242f8ef7a5c8cbeac22179bbb3e49e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f5ac64fffc6cf803d28690608284286659257ca6120715a4a5290c268c55bdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f5ac64fffc6cf803d28690608284286659257ca6120715a4a5290c268c55bdf->enter($__internal_9f5ac64fffc6cf803d28690608284286659257ca6120715a4a5290c268c55bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6155ae110c5f8f9c068e5c0b0825f83e2aeedad7410546a16e9ae124f0aff35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6155ae110c5f8f9c068e5c0b0825f83e2aeedad7410546a16e9ae124f0aff35f->enter($__internal_6155ae110c5f8f9c068e5c0b0825f83e2aeedad7410546a16e9ae124f0aff35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6155ae110c5f8f9c068e5c0b0825f83e2aeedad7410546a16e9ae124f0aff35f->leave($__internal_6155ae110c5f8f9c068e5c0b0825f83e2aeedad7410546a16e9ae124f0aff35f_prof);

        
        $__internal_9f5ac64fffc6cf803d28690608284286659257ca6120715a4a5290c268c55bdf->leave($__internal_9f5ac64fffc6cf803d28690608284286659257ca6120715a4a5290c268c55bdf_prof);

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
