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
        $__internal_7e7a2183f3852881849ee8f9ae6e4856bb28df1a207e34ed3223de369b58bced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e7a2183f3852881849ee8f9ae6e4856bb28df1a207e34ed3223de369b58bced->enter($__internal_7e7a2183f3852881849ee8f9ae6e4856bb28df1a207e34ed3223de369b58bced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_d3e55dddafed52b8e49a98d1a9c98858125c59164910fdb3afd240a258532b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e55dddafed52b8e49a98d1a9c98858125c59164910fdb3afd240a258532b9f->enter($__internal_d3e55dddafed52b8e49a98d1a9c98858125c59164910fdb3afd240a258532b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e7a2183f3852881849ee8f9ae6e4856bb28df1a207e34ed3223de369b58bced->leave($__internal_7e7a2183f3852881849ee8f9ae6e4856bb28df1a207e34ed3223de369b58bced_prof);

        
        $__internal_d3e55dddafed52b8e49a98d1a9c98858125c59164910fdb3afd240a258532b9f->leave($__internal_d3e55dddafed52b8e49a98d1a9c98858125c59164910fdb3afd240a258532b9f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fafda11db4442542c99f48c8128babdd4615a198a0f4a0957a919ef1a1b4b144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fafda11db4442542c99f48c8128babdd4615a198a0f4a0957a919ef1a1b4b144->enter($__internal_fafda11db4442542c99f48c8128babdd4615a198a0f4a0957a919ef1a1b4b144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2c0693aca8671758cd5045948771031ab169f10d7c8d914b908f357f9461cbde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0693aca8671758cd5045948771031ab169f10d7c8d914b908f357f9461cbde->enter($__internal_2c0693aca8671758cd5045948771031ab169f10d7c8d914b908f357f9461cbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2c0693aca8671758cd5045948771031ab169f10d7c8d914b908f357f9461cbde->leave($__internal_2c0693aca8671758cd5045948771031ab169f10d7c8d914b908f357f9461cbde_prof);

        
        $__internal_fafda11db4442542c99f48c8128babdd4615a198a0f4a0957a919ef1a1b4b144->leave($__internal_fafda11db4442542c99f48c8128babdd4615a198a0f4a0957a919ef1a1b4b144_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f1768ec802c28a9c645a8b4b401434f5735d048d60c91c7ab59356f44393064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f1768ec802c28a9c645a8b4b401434f5735d048d60c91c7ab59356f44393064->enter($__internal_6f1768ec802c28a9c645a8b4b401434f5735d048d60c91c7ab59356f44393064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a73ec908d1aeeb8e01fe34e6cdc0944667b8481447e50329db4a07f102b8c592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73ec908d1aeeb8e01fe34e6cdc0944667b8481447e50329db4a07f102b8c592->enter($__internal_a73ec908d1aeeb8e01fe34e6cdc0944667b8481447e50329db4a07f102b8c592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a73ec908d1aeeb8e01fe34e6cdc0944667b8481447e50329db4a07f102b8c592->leave($__internal_a73ec908d1aeeb8e01fe34e6cdc0944667b8481447e50329db4a07f102b8c592_prof);

        
        $__internal_6f1768ec802c28a9c645a8b4b401434f5735d048d60c91c7ab59356f44393064->leave($__internal_6f1768ec802c28a9c645a8b4b401434f5735d048d60c91c7ab59356f44393064_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5499abff6c326fa806b36cbacc1a9bc31c29e79557113031e13eec4802c8f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5499abff6c326fa806b36cbacc1a9bc31c29e79557113031e13eec4802c8f44->enter($__internal_e5499abff6c326fa806b36cbacc1a9bc31c29e79557113031e13eec4802c8f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_80d4603390f2d4d2a6f7ecb99bae5426d4c543e91bed981b7ff25fdd10951fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d4603390f2d4d2a6f7ecb99bae5426d4c543e91bed981b7ff25fdd10951fac->enter($__internal_80d4603390f2d4d2a6f7ecb99bae5426d4c543e91bed981b7ff25fdd10951fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_80d4603390f2d4d2a6f7ecb99bae5426d4c543e91bed981b7ff25fdd10951fac->leave($__internal_80d4603390f2d4d2a6f7ecb99bae5426d4c543e91bed981b7ff25fdd10951fac_prof);

        
        $__internal_e5499abff6c326fa806b36cbacc1a9bc31c29e79557113031e13eec4802c8f44->leave($__internal_e5499abff6c326fa806b36cbacc1a9bc31c29e79557113031e13eec4802c8f44_prof);

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
