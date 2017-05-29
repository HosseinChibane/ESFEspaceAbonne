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
        $__internal_b7ed2af453faf4ab8a9180ee766eff024657c836a23e45e9f11fdbd9dfc766b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ed2af453faf4ab8a9180ee766eff024657c836a23e45e9f11fdbd9dfc766b9->enter($__internal_b7ed2af453faf4ab8a9180ee766eff024657c836a23e45e9f11fdbd9dfc766b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_3e65856ba4adfca5790cbb67fd474306981fd79b8a9a603d9b38c1598e1727c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e65856ba4adfca5790cbb67fd474306981fd79b8a9a603d9b38c1598e1727c9->enter($__internal_3e65856ba4adfca5790cbb67fd474306981fd79b8a9a603d9b38c1598e1727c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7ed2af453faf4ab8a9180ee766eff024657c836a23e45e9f11fdbd9dfc766b9->leave($__internal_b7ed2af453faf4ab8a9180ee766eff024657c836a23e45e9f11fdbd9dfc766b9_prof);

        
        $__internal_3e65856ba4adfca5790cbb67fd474306981fd79b8a9a603d9b38c1598e1727c9->leave($__internal_3e65856ba4adfca5790cbb67fd474306981fd79b8a9a603d9b38c1598e1727c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7cad9b56dfd3133562d657c0e925cf38e21f90c067522c2e488bf71bf22e18e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cad9b56dfd3133562d657c0e925cf38e21f90c067522c2e488bf71bf22e18e0->enter($__internal_7cad9b56dfd3133562d657c0e925cf38e21f90c067522c2e488bf71bf22e18e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_94312e787ef29874755580167f8575979bf71d4777004db534aa1d87c51d56cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94312e787ef29874755580167f8575979bf71d4777004db534aa1d87c51d56cf->enter($__internal_94312e787ef29874755580167f8575979bf71d4777004db534aa1d87c51d56cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_94312e787ef29874755580167f8575979bf71d4777004db534aa1d87c51d56cf->leave($__internal_94312e787ef29874755580167f8575979bf71d4777004db534aa1d87c51d56cf_prof);

        
        $__internal_7cad9b56dfd3133562d657c0e925cf38e21f90c067522c2e488bf71bf22e18e0->leave($__internal_7cad9b56dfd3133562d657c0e925cf38e21f90c067522c2e488bf71bf22e18e0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa5cf7f2adf6add2d8c4dc5ac7b2794645f766eb5d022650a1b29fa063c27029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa5cf7f2adf6add2d8c4dc5ac7b2794645f766eb5d022650a1b29fa063c27029->enter($__internal_fa5cf7f2adf6add2d8c4dc5ac7b2794645f766eb5d022650a1b29fa063c27029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c35dabbf51f702ba706e75aaaa3a8f140b76ad23ff4fd5c731823f4d698cc07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c35dabbf51f702ba706e75aaaa3a8f140b76ad23ff4fd5c731823f4d698cc07->enter($__internal_2c35dabbf51f702ba706e75aaaa3a8f140b76ad23ff4fd5c731823f4d698cc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2c35dabbf51f702ba706e75aaaa3a8f140b76ad23ff4fd5c731823f4d698cc07->leave($__internal_2c35dabbf51f702ba706e75aaaa3a8f140b76ad23ff4fd5c731823f4d698cc07_prof);

        
        $__internal_fa5cf7f2adf6add2d8c4dc5ac7b2794645f766eb5d022650a1b29fa063c27029->leave($__internal_fa5cf7f2adf6add2d8c4dc5ac7b2794645f766eb5d022650a1b29fa063c27029_prof);

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
