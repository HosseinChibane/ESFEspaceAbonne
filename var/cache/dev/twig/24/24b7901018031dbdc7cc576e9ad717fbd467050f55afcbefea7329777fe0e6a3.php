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
        $__internal_8289851520466607394db62f3b0a5f25539eb22ea221c743ef4c6b64085bf48f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8289851520466607394db62f3b0a5f25539eb22ea221c743ef4c6b64085bf48f->enter($__internal_8289851520466607394db62f3b0a5f25539eb22ea221c743ef4c6b64085bf48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_465406810e58e2609a1c4a38d6f2a2eeec6c1de9d78322228e5df29dde76d613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465406810e58e2609a1c4a38d6f2a2eeec6c1de9d78322228e5df29dde76d613->enter($__internal_465406810e58e2609a1c4a38d6f2a2eeec6c1de9d78322228e5df29dde76d613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8289851520466607394db62f3b0a5f25539eb22ea221c743ef4c6b64085bf48f->leave($__internal_8289851520466607394db62f3b0a5f25539eb22ea221c743ef4c6b64085bf48f_prof);

        
        $__internal_465406810e58e2609a1c4a38d6f2a2eeec6c1de9d78322228e5df29dde76d613->leave($__internal_465406810e58e2609a1c4a38d6f2a2eeec6c1de9d78322228e5df29dde76d613_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed9ce858dcf6c2f69773161b7555e6b7bbb972001b64f756e5b4b1a9764fb678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9ce858dcf6c2f69773161b7555e6b7bbb972001b64f756e5b4b1a9764fb678->enter($__internal_ed9ce858dcf6c2f69773161b7555e6b7bbb972001b64f756e5b4b1a9764fb678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e077228c3de5c257cf219eaf6a70d5ce8d23ad26c7cfe9ee6a095c250bc6b9ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e077228c3de5c257cf219eaf6a70d5ce8d23ad26c7cfe9ee6a095c250bc6b9ce->enter($__internal_e077228c3de5c257cf219eaf6a70d5ce8d23ad26c7cfe9ee6a095c250bc6b9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e077228c3de5c257cf219eaf6a70d5ce8d23ad26c7cfe9ee6a095c250bc6b9ce->leave($__internal_e077228c3de5c257cf219eaf6a70d5ce8d23ad26c7cfe9ee6a095c250bc6b9ce_prof);

        
        $__internal_ed9ce858dcf6c2f69773161b7555e6b7bbb972001b64f756e5b4b1a9764fb678->leave($__internal_ed9ce858dcf6c2f69773161b7555e6b7bbb972001b64f756e5b4b1a9764fb678_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a3e6ec13224529fbb67656aa722e6d9bd25b25ba743ff471cc0f6f5c6422d249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e6ec13224529fbb67656aa722e6d9bd25b25ba743ff471cc0f6f5c6422d249->enter($__internal_a3e6ec13224529fbb67656aa722e6d9bd25b25ba743ff471cc0f6f5c6422d249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f767f8868c53a3c53d2700c77430cf77d5490364f7cae4f14e948c5544b6bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f767f8868c53a3c53d2700c77430cf77d5490364f7cae4f14e948c5544b6bfd->enter($__internal_6f767f8868c53a3c53d2700c77430cf77d5490364f7cae4f14e948c5544b6bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6f767f8868c53a3c53d2700c77430cf77d5490364f7cae4f14e948c5544b6bfd->leave($__internal_6f767f8868c53a3c53d2700c77430cf77d5490364f7cae4f14e948c5544b6bfd_prof);

        
        $__internal_a3e6ec13224529fbb67656aa722e6d9bd25b25ba743ff471cc0f6f5c6422d249->leave($__internal_a3e6ec13224529fbb67656aa722e6d9bd25b25ba743ff471cc0f6f5c6422d249_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_809240763a715377ccf2e5808e40425c4ab7accf4b2dca83d5b936462499ebda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809240763a715377ccf2e5808e40425c4ab7accf4b2dca83d5b936462499ebda->enter($__internal_809240763a715377ccf2e5808e40425c4ab7accf4b2dca83d5b936462499ebda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c0016a5a4255cbc38c8985360e4536e1d748378a3973a4791ddafaf24cd7ae2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0016a5a4255cbc38c8985360e4536e1d748378a3973a4791ddafaf24cd7ae2e->enter($__internal_c0016a5a4255cbc38c8985360e4536e1d748378a3973a4791ddafaf24cd7ae2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c0016a5a4255cbc38c8985360e4536e1d748378a3973a4791ddafaf24cd7ae2e->leave($__internal_c0016a5a4255cbc38c8985360e4536e1d748378a3973a4791ddafaf24cd7ae2e_prof);

        
        $__internal_809240763a715377ccf2e5808e40425c4ab7accf4b2dca83d5b936462499ebda->leave($__internal_809240763a715377ccf2e5808e40425c4ab7accf4b2dca83d5b936462499ebda_prof);

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
