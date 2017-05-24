<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_20abbf48bb97687bd5c431cbfb3f7fce1f082845ccc91b3aa86359c6980d59a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_36a3204cf7c3bfc44abdacaee454ae8bcab99ddb62a1a4f121e3dd7bbbbcb75b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36a3204cf7c3bfc44abdacaee454ae8bcab99ddb62a1a4f121e3dd7bbbbcb75b->enter($__internal_36a3204cf7c3bfc44abdacaee454ae8bcab99ddb62a1a4f121e3dd7bbbbcb75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_1c2a43f6b45a4a9eebd03924ead1995406487e4fe725f6a854af43c39caafaa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2a43f6b45a4a9eebd03924ead1995406487e4fe725f6a854af43c39caafaa4->enter($__internal_1c2a43f6b45a4a9eebd03924ead1995406487e4fe725f6a854af43c39caafaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36a3204cf7c3bfc44abdacaee454ae8bcab99ddb62a1a4f121e3dd7bbbbcb75b->leave($__internal_36a3204cf7c3bfc44abdacaee454ae8bcab99ddb62a1a4f121e3dd7bbbbcb75b_prof);

        
        $__internal_1c2a43f6b45a4a9eebd03924ead1995406487e4fe725f6a854af43c39caafaa4->leave($__internal_1c2a43f6b45a4a9eebd03924ead1995406487e4fe725f6a854af43c39caafaa4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8a97c7161f20c195f163b2ac34e856c222706b1a715ace3fb00cbeabd579ed97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a97c7161f20c195f163b2ac34e856c222706b1a715ace3fb00cbeabd579ed97->enter($__internal_8a97c7161f20c195f163b2ac34e856c222706b1a715ace3fb00cbeabd579ed97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ead294a1466ceac99f182ea196da024661a64c3284cc8c08e354e337ce1af2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead294a1466ceac99f182ea196da024661a64c3284cc8c08e354e337ce1af2e9->enter($__internal_ead294a1466ceac99f182ea196da024661a64c3284cc8c08e354e337ce1af2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ead294a1466ceac99f182ea196da024661a64c3284cc8c08e354e337ce1af2e9->leave($__internal_ead294a1466ceac99f182ea196da024661a64c3284cc8c08e354e337ce1af2e9_prof);

        
        $__internal_8a97c7161f20c195f163b2ac34e856c222706b1a715ace3fb00cbeabd579ed97->leave($__internal_8a97c7161f20c195f163b2ac34e856c222706b1a715ace3fb00cbeabd579ed97_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
