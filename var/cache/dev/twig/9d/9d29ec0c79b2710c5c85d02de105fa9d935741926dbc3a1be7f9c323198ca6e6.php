<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_10d28f707671c262e0fb4fac03e881245af99ddee36f15c49d913963cea18654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0350df80539e4172622f353416b88a45d99840b9d1cc9271eab6ca6f08cf7e4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0350df80539e4172622f353416b88a45d99840b9d1cc9271eab6ca6f08cf7e4b->enter($__internal_0350df80539e4172622f353416b88a45d99840b9d1cc9271eab6ca6f08cf7e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5ff6b72f76cd6dfedf304c051ed25d3e09b79045e18bd4c03825290263774d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff6b72f76cd6dfedf304c051ed25d3e09b79045e18bd4c03825290263774d9f->enter($__internal_5ff6b72f76cd6dfedf304c051ed25d3e09b79045e18bd4c03825290263774d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0350df80539e4172622f353416b88a45d99840b9d1cc9271eab6ca6f08cf7e4b->leave($__internal_0350df80539e4172622f353416b88a45d99840b9d1cc9271eab6ca6f08cf7e4b_prof);

        
        $__internal_5ff6b72f76cd6dfedf304c051ed25d3e09b79045e18bd4c03825290263774d9f->leave($__internal_5ff6b72f76cd6dfedf304c051ed25d3e09b79045e18bd4c03825290263774d9f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f5b39ce473a657e60fb8411d3eaf0af547cbf024b8b81fb2a55ebd702bc31473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5b39ce473a657e60fb8411d3eaf0af547cbf024b8b81fb2a55ebd702bc31473->enter($__internal_f5b39ce473a657e60fb8411d3eaf0af547cbf024b8b81fb2a55ebd702bc31473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4395d71561a7680491faf4f593143197d35d5f1fdb932feaa4d3f11c1a68e00b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4395d71561a7680491faf4f593143197d35d5f1fdb932feaa4d3f11c1a68e00b->enter($__internal_4395d71561a7680491faf4f593143197d35d5f1fdb932feaa4d3f11c1a68e00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4395d71561a7680491faf4f593143197d35d5f1fdb932feaa4d3f11c1a68e00b->leave($__internal_4395d71561a7680491faf4f593143197d35d5f1fdb932feaa4d3f11c1a68e00b_prof);

        
        $__internal_f5b39ce473a657e60fb8411d3eaf0af547cbf024b8b81fb2a55ebd702bc31473->leave($__internal_f5b39ce473a657e60fb8411d3eaf0af547cbf024b8b81fb2a55ebd702bc31473_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_42be702410b1e18aaf0e5a83e8d087c8e8729696373297de248746a474b5c45e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42be702410b1e18aaf0e5a83e8d087c8e8729696373297de248746a474b5c45e->enter($__internal_42be702410b1e18aaf0e5a83e8d087c8e8729696373297de248746a474b5c45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_52e0380eb7062e09158e45395860f477339813b41c668751cc978521e36e3a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e0380eb7062e09158e45395860f477339813b41c668751cc978521e36e3a8d->enter($__internal_52e0380eb7062e09158e45395860f477339813b41c668751cc978521e36e3a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_52e0380eb7062e09158e45395860f477339813b41c668751cc978521e36e3a8d->leave($__internal_52e0380eb7062e09158e45395860f477339813b41c668751cc978521e36e3a8d_prof);

        
        $__internal_42be702410b1e18aaf0e5a83e8d087c8e8729696373297de248746a474b5c45e->leave($__internal_42be702410b1e18aaf0e5a83e8d087c8e8729696373297de248746a474b5c45e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a2dbe49ec2455aa39ff1c47d90eb6f9d64ba94a1c05f0714bf4f85ffd9cbfb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a2dbe49ec2455aa39ff1c47d90eb6f9d64ba94a1c05f0714bf4f85ffd9cbfb2->enter($__internal_7a2dbe49ec2455aa39ff1c47d90eb6f9d64ba94a1c05f0714bf4f85ffd9cbfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e5b2b5acd8aac3c7df091628b334321fc80948b9b91308c98d7c1aea3cafd464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b2b5acd8aac3c7df091628b334321fc80948b9b91308c98d7c1aea3cafd464->enter($__internal_e5b2b5acd8aac3c7df091628b334321fc80948b9b91308c98d7c1aea3cafd464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e5b2b5acd8aac3c7df091628b334321fc80948b9b91308c98d7c1aea3cafd464->leave($__internal_e5b2b5acd8aac3c7df091628b334321fc80948b9b91308c98d7c1aea3cafd464_prof);

        
        $__internal_7a2dbe49ec2455aa39ff1c47d90eb6f9d64ba94a1c05f0714bf4f85ffd9cbfb2->leave($__internal_7a2dbe49ec2455aa39ff1c47d90eb6f9d64ba94a1c05f0714bf4f85ffd9cbfb2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
