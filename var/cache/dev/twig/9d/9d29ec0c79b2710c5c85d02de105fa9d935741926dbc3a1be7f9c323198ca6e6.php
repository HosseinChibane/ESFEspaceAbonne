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
        $__internal_953ef97f67eb4e32da7ca423fdf4a2b7f94aa66fd8243795b750c26355e68ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953ef97f67eb4e32da7ca423fdf4a2b7f94aa66fd8243795b750c26355e68ff9->enter($__internal_953ef97f67eb4e32da7ca423fdf4a2b7f94aa66fd8243795b750c26355e68ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2f6db0f2eeb9219caeaa6e64552a51940f7bb55e33f1d7201c0bacf13a1769bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6db0f2eeb9219caeaa6e64552a51940f7bb55e33f1d7201c0bacf13a1769bb->enter($__internal_2f6db0f2eeb9219caeaa6e64552a51940f7bb55e33f1d7201c0bacf13a1769bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_953ef97f67eb4e32da7ca423fdf4a2b7f94aa66fd8243795b750c26355e68ff9->leave($__internal_953ef97f67eb4e32da7ca423fdf4a2b7f94aa66fd8243795b750c26355e68ff9_prof);

        
        $__internal_2f6db0f2eeb9219caeaa6e64552a51940f7bb55e33f1d7201c0bacf13a1769bb->leave($__internal_2f6db0f2eeb9219caeaa6e64552a51940f7bb55e33f1d7201c0bacf13a1769bb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe7139e71973a1a80421f5c2a6db430762460274508a1a6491a646075e1c9107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe7139e71973a1a80421f5c2a6db430762460274508a1a6491a646075e1c9107->enter($__internal_fe7139e71973a1a80421f5c2a6db430762460274508a1a6491a646075e1c9107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_78930e466daa13822e22e7d5b80d3914aa731a8e8b375746f5dbd4afded3f304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78930e466daa13822e22e7d5b80d3914aa731a8e8b375746f5dbd4afded3f304->enter($__internal_78930e466daa13822e22e7d5b80d3914aa731a8e8b375746f5dbd4afded3f304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_78930e466daa13822e22e7d5b80d3914aa731a8e8b375746f5dbd4afded3f304->leave($__internal_78930e466daa13822e22e7d5b80d3914aa731a8e8b375746f5dbd4afded3f304_prof);

        
        $__internal_fe7139e71973a1a80421f5c2a6db430762460274508a1a6491a646075e1c9107->leave($__internal_fe7139e71973a1a80421f5c2a6db430762460274508a1a6491a646075e1c9107_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6381335bec88c8c8dc6f8e3385a5e1e278605589ed4298cadcd7e2591f70c110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6381335bec88c8c8dc6f8e3385a5e1e278605589ed4298cadcd7e2591f70c110->enter($__internal_6381335bec88c8c8dc6f8e3385a5e1e278605589ed4298cadcd7e2591f70c110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6e1fb87411f8157ad3330bc70dcf24202dfa5df11396ef9b8d350b15197e123c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e1fb87411f8157ad3330bc70dcf24202dfa5df11396ef9b8d350b15197e123c->enter($__internal_6e1fb87411f8157ad3330bc70dcf24202dfa5df11396ef9b8d350b15197e123c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6e1fb87411f8157ad3330bc70dcf24202dfa5df11396ef9b8d350b15197e123c->leave($__internal_6e1fb87411f8157ad3330bc70dcf24202dfa5df11396ef9b8d350b15197e123c_prof);

        
        $__internal_6381335bec88c8c8dc6f8e3385a5e1e278605589ed4298cadcd7e2591f70c110->leave($__internal_6381335bec88c8c8dc6f8e3385a5e1e278605589ed4298cadcd7e2591f70c110_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cee23ee79e7c10632a5a476267011de6859d87eb7dacb0937119b6ebca6132c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee23ee79e7c10632a5a476267011de6859d87eb7dacb0937119b6ebca6132c8->enter($__internal_cee23ee79e7c10632a5a476267011de6859d87eb7dacb0937119b6ebca6132c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_76953c35a39bc563c4ef93fdf6891fbe569c0e4684af0ecb4b34064e6d1795aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76953c35a39bc563c4ef93fdf6891fbe569c0e4684af0ecb4b34064e6d1795aa->enter($__internal_76953c35a39bc563c4ef93fdf6891fbe569c0e4684af0ecb4b34064e6d1795aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_76953c35a39bc563c4ef93fdf6891fbe569c0e4684af0ecb4b34064e6d1795aa->leave($__internal_76953c35a39bc563c4ef93fdf6891fbe569c0e4684af0ecb4b34064e6d1795aa_prof);

        
        $__internal_cee23ee79e7c10632a5a476267011de6859d87eb7dacb0937119b6ebca6132c8->leave($__internal_cee23ee79e7c10632a5a476267011de6859d87eb7dacb0937119b6ebca6132c8_prof);

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
