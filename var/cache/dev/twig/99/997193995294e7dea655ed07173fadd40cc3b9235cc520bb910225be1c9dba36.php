<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_ff276abf7458a85ec755fc74ee1cc90936feebf64e90ec6f2ce2d41c0ba7e959 extends Twig_Template
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
        $__internal_7886fd7ac6effa66386ef7c2882c73fef2b1ab12be012314acf1d3307aa92e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7886fd7ac6effa66386ef7c2882c73fef2b1ab12be012314acf1d3307aa92e9f->enter($__internal_7886fd7ac6effa66386ef7c2882c73fef2b1ab12be012314acf1d3307aa92e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_9479c50a534e4814d78059149a3a9fd319b2253ffd4aeab329af9b4276e1e252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9479c50a534e4814d78059149a3a9fd319b2253ffd4aeab329af9b4276e1e252->enter($__internal_9479c50a534e4814d78059149a3a9fd319b2253ffd4aeab329af9b4276e1e252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7886fd7ac6effa66386ef7c2882c73fef2b1ab12be012314acf1d3307aa92e9f->leave($__internal_7886fd7ac6effa66386ef7c2882c73fef2b1ab12be012314acf1d3307aa92e9f_prof);

        
        $__internal_9479c50a534e4814d78059149a3a9fd319b2253ffd4aeab329af9b4276e1e252->leave($__internal_9479c50a534e4814d78059149a3a9fd319b2253ffd4aeab329af9b4276e1e252_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a3b7cffed7f8e123f1545195b07f4b641e6e9186b5676615a0de57f7367eb3d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3b7cffed7f8e123f1545195b07f4b641e6e9186b5676615a0de57f7367eb3d6->enter($__internal_a3b7cffed7f8e123f1545195b07f4b641e6e9186b5676615a0de57f7367eb3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_49a4e3a29aa253cdff2577d93ae17ef6961bea64d57c325dc642dea60fae2ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a4e3a29aa253cdff2577d93ae17ef6961bea64d57c325dc642dea60fae2ba8->enter($__internal_49a4e3a29aa253cdff2577d93ae17ef6961bea64d57c325dc642dea60fae2ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_49a4e3a29aa253cdff2577d93ae17ef6961bea64d57c325dc642dea60fae2ba8->leave($__internal_49a4e3a29aa253cdff2577d93ae17ef6961bea64d57c325dc642dea60fae2ba8_prof);

        
        $__internal_a3b7cffed7f8e123f1545195b07f4b641e6e9186b5676615a0de57f7367eb3d6->leave($__internal_a3b7cffed7f8e123f1545195b07f4b641e6e9186b5676615a0de57f7367eb3d6_prof);

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
