<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_008fe33c83efc2ec86a7acd4afd6a671b54d03fbcbad507f37ace20c452cd095 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_39e5fadfa44b179e0e50f0a60c5adfc0ff71a74a092fe1904096fdcfd19f5d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e5fadfa44b179e0e50f0a60c5adfc0ff71a74a092fe1904096fdcfd19f5d08->enter($__internal_39e5fadfa44b179e0e50f0a60c5adfc0ff71a74a092fe1904096fdcfd19f5d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_6cbb427f8137c8fc2653c5086804eec7a22866c6a3a8c3a3898839e7a5532bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbb427f8137c8fc2653c5086804eec7a22866c6a3a8c3a3898839e7a5532bc7->enter($__internal_6cbb427f8137c8fc2653c5086804eec7a22866c6a3a8c3a3898839e7a5532bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39e5fadfa44b179e0e50f0a60c5adfc0ff71a74a092fe1904096fdcfd19f5d08->leave($__internal_39e5fadfa44b179e0e50f0a60c5adfc0ff71a74a092fe1904096fdcfd19f5d08_prof);

        
        $__internal_6cbb427f8137c8fc2653c5086804eec7a22866c6a3a8c3a3898839e7a5532bc7->leave($__internal_6cbb427f8137c8fc2653c5086804eec7a22866c6a3a8c3a3898839e7a5532bc7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_92fa42b7f2fcb1ca43bccad8c2b98ad1274e28f5a78c306f5f5624364fc3022e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92fa42b7f2fcb1ca43bccad8c2b98ad1274e28f5a78c306f5f5624364fc3022e->enter($__internal_92fa42b7f2fcb1ca43bccad8c2b98ad1274e28f5a78c306f5f5624364fc3022e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ad266c71cbe6c7a7c2d3b974eaa1432454849d79b1b775a37bb6766fa85b8eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad266c71cbe6c7a7c2d3b974eaa1432454849d79b1b775a37bb6766fa85b8eeb->enter($__internal_ad266c71cbe6c7a7c2d3b974eaa1432454849d79b1b775a37bb6766fa85b8eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ad266c71cbe6c7a7c2d3b974eaa1432454849d79b1b775a37bb6766fa85b8eeb->leave($__internal_ad266c71cbe6c7a7c2d3b974eaa1432454849d79b1b775a37bb6766fa85b8eeb_prof);

        
        $__internal_92fa42b7f2fcb1ca43bccad8c2b98ad1274e28f5a78c306f5f5624364fc3022e->leave($__internal_92fa42b7f2fcb1ca43bccad8c2b98ad1274e28f5a78c306f5f5624364fc3022e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e62150262f9cecaac63c6629ef4dad0c0829b3907185dd33d5c9b2d0ae615c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e62150262f9cecaac63c6629ef4dad0c0829b3907185dd33d5c9b2d0ae615c8->enter($__internal_9e62150262f9cecaac63c6629ef4dad0c0829b3907185dd33d5c9b2d0ae615c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_462000ea1d49016ee94e4934f32d2d7816085465692bf8e87e7306f88c4cac9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_462000ea1d49016ee94e4934f32d2d7816085465692bf8e87e7306f88c4cac9c->enter($__internal_462000ea1d49016ee94e4934f32d2d7816085465692bf8e87e7306f88c4cac9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_462000ea1d49016ee94e4934f32d2d7816085465692bf8e87e7306f88c4cac9c->leave($__internal_462000ea1d49016ee94e4934f32d2d7816085465692bf8e87e7306f88c4cac9c_prof);

        
        $__internal_9e62150262f9cecaac63c6629ef4dad0c0829b3907185dd33d5c9b2d0ae615c8->leave($__internal_9e62150262f9cecaac63c6629ef4dad0c0829b3907185dd33d5c9b2d0ae615c8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_60d6fd720711a3670ef4789e8b60e6569c32b45ed324de7ad6a76652664b01e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d6fd720711a3670ef4789e8b60e6569c32b45ed324de7ad6a76652664b01e8->enter($__internal_60d6fd720711a3670ef4789e8b60e6569c32b45ed324de7ad6a76652664b01e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_028ec8824e12331098c814e73e952aa7a41116ff5f652f1889a5c4459b20b820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028ec8824e12331098c814e73e952aa7a41116ff5f652f1889a5c4459b20b820->enter($__internal_028ec8824e12331098c814e73e952aa7a41116ff5f652f1889a5c4459b20b820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_028ec8824e12331098c814e73e952aa7a41116ff5f652f1889a5c4459b20b820->leave($__internal_028ec8824e12331098c814e73e952aa7a41116ff5f652f1889a5c4459b20b820_prof);

        
        $__internal_60d6fd720711a3670ef4789e8b60e6569c32b45ed324de7ad6a76652664b01e8->leave($__internal_60d6fd720711a3670ef4789e8b60e6569c32b45ed324de7ad6a76652664b01e8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
