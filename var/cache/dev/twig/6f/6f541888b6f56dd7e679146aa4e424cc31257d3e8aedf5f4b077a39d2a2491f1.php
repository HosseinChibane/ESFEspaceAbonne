<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_beaca1450c6824c46446eab76574e33e822d5002182834c71365834254514172 extends Twig_Template
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
        $__internal_a5255b1f1e38a025bdc5569e7bd8e9dbd3f48ae110f0160831a0497bcb7c5921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5255b1f1e38a025bdc5569e7bd8e9dbd3f48ae110f0160831a0497bcb7c5921->enter($__internal_a5255b1f1e38a025bdc5569e7bd8e9dbd3f48ae110f0160831a0497bcb7c5921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0ee21c8b7624533f77b2ce1c52fd8299640f8cd3b7c3952a502d886b1970b5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee21c8b7624533f77b2ce1c52fd8299640f8cd3b7c3952a502d886b1970b5f5->enter($__internal_0ee21c8b7624533f77b2ce1c52fd8299640f8cd3b7c3952a502d886b1970b5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5255b1f1e38a025bdc5569e7bd8e9dbd3f48ae110f0160831a0497bcb7c5921->leave($__internal_a5255b1f1e38a025bdc5569e7bd8e9dbd3f48ae110f0160831a0497bcb7c5921_prof);

        
        $__internal_0ee21c8b7624533f77b2ce1c52fd8299640f8cd3b7c3952a502d886b1970b5f5->leave($__internal_0ee21c8b7624533f77b2ce1c52fd8299640f8cd3b7c3952a502d886b1970b5f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_59a6c49f173d6de2c61283d63821b24c199d1cb00d6aab7aa57a7940ce705570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a6c49f173d6de2c61283d63821b24c199d1cb00d6aab7aa57a7940ce705570->enter($__internal_59a6c49f173d6de2c61283d63821b24c199d1cb00d6aab7aa57a7940ce705570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_82f98724b9f0784d22ef4c0cb889efcff1ec5e72a7b74a9d411927053bd830c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f98724b9f0784d22ef4c0cb889efcff1ec5e72a7b74a9d411927053bd830c9->enter($__internal_82f98724b9f0784d22ef4c0cb889efcff1ec5e72a7b74a9d411927053bd830c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_82f98724b9f0784d22ef4c0cb889efcff1ec5e72a7b74a9d411927053bd830c9->leave($__internal_82f98724b9f0784d22ef4c0cb889efcff1ec5e72a7b74a9d411927053bd830c9_prof);

        
        $__internal_59a6c49f173d6de2c61283d63821b24c199d1cb00d6aab7aa57a7940ce705570->leave($__internal_59a6c49f173d6de2c61283d63821b24c199d1cb00d6aab7aa57a7940ce705570_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_da51aaf748d2656a07bb4e94060ed47a4ee152e51783a42915ad8dfd829d7606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da51aaf748d2656a07bb4e94060ed47a4ee152e51783a42915ad8dfd829d7606->enter($__internal_da51aaf748d2656a07bb4e94060ed47a4ee152e51783a42915ad8dfd829d7606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bb0fa676f8c6eecbf1860c75dc5056a621218298221486e1a5bfef0a41b41186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0fa676f8c6eecbf1860c75dc5056a621218298221486e1a5bfef0a41b41186->enter($__internal_bb0fa676f8c6eecbf1860c75dc5056a621218298221486e1a5bfef0a41b41186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_bb0fa676f8c6eecbf1860c75dc5056a621218298221486e1a5bfef0a41b41186->leave($__internal_bb0fa676f8c6eecbf1860c75dc5056a621218298221486e1a5bfef0a41b41186_prof);

        
        $__internal_da51aaf748d2656a07bb4e94060ed47a4ee152e51783a42915ad8dfd829d7606->leave($__internal_da51aaf748d2656a07bb4e94060ed47a4ee152e51783a42915ad8dfd829d7606_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_29490fcd691dfccb69089b3bb24326fd68e58a59a6f05506ede9709c1782f9bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29490fcd691dfccb69089b3bb24326fd68e58a59a6f05506ede9709c1782f9bd->enter($__internal_29490fcd691dfccb69089b3bb24326fd68e58a59a6f05506ede9709c1782f9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cce76e76134c74f0ca392f03f68b4e6de0a984e902445b199730c9fefe4ad5d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce76e76134c74f0ca392f03f68b4e6de0a984e902445b199730c9fefe4ad5d3->enter($__internal_cce76e76134c74f0ca392f03f68b4e6de0a984e902445b199730c9fefe4ad5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_cce76e76134c74f0ca392f03f68b4e6de0a984e902445b199730c9fefe4ad5d3->leave($__internal_cce76e76134c74f0ca392f03f68b4e6de0a984e902445b199730c9fefe4ad5d3_prof);

        
        $__internal_29490fcd691dfccb69089b3bb24326fd68e58a59a6f05506ede9709c1782f9bd->leave($__internal_29490fcd691dfccb69089b3bb24326fd68e58a59a6f05506ede9709c1782f9bd_prof);

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