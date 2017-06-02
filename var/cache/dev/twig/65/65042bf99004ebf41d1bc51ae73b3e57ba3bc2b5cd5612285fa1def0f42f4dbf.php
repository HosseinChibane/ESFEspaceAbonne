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
        $__internal_a38222144897f29ad0a8470774522e76d74d60ff1a86b6e6b313e0216d74ff7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a38222144897f29ad0a8470774522e76d74d60ff1a86b6e6b313e0216d74ff7c->enter($__internal_a38222144897f29ad0a8470774522e76d74d60ff1a86b6e6b313e0216d74ff7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_6e541df8cb92fdf48d8bde5ee0255aeeb131e918498a50f7162ded7dfc99eb63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e541df8cb92fdf48d8bde5ee0255aeeb131e918498a50f7162ded7dfc99eb63->enter($__internal_6e541df8cb92fdf48d8bde5ee0255aeeb131e918498a50f7162ded7dfc99eb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a38222144897f29ad0a8470774522e76d74d60ff1a86b6e6b313e0216d74ff7c->leave($__internal_a38222144897f29ad0a8470774522e76d74d60ff1a86b6e6b313e0216d74ff7c_prof);

        
        $__internal_6e541df8cb92fdf48d8bde5ee0255aeeb131e918498a50f7162ded7dfc99eb63->leave($__internal_6e541df8cb92fdf48d8bde5ee0255aeeb131e918498a50f7162ded7dfc99eb63_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_afae4dca2dec2c5c725732a9750819a81e4d737fe4c55fae89ce731cd2e1aadd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afae4dca2dec2c5c725732a9750819a81e4d737fe4c55fae89ce731cd2e1aadd->enter($__internal_afae4dca2dec2c5c725732a9750819a81e4d737fe4c55fae89ce731cd2e1aadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cf6eb4607bea6a34cf898beab204c45be868747f89a2efb8798320be3953b83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf6eb4607bea6a34cf898beab204c45be868747f89a2efb8798320be3953b83e->enter($__internal_cf6eb4607bea6a34cf898beab204c45be868747f89a2efb8798320be3953b83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_cf6eb4607bea6a34cf898beab204c45be868747f89a2efb8798320be3953b83e->leave($__internal_cf6eb4607bea6a34cf898beab204c45be868747f89a2efb8798320be3953b83e_prof);

        
        $__internal_afae4dca2dec2c5c725732a9750819a81e4d737fe4c55fae89ce731cd2e1aadd->leave($__internal_afae4dca2dec2c5c725732a9750819a81e4d737fe4c55fae89ce731cd2e1aadd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6860d4a3ff13373359fe9f61a6453dde1de8d6f653483a6fab5e6cd6de541345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6860d4a3ff13373359fe9f61a6453dde1de8d6f653483a6fab5e6cd6de541345->enter($__internal_6860d4a3ff13373359fe9f61a6453dde1de8d6f653483a6fab5e6cd6de541345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e039d6cfff382a2c31d58ed8691da2d6f4b386377d329b0f8996133c84409706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e039d6cfff382a2c31d58ed8691da2d6f4b386377d329b0f8996133c84409706->enter($__internal_e039d6cfff382a2c31d58ed8691da2d6f4b386377d329b0f8996133c84409706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e039d6cfff382a2c31d58ed8691da2d6f4b386377d329b0f8996133c84409706->leave($__internal_e039d6cfff382a2c31d58ed8691da2d6f4b386377d329b0f8996133c84409706_prof);

        
        $__internal_6860d4a3ff13373359fe9f61a6453dde1de8d6f653483a6fab5e6cd6de541345->leave($__internal_6860d4a3ff13373359fe9f61a6453dde1de8d6f653483a6fab5e6cd6de541345_prof);

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
