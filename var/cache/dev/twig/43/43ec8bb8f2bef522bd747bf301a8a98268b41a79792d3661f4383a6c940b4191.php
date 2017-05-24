<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_243d93756846eceeb7c6794731b2411c979dbcd7b7c5557fbe33ae090f1e90a5 extends Twig_Template
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
        $__internal_5c06e3765c7c22b5b3443dcfa5f63b028220e363fc8152ffc763ad16df752cb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c06e3765c7c22b5b3443dcfa5f63b028220e363fc8152ffc763ad16df752cb3->enter($__internal_5c06e3765c7c22b5b3443dcfa5f63b028220e363fc8152ffc763ad16df752cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_0797052b9e7295b2f1d64f1ca9333c089198995f72f24051991ef45abfd5d6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0797052b9e7295b2f1d64f1ca9333c089198995f72f24051991ef45abfd5d6d8->enter($__internal_0797052b9e7295b2f1d64f1ca9333c089198995f72f24051991ef45abfd5d6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c06e3765c7c22b5b3443dcfa5f63b028220e363fc8152ffc763ad16df752cb3->leave($__internal_5c06e3765c7c22b5b3443dcfa5f63b028220e363fc8152ffc763ad16df752cb3_prof);

        
        $__internal_0797052b9e7295b2f1d64f1ca9333c089198995f72f24051991ef45abfd5d6d8->leave($__internal_0797052b9e7295b2f1d64f1ca9333c089198995f72f24051991ef45abfd5d6d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_160070610351630e2181fd8d0e14677d7c38a0d609ee65c25975a1ef5e096fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_160070610351630e2181fd8d0e14677d7c38a0d609ee65c25975a1ef5e096fc6->enter($__internal_160070610351630e2181fd8d0e14677d7c38a0d609ee65c25975a1ef5e096fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ac20f15c2bc32e26c94dcd7b0dd0a6b4fc314609d53802f6d8417af9b077355b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac20f15c2bc32e26c94dcd7b0dd0a6b4fc314609d53802f6d8417af9b077355b->enter($__internal_ac20f15c2bc32e26c94dcd7b0dd0a6b4fc314609d53802f6d8417af9b077355b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ac20f15c2bc32e26c94dcd7b0dd0a6b4fc314609d53802f6d8417af9b077355b->leave($__internal_ac20f15c2bc32e26c94dcd7b0dd0a6b4fc314609d53802f6d8417af9b077355b_prof);

        
        $__internal_160070610351630e2181fd8d0e14677d7c38a0d609ee65c25975a1ef5e096fc6->leave($__internal_160070610351630e2181fd8d0e14677d7c38a0d609ee65c25975a1ef5e096fc6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_88df09f29986fc547722fc55d8e38428527b013fc6a9bb88f0f3d6063a6befcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88df09f29986fc547722fc55d8e38428527b013fc6a9bb88f0f3d6063a6befcd->enter($__internal_88df09f29986fc547722fc55d8e38428527b013fc6a9bb88f0f3d6063a6befcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_13ac7562eb55638ddcee216d745e802f252e077cd7f37e0dd860f2005d3cd40e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ac7562eb55638ddcee216d745e802f252e077cd7f37e0dd860f2005d3cd40e->enter($__internal_13ac7562eb55638ddcee216d745e802f252e077cd7f37e0dd860f2005d3cd40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_13ac7562eb55638ddcee216d745e802f252e077cd7f37e0dd860f2005d3cd40e->leave($__internal_13ac7562eb55638ddcee216d745e802f252e077cd7f37e0dd860f2005d3cd40e_prof);

        
        $__internal_88df09f29986fc547722fc55d8e38428527b013fc6a9bb88f0f3d6063a6befcd->leave($__internal_88df09f29986fc547722fc55d8e38428527b013fc6a9bb88f0f3d6063a6befcd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_09665ddb268119432d5d7d4c93048396b307b3612dcd1765110634e24b0fc778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09665ddb268119432d5d7d4c93048396b307b3612dcd1765110634e24b0fc778->enter($__internal_09665ddb268119432d5d7d4c93048396b307b3612dcd1765110634e24b0fc778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2ae7976c18e65d06856a88f2b341cd0c5c864975487dff44649808c5b6d4eb37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae7976c18e65d06856a88f2b341cd0c5c864975487dff44649808c5b6d4eb37->enter($__internal_2ae7976c18e65d06856a88f2b341cd0c5c864975487dff44649808c5b6d4eb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2ae7976c18e65d06856a88f2b341cd0c5c864975487dff44649808c5b6d4eb37->leave($__internal_2ae7976c18e65d06856a88f2b341cd0c5c864975487dff44649808c5b6d4eb37_prof);

        
        $__internal_09665ddb268119432d5d7d4c93048396b307b3612dcd1765110634e24b0fc778->leave($__internal_09665ddb268119432d5d7d4c93048396b307b3612dcd1765110634e24b0fc778_prof);

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
