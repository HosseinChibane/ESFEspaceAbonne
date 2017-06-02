<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_40c72d47af16f52911b4ccde8be14f47e84730b7f8dc904856d61621e152b554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_43c8c06cd2cf95c933d56ad3d25936b877a452ba6f5caef351c2e78d0eeced09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c8c06cd2cf95c933d56ad3d25936b877a452ba6f5caef351c2e78d0eeced09->enter($__internal_43c8c06cd2cf95c933d56ad3d25936b877a452ba6f5caef351c2e78d0eeced09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3e6be7cac440d509ffd954c962c47728236289cd6172861b763e203e7fa174ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6be7cac440d509ffd954c962c47728236289cd6172861b763e203e7fa174ad->enter($__internal_3e6be7cac440d509ffd954c962c47728236289cd6172861b763e203e7fa174ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43c8c06cd2cf95c933d56ad3d25936b877a452ba6f5caef351c2e78d0eeced09->leave($__internal_43c8c06cd2cf95c933d56ad3d25936b877a452ba6f5caef351c2e78d0eeced09_prof);

        
        $__internal_3e6be7cac440d509ffd954c962c47728236289cd6172861b763e203e7fa174ad->leave($__internal_3e6be7cac440d509ffd954c962c47728236289cd6172861b763e203e7fa174ad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e63c0bb4d9152ebd1c229d9614600e21287b7ecc17d5896701029dd390fe3122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63c0bb4d9152ebd1c229d9614600e21287b7ecc17d5896701029dd390fe3122->enter($__internal_e63c0bb4d9152ebd1c229d9614600e21287b7ecc17d5896701029dd390fe3122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b1c4856d2536e63b301953a48d6eef2ff476dd8f412049db3334380d31a578d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c4856d2536e63b301953a48d6eef2ff476dd8f412049db3334380d31a578d3->enter($__internal_b1c4856d2536e63b301953a48d6eef2ff476dd8f412049db3334380d31a578d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b1c4856d2536e63b301953a48d6eef2ff476dd8f412049db3334380d31a578d3->leave($__internal_b1c4856d2536e63b301953a48d6eef2ff476dd8f412049db3334380d31a578d3_prof);

        
        $__internal_e63c0bb4d9152ebd1c229d9614600e21287b7ecc17d5896701029dd390fe3122->leave($__internal_e63c0bb4d9152ebd1c229d9614600e21287b7ecc17d5896701029dd390fe3122_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6996abcd4be8340ae2947c0d3a4ee73da47a4475ab7fbddcbf79824f68b85741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6996abcd4be8340ae2947c0d3a4ee73da47a4475ab7fbddcbf79824f68b85741->enter($__internal_6996abcd4be8340ae2947c0d3a4ee73da47a4475ab7fbddcbf79824f68b85741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bd9dcbd3509a76e34f991b21af5534d8c5dd2ac8ca0c14e351374b5fdace4048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9dcbd3509a76e34f991b21af5534d8c5dd2ac8ca0c14e351374b5fdace4048->enter($__internal_bd9dcbd3509a76e34f991b21af5534d8c5dd2ac8ca0c14e351374b5fdace4048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bd9dcbd3509a76e34f991b21af5534d8c5dd2ac8ca0c14e351374b5fdace4048->leave($__internal_bd9dcbd3509a76e34f991b21af5534d8c5dd2ac8ca0c14e351374b5fdace4048_prof);

        
        $__internal_6996abcd4be8340ae2947c0d3a4ee73da47a4475ab7fbddcbf79824f68b85741->leave($__internal_6996abcd4be8340ae2947c0d3a4ee73da47a4475ab7fbddcbf79824f68b85741_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c64684fb9bf66fc612fe3db4911e1d7b5d1fcae5a2c5fcab056a696c1222fd3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c64684fb9bf66fc612fe3db4911e1d7b5d1fcae5a2c5fcab056a696c1222fd3a->enter($__internal_c64684fb9bf66fc612fe3db4911e1d7b5d1fcae5a2c5fcab056a696c1222fd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_269c647dd2195b8ef539a809e62c48e95caab99eda40980e2d78c414c8b6323d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269c647dd2195b8ef539a809e62c48e95caab99eda40980e2d78c414c8b6323d->enter($__internal_269c647dd2195b8ef539a809e62c48e95caab99eda40980e2d78c414c8b6323d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_269c647dd2195b8ef539a809e62c48e95caab99eda40980e2d78c414c8b6323d->leave($__internal_269c647dd2195b8ef539a809e62c48e95caab99eda40980e2d78c414c8b6323d_prof);

        
        $__internal_c64684fb9bf66fc612fe3db4911e1d7b5d1fcae5a2c5fcab056a696c1222fd3a->leave($__internal_c64684fb9bf66fc612fe3db4911e1d7b5d1fcae5a2c5fcab056a696c1222fd3a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
