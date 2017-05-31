<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a243cba5a67ae754c89b566d046e9119099d4884437feadf4eb00c213af98e86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0dcfcef80d5b31eff1590b7050d267ea931e04ab8bbcdb935402625022df56c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0dcfcef80d5b31eff1590b7050d267ea931e04ab8bbcdb935402625022df56c->enter($__internal_d0dcfcef80d5b31eff1590b7050d267ea931e04ab8bbcdb935402625022df56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_589fe80bc548f99cc6dc6d133a00000afec3d9d008cc9e5649fef8d73bcbfabc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589fe80bc548f99cc6dc6d133a00000afec3d9d008cc9e5649fef8d73bcbfabc->enter($__internal_589fe80bc548f99cc6dc6d133a00000afec3d9d008cc9e5649fef8d73bcbfabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0dcfcef80d5b31eff1590b7050d267ea931e04ab8bbcdb935402625022df56c->leave($__internal_d0dcfcef80d5b31eff1590b7050d267ea931e04ab8bbcdb935402625022df56c_prof);

        
        $__internal_589fe80bc548f99cc6dc6d133a00000afec3d9d008cc9e5649fef8d73bcbfabc->leave($__internal_589fe80bc548f99cc6dc6d133a00000afec3d9d008cc9e5649fef8d73bcbfabc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_85c5e435d1ba50628db3facf3168e55a26ddf90915ad9e11cdeb1e2566bf767a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c5e435d1ba50628db3facf3168e55a26ddf90915ad9e11cdeb1e2566bf767a->enter($__internal_85c5e435d1ba50628db3facf3168e55a26ddf90915ad9e11cdeb1e2566bf767a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a00fea23185ffe3f7672f623c432c9deb6d8a348c46413e2e44f897a85fe44d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00fea23185ffe3f7672f623c432c9deb6d8a348c46413e2e44f897a85fe44d3->enter($__internal_a00fea23185ffe3f7672f623c432c9deb6d8a348c46413e2e44f897a85fe44d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a00fea23185ffe3f7672f623c432c9deb6d8a348c46413e2e44f897a85fe44d3->leave($__internal_a00fea23185ffe3f7672f623c432c9deb6d8a348c46413e2e44f897a85fe44d3_prof);

        
        $__internal_85c5e435d1ba50628db3facf3168e55a26ddf90915ad9e11cdeb1e2566bf767a->leave($__internal_85c5e435d1ba50628db3facf3168e55a26ddf90915ad9e11cdeb1e2566bf767a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
