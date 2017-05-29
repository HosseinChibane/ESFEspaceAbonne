<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d5240f9375656bf9e9ca6ed3bca9a78b76f54ebb9052bc6c653f84bced66baf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_3698ba5a3124960b60aa012bc94d7d2dc1d8749839e197ecae4d1514b4056391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3698ba5a3124960b60aa012bc94d7d2dc1d8749839e197ecae4d1514b4056391->enter($__internal_3698ba5a3124960b60aa012bc94d7d2dc1d8749839e197ecae4d1514b4056391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4d792f58fcbcb39336cb2565a92b623b22cefc2f56a96b5456172bdbb5aff600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d792f58fcbcb39336cb2565a92b623b22cefc2f56a96b5456172bdbb5aff600->enter($__internal_4d792f58fcbcb39336cb2565a92b623b22cefc2f56a96b5456172bdbb5aff600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3698ba5a3124960b60aa012bc94d7d2dc1d8749839e197ecae4d1514b4056391->leave($__internal_3698ba5a3124960b60aa012bc94d7d2dc1d8749839e197ecae4d1514b4056391_prof);

        
        $__internal_4d792f58fcbcb39336cb2565a92b623b22cefc2f56a96b5456172bdbb5aff600->leave($__internal_4d792f58fcbcb39336cb2565a92b623b22cefc2f56a96b5456172bdbb5aff600_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_99282017d3f405d5121faa331709e82117b975d1f4f3dd03e894f296d61ab2b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99282017d3f405d5121faa331709e82117b975d1f4f3dd03e894f296d61ab2b5->enter($__internal_99282017d3f405d5121faa331709e82117b975d1f4f3dd03e894f296d61ab2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_83f1285f69aabb2cdd34af37c11d442593ed71a4719316425866f2875f380031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f1285f69aabb2cdd34af37c11d442593ed71a4719316425866f2875f380031->enter($__internal_83f1285f69aabb2cdd34af37c11d442593ed71a4719316425866f2875f380031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_83f1285f69aabb2cdd34af37c11d442593ed71a4719316425866f2875f380031->leave($__internal_83f1285f69aabb2cdd34af37c11d442593ed71a4719316425866f2875f380031_prof);

        
        $__internal_99282017d3f405d5121faa331709e82117b975d1f4f3dd03e894f296d61ab2b5->leave($__internal_99282017d3f405d5121faa331709e82117b975d1f4f3dd03e894f296d61ab2b5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_42eacdb45f395b8292a67e95a9c8d404875cb2752d1c8087112bd848ab074374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42eacdb45f395b8292a67e95a9c8d404875cb2752d1c8087112bd848ab074374->enter($__internal_42eacdb45f395b8292a67e95a9c8d404875cb2752d1c8087112bd848ab074374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6e452aa916fe99a5cc1cd8b7a3b1725658797c5248d3341f38e0bba1fee5f2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e452aa916fe99a5cc1cd8b7a3b1725658797c5248d3341f38e0bba1fee5f2e9->enter($__internal_6e452aa916fe99a5cc1cd8b7a3b1725658797c5248d3341f38e0bba1fee5f2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6e452aa916fe99a5cc1cd8b7a3b1725658797c5248d3341f38e0bba1fee5f2e9->leave($__internal_6e452aa916fe99a5cc1cd8b7a3b1725658797c5248d3341f38e0bba1fee5f2e9_prof);

        
        $__internal_42eacdb45f395b8292a67e95a9c8d404875cb2752d1c8087112bd848ab074374->leave($__internal_42eacdb45f395b8292a67e95a9c8d404875cb2752d1c8087112bd848ab074374_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5150483805ca3746ae376a80d089e872a6cc6d401314e7cf56de7e05e720df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5150483805ca3746ae376a80d089e872a6cc6d401314e7cf56de7e05e720df7->enter($__internal_c5150483805ca3746ae376a80d089e872a6cc6d401314e7cf56de7e05e720df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_414759689d428becccc2446e99e9a56898218224987331a3a2f2d90818f9e68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414759689d428becccc2446e99e9a56898218224987331a3a2f2d90818f9e68e->enter($__internal_414759689d428becccc2446e99e9a56898218224987331a3a2f2d90818f9e68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_414759689d428becccc2446e99e9a56898218224987331a3a2f2d90818f9e68e->leave($__internal_414759689d428becccc2446e99e9a56898218224987331a3a2f2d90818f9e68e_prof);

        
        $__internal_c5150483805ca3746ae376a80d089e872a6cc6d401314e7cf56de7e05e720df7->leave($__internal_c5150483805ca3746ae376a80d089e872a6cc6d401314e7cf56de7e05e720df7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
