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
        $__internal_6c6e31b4099cca7b0f11d61695fddc7c9ecf60b46681cb1159d542bec53e7451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c6e31b4099cca7b0f11d61695fddc7c9ecf60b46681cb1159d542bec53e7451->enter($__internal_6c6e31b4099cca7b0f11d61695fddc7c9ecf60b46681cb1159d542bec53e7451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_77eef98d99b4b040a253b7ab096271d5cdded64e50f57c6747895d8ca49e39d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77eef98d99b4b040a253b7ab096271d5cdded64e50f57c6747895d8ca49e39d3->enter($__internal_77eef98d99b4b040a253b7ab096271d5cdded64e50f57c6747895d8ca49e39d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c6e31b4099cca7b0f11d61695fddc7c9ecf60b46681cb1159d542bec53e7451->leave($__internal_6c6e31b4099cca7b0f11d61695fddc7c9ecf60b46681cb1159d542bec53e7451_prof);

        
        $__internal_77eef98d99b4b040a253b7ab096271d5cdded64e50f57c6747895d8ca49e39d3->leave($__internal_77eef98d99b4b040a253b7ab096271d5cdded64e50f57c6747895d8ca49e39d3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2f10e6f64048fbc121fd67cc16ef8b0a4c363d1ed90a7fa21650511af5136a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f10e6f64048fbc121fd67cc16ef8b0a4c363d1ed90a7fa21650511af5136a89->enter($__internal_2f10e6f64048fbc121fd67cc16ef8b0a4c363d1ed90a7fa21650511af5136a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_83613a0cc8afdf31a01afa634ca46706880d250971b1285c6abb83ee8f563af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83613a0cc8afdf31a01afa634ca46706880d250971b1285c6abb83ee8f563af9->enter($__internal_83613a0cc8afdf31a01afa634ca46706880d250971b1285c6abb83ee8f563af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_83613a0cc8afdf31a01afa634ca46706880d250971b1285c6abb83ee8f563af9->leave($__internal_83613a0cc8afdf31a01afa634ca46706880d250971b1285c6abb83ee8f563af9_prof);

        
        $__internal_2f10e6f64048fbc121fd67cc16ef8b0a4c363d1ed90a7fa21650511af5136a89->leave($__internal_2f10e6f64048fbc121fd67cc16ef8b0a4c363d1ed90a7fa21650511af5136a89_prof);

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
