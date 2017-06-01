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
        $__internal_6eceffdc615616a3bbfc966308db88e2bf55fb50c730ff347cce48182bf14e36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eceffdc615616a3bbfc966308db88e2bf55fb50c730ff347cce48182bf14e36->enter($__internal_6eceffdc615616a3bbfc966308db88e2bf55fb50c730ff347cce48182bf14e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7fb652691872726f3e86f65e1f6ee4f7f30d03eeb36b70d3ac7d6d03dc4b569b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb652691872726f3e86f65e1f6ee4f7f30d03eeb36b70d3ac7d6d03dc4b569b->enter($__internal_7fb652691872726f3e86f65e1f6ee4f7f30d03eeb36b70d3ac7d6d03dc4b569b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eceffdc615616a3bbfc966308db88e2bf55fb50c730ff347cce48182bf14e36->leave($__internal_6eceffdc615616a3bbfc966308db88e2bf55fb50c730ff347cce48182bf14e36_prof);

        
        $__internal_7fb652691872726f3e86f65e1f6ee4f7f30d03eeb36b70d3ac7d6d03dc4b569b->leave($__internal_7fb652691872726f3e86f65e1f6ee4f7f30d03eeb36b70d3ac7d6d03dc4b569b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e116de18069575461590a5eacb075ee7bcf2e2efa661a9d317b8703b7d6bfa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e116de18069575461590a5eacb075ee7bcf2e2efa661a9d317b8703b7d6bfa3->enter($__internal_3e116de18069575461590a5eacb075ee7bcf2e2efa661a9d317b8703b7d6bfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_09821d0703a964e333e9873b6ab3d397907832bf1a66e2b664e03db70fd9f011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09821d0703a964e333e9873b6ab3d397907832bf1a66e2b664e03db70fd9f011->enter($__internal_09821d0703a964e333e9873b6ab3d397907832bf1a66e2b664e03db70fd9f011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_09821d0703a964e333e9873b6ab3d397907832bf1a66e2b664e03db70fd9f011->leave($__internal_09821d0703a964e333e9873b6ab3d397907832bf1a66e2b664e03db70fd9f011_prof);

        
        $__internal_3e116de18069575461590a5eacb075ee7bcf2e2efa661a9d317b8703b7d6bfa3->leave($__internal_3e116de18069575461590a5eacb075ee7bcf2e2efa661a9d317b8703b7d6bfa3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_97c8681a91799aa60c908d4456a00a96abc997c2b3e8f4b7d6eaa95de58af6c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c8681a91799aa60c908d4456a00a96abc997c2b3e8f4b7d6eaa95de58af6c5->enter($__internal_97c8681a91799aa60c908d4456a00a96abc997c2b3e8f4b7d6eaa95de58af6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_df2090d39bd20afb58a1dc1256cc61d42c4e8056d5855c231ab340ff42890acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2090d39bd20afb58a1dc1256cc61d42c4e8056d5855c231ab340ff42890acc->enter($__internal_df2090d39bd20afb58a1dc1256cc61d42c4e8056d5855c231ab340ff42890acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_df2090d39bd20afb58a1dc1256cc61d42c4e8056d5855c231ab340ff42890acc->leave($__internal_df2090d39bd20afb58a1dc1256cc61d42c4e8056d5855c231ab340ff42890acc_prof);

        
        $__internal_97c8681a91799aa60c908d4456a00a96abc997c2b3e8f4b7d6eaa95de58af6c5->leave($__internal_97c8681a91799aa60c908d4456a00a96abc997c2b3e8f4b7d6eaa95de58af6c5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_48e270a7aecd386d76212ac5018715df8897eb3a58900f8c3481bd111146134e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e270a7aecd386d76212ac5018715df8897eb3a58900f8c3481bd111146134e->enter($__internal_48e270a7aecd386d76212ac5018715df8897eb3a58900f8c3481bd111146134e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_316b9cf3443af4e59120666dfa727a9d0dffdf862f8182f5540962c0d70afca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316b9cf3443af4e59120666dfa727a9d0dffdf862f8182f5540962c0d70afca2->enter($__internal_316b9cf3443af4e59120666dfa727a9d0dffdf862f8182f5540962c0d70afca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_316b9cf3443af4e59120666dfa727a9d0dffdf862f8182f5540962c0d70afca2->leave($__internal_316b9cf3443af4e59120666dfa727a9d0dffdf862f8182f5540962c0d70afca2_prof);

        
        $__internal_48e270a7aecd386d76212ac5018715df8897eb3a58900f8c3481bd111146134e->leave($__internal_48e270a7aecd386d76212ac5018715df8897eb3a58900f8c3481bd111146134e_prof);

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
