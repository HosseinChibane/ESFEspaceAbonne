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
        $__internal_29c3c5600b3d3aa841f80fa5aecc684d69eabf634c304f073d4f3765cef4ade3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c3c5600b3d3aa841f80fa5aecc684d69eabf634c304f073d4f3765cef4ade3->enter($__internal_29c3c5600b3d3aa841f80fa5aecc684d69eabf634c304f073d4f3765cef4ade3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_39829bfb9a923ba08d6d4113f25b25cdeafbbcebebbbc5cffaca069f6d39b7ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39829bfb9a923ba08d6d4113f25b25cdeafbbcebebbbc5cffaca069f6d39b7ec->enter($__internal_39829bfb9a923ba08d6d4113f25b25cdeafbbcebebbbc5cffaca069f6d39b7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29c3c5600b3d3aa841f80fa5aecc684d69eabf634c304f073d4f3765cef4ade3->leave($__internal_29c3c5600b3d3aa841f80fa5aecc684d69eabf634c304f073d4f3765cef4ade3_prof);

        
        $__internal_39829bfb9a923ba08d6d4113f25b25cdeafbbcebebbbc5cffaca069f6d39b7ec->leave($__internal_39829bfb9a923ba08d6d4113f25b25cdeafbbcebebbbc5cffaca069f6d39b7ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_48a22795aa8b7364c11409ffff996ecbb1abe92a61f239a5ce1c803f6c0a127f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a22795aa8b7364c11409ffff996ecbb1abe92a61f239a5ce1c803f6c0a127f->enter($__internal_48a22795aa8b7364c11409ffff996ecbb1abe92a61f239a5ce1c803f6c0a127f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ccfed015b56db0303b9491c3f0b3bed4638ff6b99aec5f9809503376079c3324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccfed015b56db0303b9491c3f0b3bed4638ff6b99aec5f9809503376079c3324->enter($__internal_ccfed015b56db0303b9491c3f0b3bed4638ff6b99aec5f9809503376079c3324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ccfed015b56db0303b9491c3f0b3bed4638ff6b99aec5f9809503376079c3324->leave($__internal_ccfed015b56db0303b9491c3f0b3bed4638ff6b99aec5f9809503376079c3324_prof);

        
        $__internal_48a22795aa8b7364c11409ffff996ecbb1abe92a61f239a5ce1c803f6c0a127f->leave($__internal_48a22795aa8b7364c11409ffff996ecbb1abe92a61f239a5ce1c803f6c0a127f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c28313735f7d95691d95e824dc80ae48c86be9cc92e80ce289583c6334cc8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c28313735f7d95691d95e824dc80ae48c86be9cc92e80ce289583c6334cc8c4->enter($__internal_9c28313735f7d95691d95e824dc80ae48c86be9cc92e80ce289583c6334cc8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba74909b4d38f295656a2846295c7b98f59d86f7faeccf5d849677b85e1ebe9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba74909b4d38f295656a2846295c7b98f59d86f7faeccf5d849677b85e1ebe9b->enter($__internal_ba74909b4d38f295656a2846295c7b98f59d86f7faeccf5d849677b85e1ebe9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ba74909b4d38f295656a2846295c7b98f59d86f7faeccf5d849677b85e1ebe9b->leave($__internal_ba74909b4d38f295656a2846295c7b98f59d86f7faeccf5d849677b85e1ebe9b_prof);

        
        $__internal_9c28313735f7d95691d95e824dc80ae48c86be9cc92e80ce289583c6334cc8c4->leave($__internal_9c28313735f7d95691d95e824dc80ae48c86be9cc92e80ce289583c6334cc8c4_prof);

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
