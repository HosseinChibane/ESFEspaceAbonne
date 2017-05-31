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
        $__internal_17c2b19c39f2dc6a8794bbce8f1fd24d228a1c4c070aacff50c38f68d4b152d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c2b19c39f2dc6a8794bbce8f1fd24d228a1c4c070aacff50c38f68d4b152d1->enter($__internal_17c2b19c39f2dc6a8794bbce8f1fd24d228a1c4c070aacff50c38f68d4b152d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_d0e23c738805b43a827bc97101b1f6bfae3c7b67b9fe97273786ff27fd34b8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e23c738805b43a827bc97101b1f6bfae3c7b67b9fe97273786ff27fd34b8e8->enter($__internal_d0e23c738805b43a827bc97101b1f6bfae3c7b67b9fe97273786ff27fd34b8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17c2b19c39f2dc6a8794bbce8f1fd24d228a1c4c070aacff50c38f68d4b152d1->leave($__internal_17c2b19c39f2dc6a8794bbce8f1fd24d228a1c4c070aacff50c38f68d4b152d1_prof);

        
        $__internal_d0e23c738805b43a827bc97101b1f6bfae3c7b67b9fe97273786ff27fd34b8e8->leave($__internal_d0e23c738805b43a827bc97101b1f6bfae3c7b67b9fe97273786ff27fd34b8e8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa0f01c64056ae269e0c9ddf921d322a60386646893a09cd2d87ce9df1210597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa0f01c64056ae269e0c9ddf921d322a60386646893a09cd2d87ce9df1210597->enter($__internal_aa0f01c64056ae269e0c9ddf921d322a60386646893a09cd2d87ce9df1210597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e3ffd0549f2610e3c4cbcf85323fc401a58f3588a8f336b3519a5fbba5d02ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ffd0549f2610e3c4cbcf85323fc401a58f3588a8f336b3519a5fbba5d02ec8->enter($__internal_e3ffd0549f2610e3c4cbcf85323fc401a58f3588a8f336b3519a5fbba5d02ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e3ffd0549f2610e3c4cbcf85323fc401a58f3588a8f336b3519a5fbba5d02ec8->leave($__internal_e3ffd0549f2610e3c4cbcf85323fc401a58f3588a8f336b3519a5fbba5d02ec8_prof);

        
        $__internal_aa0f01c64056ae269e0c9ddf921d322a60386646893a09cd2d87ce9df1210597->leave($__internal_aa0f01c64056ae269e0c9ddf921d322a60386646893a09cd2d87ce9df1210597_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4c5b3e02e567ff7301142bc7aee8cac9979135e45977e45b74f58d8fabe10b69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c5b3e02e567ff7301142bc7aee8cac9979135e45977e45b74f58d8fabe10b69->enter($__internal_4c5b3e02e567ff7301142bc7aee8cac9979135e45977e45b74f58d8fabe10b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_84838db314d868a13b459966914dbce6d9eb3ef0bbdb71b6c5bcb8cca0870d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84838db314d868a13b459966914dbce6d9eb3ef0bbdb71b6c5bcb8cca0870d6b->enter($__internal_84838db314d868a13b459966914dbce6d9eb3ef0bbdb71b6c5bcb8cca0870d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_84838db314d868a13b459966914dbce6d9eb3ef0bbdb71b6c5bcb8cca0870d6b->leave($__internal_84838db314d868a13b459966914dbce6d9eb3ef0bbdb71b6c5bcb8cca0870d6b_prof);

        
        $__internal_4c5b3e02e567ff7301142bc7aee8cac9979135e45977e45b74f58d8fabe10b69->leave($__internal_4c5b3e02e567ff7301142bc7aee8cac9979135e45977e45b74f58d8fabe10b69_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e1ef51a219418804249f9e1b93c3936dee57950a7ec37b8cb57f87880cf8d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1ef51a219418804249f9e1b93c3936dee57950a7ec37b8cb57f87880cf8d03->enter($__internal_8e1ef51a219418804249f9e1b93c3936dee57950a7ec37b8cb57f87880cf8d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9227fd59c236c7c5848e83a623a52ed17b5852a66a3ede10ee694b7bf3516af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9227fd59c236c7c5848e83a623a52ed17b5852a66a3ede10ee694b7bf3516af1->enter($__internal_9227fd59c236c7c5848e83a623a52ed17b5852a66a3ede10ee694b7bf3516af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9227fd59c236c7c5848e83a623a52ed17b5852a66a3ede10ee694b7bf3516af1->leave($__internal_9227fd59c236c7c5848e83a623a52ed17b5852a66a3ede10ee694b7bf3516af1_prof);

        
        $__internal_8e1ef51a219418804249f9e1b93c3936dee57950a7ec37b8cb57f87880cf8d03->leave($__internal_8e1ef51a219418804249f9e1b93c3936dee57950a7ec37b8cb57f87880cf8d03_prof);

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
