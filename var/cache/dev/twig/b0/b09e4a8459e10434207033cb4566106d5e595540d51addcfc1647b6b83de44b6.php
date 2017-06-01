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
        $__internal_7ad9143ad04b3ae0b5ec8ec644cc1fe88e32002311e910233599b16c31b9dc90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ad9143ad04b3ae0b5ec8ec644cc1fe88e32002311e910233599b16c31b9dc90->enter($__internal_7ad9143ad04b3ae0b5ec8ec644cc1fe88e32002311e910233599b16c31b9dc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_cf7e11f5a944ed117a0afddb39b511ae3e73991e8a883c47ec863f730af165ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7e11f5a944ed117a0afddb39b511ae3e73991e8a883c47ec863f730af165ec->enter($__internal_cf7e11f5a944ed117a0afddb39b511ae3e73991e8a883c47ec863f730af165ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ad9143ad04b3ae0b5ec8ec644cc1fe88e32002311e910233599b16c31b9dc90->leave($__internal_7ad9143ad04b3ae0b5ec8ec644cc1fe88e32002311e910233599b16c31b9dc90_prof);

        
        $__internal_cf7e11f5a944ed117a0afddb39b511ae3e73991e8a883c47ec863f730af165ec->leave($__internal_cf7e11f5a944ed117a0afddb39b511ae3e73991e8a883c47ec863f730af165ec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_23b53a3b86000194fe00997913a183937241f50f0c8f4686394591cf37520c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23b53a3b86000194fe00997913a183937241f50f0c8f4686394591cf37520c7f->enter($__internal_23b53a3b86000194fe00997913a183937241f50f0c8f4686394591cf37520c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2f77aa1aa9e76519cf5f644915d3ddbaa820adcabe9066cb188573812163973d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f77aa1aa9e76519cf5f644915d3ddbaa820adcabe9066cb188573812163973d->enter($__internal_2f77aa1aa9e76519cf5f644915d3ddbaa820adcabe9066cb188573812163973d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2f77aa1aa9e76519cf5f644915d3ddbaa820adcabe9066cb188573812163973d->leave($__internal_2f77aa1aa9e76519cf5f644915d3ddbaa820adcabe9066cb188573812163973d_prof);

        
        $__internal_23b53a3b86000194fe00997913a183937241f50f0c8f4686394591cf37520c7f->leave($__internal_23b53a3b86000194fe00997913a183937241f50f0c8f4686394591cf37520c7f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc117bc0ad64f1acd2a96d0fa2747dc1bf00f3d4704bb7d09715c10d2cbd54f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc117bc0ad64f1acd2a96d0fa2747dc1bf00f3d4704bb7d09715c10d2cbd54f6->enter($__internal_cc117bc0ad64f1acd2a96d0fa2747dc1bf00f3d4704bb7d09715c10d2cbd54f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_777ca5a00999b6ed17b8bc5746670e8dbb8ad53f67ea293006536536372eb6cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777ca5a00999b6ed17b8bc5746670e8dbb8ad53f67ea293006536536372eb6cc->enter($__internal_777ca5a00999b6ed17b8bc5746670e8dbb8ad53f67ea293006536536372eb6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_777ca5a00999b6ed17b8bc5746670e8dbb8ad53f67ea293006536536372eb6cc->leave($__internal_777ca5a00999b6ed17b8bc5746670e8dbb8ad53f67ea293006536536372eb6cc_prof);

        
        $__internal_cc117bc0ad64f1acd2a96d0fa2747dc1bf00f3d4704bb7d09715c10d2cbd54f6->leave($__internal_cc117bc0ad64f1acd2a96d0fa2747dc1bf00f3d4704bb7d09715c10d2cbd54f6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_780076ee3db5fe14f93e950804f95c8d3639360626997d6a823fe71a0731724a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_780076ee3db5fe14f93e950804f95c8d3639360626997d6a823fe71a0731724a->enter($__internal_780076ee3db5fe14f93e950804f95c8d3639360626997d6a823fe71a0731724a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_18bc872e937ce101b3307755616005bfbf28c4dd63ca3b4f9a885295c9ff0227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18bc872e937ce101b3307755616005bfbf28c4dd63ca3b4f9a885295c9ff0227->enter($__internal_18bc872e937ce101b3307755616005bfbf28c4dd63ca3b4f9a885295c9ff0227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_18bc872e937ce101b3307755616005bfbf28c4dd63ca3b4f9a885295c9ff0227->leave($__internal_18bc872e937ce101b3307755616005bfbf28c4dd63ca3b4f9a885295c9ff0227_prof);

        
        $__internal_780076ee3db5fe14f93e950804f95c8d3639360626997d6a823fe71a0731724a->leave($__internal_780076ee3db5fe14f93e950804f95c8d3639360626997d6a823fe71a0731724a_prof);

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
