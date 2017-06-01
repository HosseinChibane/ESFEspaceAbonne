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
        $__internal_142db4f35567acaacc9cc94d502ad508d9d4137346efb628308315049caa69db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_142db4f35567acaacc9cc94d502ad508d9d4137346efb628308315049caa69db->enter($__internal_142db4f35567acaacc9cc94d502ad508d9d4137346efb628308315049caa69db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d6432df2cad2d6057bc4ea4d87b762f56340d99c98d1afd8dbee471ef3c36f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6432df2cad2d6057bc4ea4d87b762f56340d99c98d1afd8dbee471ef3c36f77->enter($__internal_d6432df2cad2d6057bc4ea4d87b762f56340d99c98d1afd8dbee471ef3c36f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_142db4f35567acaacc9cc94d502ad508d9d4137346efb628308315049caa69db->leave($__internal_142db4f35567acaacc9cc94d502ad508d9d4137346efb628308315049caa69db_prof);

        
        $__internal_d6432df2cad2d6057bc4ea4d87b762f56340d99c98d1afd8dbee471ef3c36f77->leave($__internal_d6432df2cad2d6057bc4ea4d87b762f56340d99c98d1afd8dbee471ef3c36f77_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d57054bd2df936080cadf145369b1bd5b16491ffc9d62ceabdaeaa411ee56c91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d57054bd2df936080cadf145369b1bd5b16491ffc9d62ceabdaeaa411ee56c91->enter($__internal_d57054bd2df936080cadf145369b1bd5b16491ffc9d62ceabdaeaa411ee56c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_256f82690a5629772edad99233d780374bf188f93c40448424f7cc8be967031e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256f82690a5629772edad99233d780374bf188f93c40448424f7cc8be967031e->enter($__internal_256f82690a5629772edad99233d780374bf188f93c40448424f7cc8be967031e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_256f82690a5629772edad99233d780374bf188f93c40448424f7cc8be967031e->leave($__internal_256f82690a5629772edad99233d780374bf188f93c40448424f7cc8be967031e_prof);

        
        $__internal_d57054bd2df936080cadf145369b1bd5b16491ffc9d62ceabdaeaa411ee56c91->leave($__internal_d57054bd2df936080cadf145369b1bd5b16491ffc9d62ceabdaeaa411ee56c91_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f98b2c13c12d1528dfcaa9eaf40ec60752b73acbc4296a6bd92b82370bab55f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f98b2c13c12d1528dfcaa9eaf40ec60752b73acbc4296a6bd92b82370bab55f8->enter($__internal_f98b2c13c12d1528dfcaa9eaf40ec60752b73acbc4296a6bd92b82370bab55f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_60bf0818ca7ede501a2da92c5080fe6bcc788506126f49e866892098d94d8dd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60bf0818ca7ede501a2da92c5080fe6bcc788506126f49e866892098d94d8dd3->enter($__internal_60bf0818ca7ede501a2da92c5080fe6bcc788506126f49e866892098d94d8dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_60bf0818ca7ede501a2da92c5080fe6bcc788506126f49e866892098d94d8dd3->leave($__internal_60bf0818ca7ede501a2da92c5080fe6bcc788506126f49e866892098d94d8dd3_prof);

        
        $__internal_f98b2c13c12d1528dfcaa9eaf40ec60752b73acbc4296a6bd92b82370bab55f8->leave($__internal_f98b2c13c12d1528dfcaa9eaf40ec60752b73acbc4296a6bd92b82370bab55f8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6fa80b996da3f9f6e65b60835aee782db787fe30bf1bf845b80a2cc8665cb18f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa80b996da3f9f6e65b60835aee782db787fe30bf1bf845b80a2cc8665cb18f->enter($__internal_6fa80b996da3f9f6e65b60835aee782db787fe30bf1bf845b80a2cc8665cb18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_063974a262b38050657d7b6c75382716aee8d0096689382dc3293f2d142b4809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063974a262b38050657d7b6c75382716aee8d0096689382dc3293f2d142b4809->enter($__internal_063974a262b38050657d7b6c75382716aee8d0096689382dc3293f2d142b4809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_063974a262b38050657d7b6c75382716aee8d0096689382dc3293f2d142b4809->leave($__internal_063974a262b38050657d7b6c75382716aee8d0096689382dc3293f2d142b4809_prof);

        
        $__internal_6fa80b996da3f9f6e65b60835aee782db787fe30bf1bf845b80a2cc8665cb18f->leave($__internal_6fa80b996da3f9f6e65b60835aee782db787fe30bf1bf845b80a2cc8665cb18f_prof);

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
