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
        $__internal_4571e981c85e0c416a21a9841fed4e23c2e7603f1b1ab920ad0a3870c2666733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4571e981c85e0c416a21a9841fed4e23c2e7603f1b1ab920ad0a3870c2666733->enter($__internal_4571e981c85e0c416a21a9841fed4e23c2e7603f1b1ab920ad0a3870c2666733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_ae08a6c4389c3509bc9678ba1d6a51fc3f0452108e50190e1f22f13a771a2c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae08a6c4389c3509bc9678ba1d6a51fc3f0452108e50190e1f22f13a771a2c81->enter($__internal_ae08a6c4389c3509bc9678ba1d6a51fc3f0452108e50190e1f22f13a771a2c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4571e981c85e0c416a21a9841fed4e23c2e7603f1b1ab920ad0a3870c2666733->leave($__internal_4571e981c85e0c416a21a9841fed4e23c2e7603f1b1ab920ad0a3870c2666733_prof);

        
        $__internal_ae08a6c4389c3509bc9678ba1d6a51fc3f0452108e50190e1f22f13a771a2c81->leave($__internal_ae08a6c4389c3509bc9678ba1d6a51fc3f0452108e50190e1f22f13a771a2c81_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_787bafd190dbd87eecde0a3faaecbf856ec21963d0d798f6f662d986dbdbd0b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_787bafd190dbd87eecde0a3faaecbf856ec21963d0d798f6f662d986dbdbd0b3->enter($__internal_787bafd190dbd87eecde0a3faaecbf856ec21963d0d798f6f662d986dbdbd0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c4734266d67fb299f7aa0a1672cf8c3008c99864c85ce8a69c70167c39e743c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4734266d67fb299f7aa0a1672cf8c3008c99864c85ce8a69c70167c39e743c0->enter($__internal_c4734266d67fb299f7aa0a1672cf8c3008c99864c85ce8a69c70167c39e743c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c4734266d67fb299f7aa0a1672cf8c3008c99864c85ce8a69c70167c39e743c0->leave($__internal_c4734266d67fb299f7aa0a1672cf8c3008c99864c85ce8a69c70167c39e743c0_prof);

        
        $__internal_787bafd190dbd87eecde0a3faaecbf856ec21963d0d798f6f662d986dbdbd0b3->leave($__internal_787bafd190dbd87eecde0a3faaecbf856ec21963d0d798f6f662d986dbdbd0b3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0e69f382f4b92127453b5610fb38aa9268391926a176e0ab3b15eb3b7d01e857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e69f382f4b92127453b5610fb38aa9268391926a176e0ab3b15eb3b7d01e857->enter($__internal_0e69f382f4b92127453b5610fb38aa9268391926a176e0ab3b15eb3b7d01e857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8d30b1d5fd1e4de17d90713ff63d117681e735637fd1eca84ec61c740ec4a9c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d30b1d5fd1e4de17d90713ff63d117681e735637fd1eca84ec61c740ec4a9c6->enter($__internal_8d30b1d5fd1e4de17d90713ff63d117681e735637fd1eca84ec61c740ec4a9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8d30b1d5fd1e4de17d90713ff63d117681e735637fd1eca84ec61c740ec4a9c6->leave($__internal_8d30b1d5fd1e4de17d90713ff63d117681e735637fd1eca84ec61c740ec4a9c6_prof);

        
        $__internal_0e69f382f4b92127453b5610fb38aa9268391926a176e0ab3b15eb3b7d01e857->leave($__internal_0e69f382f4b92127453b5610fb38aa9268391926a176e0ab3b15eb3b7d01e857_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f36cd75c2e8d3feb4625763f631e887447cb8772f89df6b95174b8c9f42d25ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f36cd75c2e8d3feb4625763f631e887447cb8772f89df6b95174b8c9f42d25ed->enter($__internal_f36cd75c2e8d3feb4625763f631e887447cb8772f89df6b95174b8c9f42d25ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4ad9837f3958e3684691f518806b9087aed9af768f14597916b6bd9ad2990e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad9837f3958e3684691f518806b9087aed9af768f14597916b6bd9ad2990e29->enter($__internal_4ad9837f3958e3684691f518806b9087aed9af768f14597916b6bd9ad2990e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4ad9837f3958e3684691f518806b9087aed9af768f14597916b6bd9ad2990e29->leave($__internal_4ad9837f3958e3684691f518806b9087aed9af768f14597916b6bd9ad2990e29_prof);

        
        $__internal_f36cd75c2e8d3feb4625763f631e887447cb8772f89df6b95174b8c9f42d25ed->leave($__internal_f36cd75c2e8d3feb4625763f631e887447cb8772f89df6b95174b8c9f42d25ed_prof);

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
