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
        $__internal_f3a60aff33d6799a0fa936d8ad5797ee56481842158ae814bd2d4e2ebb57708d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3a60aff33d6799a0fa936d8ad5797ee56481842158ae814bd2d4e2ebb57708d->enter($__internal_f3a60aff33d6799a0fa936d8ad5797ee56481842158ae814bd2d4e2ebb57708d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_206e8386da314fc51d5844e8234fb5df9951cdefec20959687552e780d99fc6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206e8386da314fc51d5844e8234fb5df9951cdefec20959687552e780d99fc6b->enter($__internal_206e8386da314fc51d5844e8234fb5df9951cdefec20959687552e780d99fc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3a60aff33d6799a0fa936d8ad5797ee56481842158ae814bd2d4e2ebb57708d->leave($__internal_f3a60aff33d6799a0fa936d8ad5797ee56481842158ae814bd2d4e2ebb57708d_prof);

        
        $__internal_206e8386da314fc51d5844e8234fb5df9951cdefec20959687552e780d99fc6b->leave($__internal_206e8386da314fc51d5844e8234fb5df9951cdefec20959687552e780d99fc6b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e6c9893f014241cefa0a3d3820b9e8b7a1bcc9dcda8328bd5e3ad75a96bb3b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e6c9893f014241cefa0a3d3820b9e8b7a1bcc9dcda8328bd5e3ad75a96bb3b7->enter($__internal_2e6c9893f014241cefa0a3d3820b9e8b7a1bcc9dcda8328bd5e3ad75a96bb3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1372b1be661c2967b5c827b448481b3c5b92cd036158401d63021d0af30100f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1372b1be661c2967b5c827b448481b3c5b92cd036158401d63021d0af30100f4->enter($__internal_1372b1be661c2967b5c827b448481b3c5b92cd036158401d63021d0af30100f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1372b1be661c2967b5c827b448481b3c5b92cd036158401d63021d0af30100f4->leave($__internal_1372b1be661c2967b5c827b448481b3c5b92cd036158401d63021d0af30100f4_prof);

        
        $__internal_2e6c9893f014241cefa0a3d3820b9e8b7a1bcc9dcda8328bd5e3ad75a96bb3b7->leave($__internal_2e6c9893f014241cefa0a3d3820b9e8b7a1bcc9dcda8328bd5e3ad75a96bb3b7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_752811f11e917b0581e2765ff15d5be43c2a6422893d94567a3b18fd4f1e626b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_752811f11e917b0581e2765ff15d5be43c2a6422893d94567a3b18fd4f1e626b->enter($__internal_752811f11e917b0581e2765ff15d5be43c2a6422893d94567a3b18fd4f1e626b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_05348cac0412dd8f24a1a08f23e5565f3770700076aadb9aa9f053bd7ab924e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05348cac0412dd8f24a1a08f23e5565f3770700076aadb9aa9f053bd7ab924e4->enter($__internal_05348cac0412dd8f24a1a08f23e5565f3770700076aadb9aa9f053bd7ab924e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_05348cac0412dd8f24a1a08f23e5565f3770700076aadb9aa9f053bd7ab924e4->leave($__internal_05348cac0412dd8f24a1a08f23e5565f3770700076aadb9aa9f053bd7ab924e4_prof);

        
        $__internal_752811f11e917b0581e2765ff15d5be43c2a6422893d94567a3b18fd4f1e626b->leave($__internal_752811f11e917b0581e2765ff15d5be43c2a6422893d94567a3b18fd4f1e626b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf06e8f195144909c437d563eed6fb6ae28f5d78b72187a62e97f3ec444b517f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf06e8f195144909c437d563eed6fb6ae28f5d78b72187a62e97f3ec444b517f->enter($__internal_cf06e8f195144909c437d563eed6fb6ae28f5d78b72187a62e97f3ec444b517f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4c7b3d981b86652835558de6aaebc17876c17794bd0730a63df01542181d51b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7b3d981b86652835558de6aaebc17876c17794bd0730a63df01542181d51b5->enter($__internal_4c7b3d981b86652835558de6aaebc17876c17794bd0730a63df01542181d51b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4c7b3d981b86652835558de6aaebc17876c17794bd0730a63df01542181d51b5->leave($__internal_4c7b3d981b86652835558de6aaebc17876c17794bd0730a63df01542181d51b5_prof);

        
        $__internal_cf06e8f195144909c437d563eed6fb6ae28f5d78b72187a62e97f3ec444b517f->leave($__internal_cf06e8f195144909c437d563eed6fb6ae28f5d78b72187a62e97f3ec444b517f_prof);

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
